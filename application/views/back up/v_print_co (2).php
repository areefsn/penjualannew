<html lang="en">
<head>

    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-responsive.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>"/>
    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>

    <!-- Fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico')?>">


</head>

<body>
<div class="container">

    <style type="text/css">
        body{
            background-color: #ffffff;
        }
        [class*="span"] {
            float: left;
            min-height: 1px;
            margin-left: 5px;
        }
        .span {
            width: 220px;
        }
        .sign{
            height: 100px;
            border-bottom: 1px solid #000000;
        }
        .line{
            border-bottom: 1px double #000000;
            border-top: 1px double #000000;
            padding: 1px 0;
        }
        hr{
            border: 0.5px solid #000000;
        }
        table{
            border: 1px solid black;
            width: 100%;
            font-size: 12px;
        }
        tr{
            border: 1px solid black;
        }
        td{
            border: 1px solid black;
        }
        th{
            border: 1px solid black;
        }
        thead{
            border:1px solid black;
        }
        tbody{
            border:1px solid black;
        }
        .tableatas{
            border:1px ;
        }
        .tableharga td{
            border-bottom: 1px solid black;
        }
        .tableharga{
            width: 100%;
        }
        .kiri{
            margin-top: -101px;
            margin-left: 700px;
        }

    </style>
    <div align="center">
        <div align="left"><img src="<?php echo base_url('asset/img/logo.png'); ?>"/></div>
        <?php if(isset($dt_penjualan)){ foreach($dt_penjualan as $row) { ?>
        <div align="center">Confirmasi of Order<br><?php echo $row->po;?> - <?php echo $row->kd_pelanggan; ?> 
        </div>
        <div align="left">
                        <strong style="font-size: x-small;">CUSTOMER : <?php echo $row->nm_pelanggan; ?></strong><br>
                        <strong style="font-size: x-small;">NO. PO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $row->po;?></strong><br>
                        <strong style="font-size: x-small;">Tgl. Order&nbsp;&nbsp;&nbsp; : <?php echo date("d M Y",strtotime($row->tanggal_penjualan));?></strong><br>
                        <strong style="font-size: x-small;">Tgl. Kirim&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo date("d M Y",strtotime($row->tanggal_kirim));?></strong><br>
                        <strong style="font-size: x-small;">Printing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </strong><br>
                        <strong style="font-size: x-small;">Note&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </strong><br>
                        <strong style="font-size: x-small;">Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </strong><br>

                <?php } } ?>
        </div>
        <table width="461" border="1">
        <thead>
        <table class="tableharga">
        <?php if(isset($dt_penjualan)){ foreach($dt_penjualan as $row) { ?>
        <tr>
        <font style="font-size: -x-small">
        <div align="right"><?php echo currency_format($row->total_harga)?></div>
        <?php }}?>
          <tr>       
            <td><strong>NO.OP</strong></td>
            <th>Item Description</th>
            <th>Ukuran/cm</th>
            <th>Order</th>
            <th>Harga</th>
            <th>TOTAL</th>
          </tr>
          </thead>
          <tr>
           <?php
            $no=1;
            if(isset($barang_jual)){
            foreach($barang_jual as $row){
            ?>
            <tbody>
            <tr>
                <td><?php echo $row->kd_barang; ?></td>
                <td><?php echo $row->nm_barang; ?></td>
                <td><?php echo $row->ukuran; ?></td>
                <td><?php echo $row->qty; ?></td>
                <td><?php echo currency_format($row->harga)?></td>
                <td><?php echo currency_format($row->subtotal)?></td>
            </tr>
            <?php }
            }
            ?>
            
      </table>
      
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <table>
            <thead>
            <tr>
                <th>NO.OP</th>
                <th>Item Description</th>
                <th>Ukuran/cm</th>
                <th>Order</th>
                <th>Harga</th>
                <th>TOTAL</th>
            </tr>
          </thead>
            <?php
            $no=1;
            if(isset($barang_jual)){
            foreach($barang_jual as $row){
            ?>
            <tbody>
            <tr>
                <td><?php echo $row->kd_barang; ?></td>
                <td><?php echo $row->nm_barang; ?></td>
                <td><?php echo $row->ukuran; ?></td>
                <td><?php echo $row->qty; ?></td>
                <td><?php echo currency_format($row->harga)?></td>
                <td><?php echo currency_format($row->subtotal)?></td>
            </tr>
            <?php }
            }
            ?>
      </table>
      <table class="tableharga">
        <?php if(isset($dt_penjualan)){ foreach($dt_penjualan as $row) { ?>
        <tr>
        <font style="font-size: -x-small">
        <div align="right"><?php echo currency_format($row->total_harga)?></div>
        <?php }}?>
        </table>
    <div align="left"><strong style="font-size:small;">Catatan &nbsp; : </strong></div>
    <br>
    <br>
    <div align="left">
    <font style="font-size: x-small;">Demak, <?php echo date("d M Y"); ?></font><br>Hormat Kami<br>PT Setya Utomo Karton<br><br><br><br>
    <font style="font-size: small; float: left;"><b>TEGUH SAPTO</b></font>
    </div>
    <div class="kiri"><font style="font-size: small;">Menyetujui<br>
    <?php if(isset($dt_penjualan)){ foreach($dt_penjualan as $row) { ?>
    <?php echo $row->nm_pelanggan; ?>
    <?php } } ?>
    <br>
    </font><br><br>BPk
    </div>

    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.printPage.js')?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".btnPrint").printPage();
        })
    </script>

</div>
</body>
</html>
</font>