<!DOCTYPE html><html><head><?phpheader("Content-type: application/vnd.ms-word");header("Content-Disposition: attachment;Filename=document_sj.doc");?>    <meta charset="utf-8">    <title><?php echo $title?></title>    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <meta name="description" content="Aplikasi inventori sederhana dengan CI & Bootstrap">    <meta name="author" content="Djava-ui">    <!-- CSS -->    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css')?>"/>    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-responsive.css')?>"/>    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>"/>    <style type="text/css">        .chzn-container-single .chzn-search input{            width: 100%;        }    </style>    <!-- Fav icon -->    <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico')?>"></head><body><div class="container">    <style type="text/css">        body{            background-color: #ffffff;        }        .span {            margin-left: 50px;        }        .span1 {            margin-top: 60px;            margin-left: 120px        }        .sign{            margin-top: 30px;        }        .text-center{            text-align: center;        }        .line{            border-bottom: 1px double #000000;            border-top: 1px double #000000;            padding: 1px 0;        }        hr{            border: 0.5px solid #000000;        }        .mytable{            border: 1px solid black;            width: 100%;        }        .mytable tr{            border: 1px solid black;        }        .mytable td{            border: 1px solid black;        }        .mytable th{            border: 1px solid black;        }        .mytable thead{            border:1px solid black;        }        .mytable tbody{            border:1px solid black;        }        img{            margin-top: -35px;            margin-left: 2px;        }    </style>    <div align="left">        <table>                <?php if(isset($dt_penjualan)){ foreach($dt_penjualan as $row) { ?>                    <tr>                                                <td width="55%">                        <img src="<?php echo base_url('asset/img/logo.png'); ?>"/>                        </td>                        <td>                        <b><font style="font-size: 15px;">Ship-to address</font></b><br>                        <font style="font-size: 13px;"><?php echo $row->nm_pelanggan; ?></font><br>                        <font style="font-size: 12px"><?php echo $row->alamat; ?></font><br>                        <font style="font-size: 12px">NPWP : <?php echo $row->email; ?>                        </td>                    </tr>                <?php } } ?>            </table>    </div>    <font style="font-size: 12px"> Kami kirimkan barang - barang tersebut dibawah ini dengan kendaraan</font> &emsp; &emsp; <b>TRUCK<b>&emsp; &nbsp;<b>NO.</b></font>    <div align="center">        <table class="mytable">            <thead>            <tr>                <th>Banyaknya</th>                <th>Nama Barang</th>                <th>Ukuran</th>                <th>NO. OP</th>            </tr>            </thead>            <?php            $no=1;            if(isset($barang_jual)){            foreach($barang_jual as $row){            ?>            <tbody>            <tr>                <td><?php echo $row->kirim; ?> pcs</td>                <td><?php echo $row->nm_barang; ?></td>                <td><?php echo $row->ukuran; ?></td>                <td><?php echo $row->kd_barang; ?></td>            </tr>            <?php }            }            ?>            </tbody>        </table>        <div>&emsp; &emsp; &emsp; &emsp;  &emsp; &emsp; &emsp;        <?php if(isset($dt_penjualan)){ foreach($dt_penjualan as $row) { ?>        Purchase Order : <font style="font-size: 12px"><?php echo $row->po; ?></font>        <?php }}?>&emsp; &emsp; &emsp; &emsp; &emsp; <font style="font-size: 12px">Demak, <?php echo date("d M Y") ?></font>        </div>    </div>    <div class="span">        <h5>Penerima &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;             Pembawa &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;             Pengirim        </h5>    </div>    <div class="sign">&nbsp; &emsp; &nbsp;    (-----------------) &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &nbsp; &nbsp; &nbsp;     (-----------------) &emsp;  &emsp; &emsp; &emsp; &emsp; &nbsp; &nbsp;    (-----------------)    </div>    </div>    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.printPage.js')?>"></script>    <script type="text/javascript">        $(document).ready(function(){            $(".btnPrint").printPage();        })    </script></div></body></html>