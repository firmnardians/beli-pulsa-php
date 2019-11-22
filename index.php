<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        $nameData = $_POST['name'];
        $dateData = $_POST['date'];
        $kodeVoucherData = $_POST['kodeVoucher'];
        $countData = $_POST['count'];

        $simpati = 20000;
        $smartfren = 50000;
        $im3 = 10000;
        $xl = 50000;

        if ($kodeVoucherData == "SP20"){
            $subtotal = $simpati * $countData;
        }elseif ($kodeVoucherData == "SM50"){
            $subtotal = $smartfren * $countData;
        }elseif ($kodeVoucherData == "M310"){
            $subtotal = $im3 * $countData;
        }elseif ($kodeVoucherData == "XL50"){
            $subtotal = $xl * $countData;
        }

        if ($countData > 3){
            $diskon = ($subtotal * 30) /100;
        } else {
            $diskon = "Tidak dapat diskon";
        }

        $total = $subtotal - $diskon;
    ?>

<form action="" method="POST">
    <table border="1" width="400" cellpadding="10">
        <th colspan="2" class="subTitle">Jual Beli Pulsa</th>
        <tr>
            <td>Nama Customer</td>
            <td><input type="text" placeholder="Nama..."></td>
        </tr>
        <tr>
            <td>Tanggal Beli</td>
            <td><?php echo date("Y-m-d"); ?></td>
        </tr>
        <tr>
            <td>Kode Voucher</td>
            <td>
                <select name="kodeVoucher" id="">
                    <option value="SP20">SP20</option>
                    <option value="SM50">SM50</option>
                    <option value="M310">M310</option>
                    <option value="XL50">XL50</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Jumlah Beli</td>
            <td>
                <select name="count" id="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btnPrimary" type="submit" value="Bayar"></td>
        </tr>
    </table>
</form>


<!-- output data -->

<table class="cardResult" border="1" width="400" cellpadding="10">
    <th colspan="2" class="subTitle">Detail Transaksi</th>
    <tr>
        <td>Nama Operator</td>
        <td>
        <?php
            if ($kodeVoucherData == "SP20"){
                echo "Simpati";
            }elseif ($kodeVoucherData == "SM50"){
                echo "Smartfren";
            }elseif ($kodeVoucherData == "M310"){
                echo "IM3";
            }elseif ($kodeVoucherData == "XL50"){
                echo "XL";
            }
        ?>
        </td>
    </tr>
    
    <tr>
        <td>Harga</td>
        <td>
            <?php
                if ($kodeVoucherData == "SP20"){
                    echo "$simpati";
                }elseif ($kodeVoucherData == "SM50"){
                    echo "$smartfren";
                }elseif ($kodeVoucherData == "M310"){
                    echo "$im3";
                }elseif ($kodeVoucherData == "XL50"){
                    echo "$xl";
                }
            ?>
        </td>
    </tr>
    
    <tr>
        <td>Subtotal</td>
        <td>
            <?php
                echo "$subtotal";
            ?>
        </td>
    </tr>

    <tr>
        <td>Diskon 30%</td>
        <td>
            <?php
                echo "$diskon";
            ?>
        </td>
    </tr>

    <tr>
        <td class="resultData">Total Bayar</td>
        <td class="resultData">
            <?php
                echo "$total";
            ?>
        </td>
    </tr>
</table>
<!-- output data -->

</body>
</html>

<style>
body{
    font-family: arial;
}
.subTitle{
    font-size: 21px;
}
input{
    font-size: 18px;
}
select{
    font-size: 18px;
}
.btnPrimary{
    background: dodgerblue;
    padding: 12px;
    color: #fff;
    border: none;
    font-size: 18px;
    border-radius: 4px;
    cursor:pointer;
    font-weight:600;
}
.hidden{
    display: none;
}
.resultData{
    background: green;
    color: #fff;
}
.cardResult{
    margin-top: 30px;
}
</style>
