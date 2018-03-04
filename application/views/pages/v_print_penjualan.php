<html lang="en"><head>    <meta charset="utf-8">    <title><?php echo $title?></title>    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="description" content="Aplikasi inventori sederhana dengan CI & Bootstrap">    <meta name="author" content="Djava-ui">    <!-- CSS -->    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css')?>"/>    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-responsive.css')?>"/>    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>"/>    <style type="text/css">        .chzn-container-single .chzn-search input{            width: 100%;        }    </style>    <!-- Fav icon -->    <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico')?>"></head><body><div class="container">    <style type="text/css">        body{            background-color: #ffffff;        }        [class*="span"] {            float: left;            min-height: 1px;            margin-left: 5px;        }        .span {            width: 220px;        }        .sign{            height: 100px;            border-bottom: 1px solid #000000;        }        .text-center{            text-align: center        }        .line{            border-bottom: 1px double black;            border-top: 1px double black;            padding: 1px;        }        .line2{            border-bottom: 1px solid black;            padding: 1px;        }        hr{            border: 0.5px solid #000000;        }        .mytable{            border: 1px solid black;            width: 100%;        }        .mytable tr{            border: 1px solid black;        }        .mytable td{            border: 1px solid black;        }        .mytable th{            border: 1px solid black;        }        .mytable thead{            border:1px solid black;        }        .mytable tbody{            border:1px solid black;        }        .tableharga td{            border-bottom: 1px solid black;        }        .tableharga{            width: 100%;        }    </style>    <div align="left">            <strong style="font-size: 15px; float: left;">PT. SETYA UTOMO KARTON</strong> <br/>            <font style="font-size: x-small; float: left;">Jl. Raya Jogoloyo Pasar Wonosalam No.13</font><br/>            <font style="font-size: x-small; float: left;">Wonosalam Demak</font><br/>            <font style="font-size: x-small; float: left;">Telp. (0291)6908089 , Fax. (0291)6908099</font><br/>    </div>    <br>    <div class="line">    <div align="center">        <div align="left">            <table>                <?php if(isset($dt_penjualan)){ foreach($dt_penjualan as $row) { ?>                    <tr>                        <td width="50%"><font style="font-size: x-small;">Customer : <br/><b><?php echo $row->nm_pelanggan; ?></b></font><br>                        <font style="font-size: x-small;"><?php echo $row->alamat; ?></font></td>                        <td style="float: left">                        &emsp;&emsp;<font style="font-size: x-small;"> Invoice No./Date : </font><br>                        &emsp;&emsp;<font style="font-size: x-small;"> CO. No./Date &nbsp; &nbsp;&nbsp;&nbsp;: <?php echo $row->kd_penjualan; ?>/<?php echo date("d.m.Y",strtotime($row->tanggal_penjualan));?></font><br>                        &emsp;&emsp;<font style="font-size: x-small;"> SJ No./Date &nbsp;&nbsp; &nbsp; &nbsp; : </font>                        </td>                    </tr>                    <tr>                        <td width="50%"><font style="font-size: x-small;"> NPWP : <?php echo $row->email; ?></font></td>                        <td style="float: left">&emsp;&emsp; <font style="font-size: x-small;"> Purchase Order &nbsp;: <?php echo $row->po; ?>                        </font>                        </td>                    </tr>                <?php } } ?>            </table>        </div>    </div>    </div>        <div class="line2" align="left">            <font style="font-size: x-small;">Delivery Term &nbsp; &nbsp; &nbsp;&nbsp;:</font><br/>            <font style="font-size: x-small;">Delivery Date &nbsp; &nbsp; &nbsp;&nbsp;:</font><br/>            <font style="font-size: x-small;">Payment terms &nbsp; &nbsp;:</font>        </div>        <br>        <table class="mytable">        <font style="font-size: -x-small">            <thead>            <tr>                <th>No</th>                <th>Mat.Code<br>Mat.Desc</th>                <th>Total Unit</th>                <th>Price/Unit</th>                <th>Net Value (IDR)</th>            </tr>            </thead>        </font>            <?php            $no=1;            if(isset($barang_jual)){            foreach($barang_jual as $row){            ?>            <tbody>            <font style="font-size: -x-small">            <tr>                <td><?php echo $no++; ?></td>                <td><?php echo $row->nm_barang; ?> <br> <?php echo $row->ukuran; ?></td>                <td align="center"><?php echo $row->qty; ?></td>                <td align="right"><?php echo currency_format($row->harga)?></td>                <td align="right"><?php echo currency_format($row->subtotal)?></td>            </tr>            <?php }            }            ?>            </font>            </tbody>        </table>        <br>        <table class="tableharga">        <?php if(isset($dt_penjualan)){ foreach($dt_penjualan as $row) { ?>        <tr>        <font style="font-size: -x-small">        <td width="78%">Order Sub Total Value</td>        <td width="20%" align="right"><?php echo currency_format($row->total_harga)?></td>        </font>        </tr>        <tr>        <font style="font-size: -x-small">        <td width="78%">Output Tax (PPn)</td>        <td width="20%" align="right"></td>        </font>        </tr>        <tr>        <font style="font-size: -x-small">        <td width="78%">Final Amount</td>        <td width="20%" align="right"></td>        </font>        </tr>        <?php }}?>        </table><br>    <font style="font-size: x-small;">Say Total &nbsp; : </font>    <br>    <br>    <table>        <tr>    <td width="55%"><font style="font-size: x-small;">Demak, <?php echo date("d M Y"); ?></font><br><br><br><br>    <font style="font-size: small; float: left;"><b>TEGUH SAPTO</b></font>    </td>    <td><font style="font-size: x-small;">NB : Pembayaran kami anggap sah setelah<br>    ada transfer ke R/K : <br>    PT. SETYA UTOMO KARTON<br>    Bank BRI Cabang Demak<br>    ACC : 0016-01-000013-56-9</font><br><br>    </td>    </tr>    <tr>    </tr>        </table>    </div>    <br>    </div></body>