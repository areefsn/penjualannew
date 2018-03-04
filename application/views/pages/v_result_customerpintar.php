<head>
<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_customerpintar.doc");
?>
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
    </style>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>Tgl.Order</th>
        <th>No.CO</th>
        <th>No.PO</th>
        <th>No.OP</th>
        <th>Items</th>
        <th>Ukuran</th>
        <th>Tgl.Kirim</th>
        <th>Order</th>
        <th>Harga</th>
        <th>Total Kirim</th>
        <th>Sisa Kirim</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($dt_result)){
        foreach($dt_result as $row){
            ?>
            <tr class="gradeX">
                <td align="center"><?php echo date("d M",strtotime($row->tanggal_penjualan)); ?></td>
                <td><?php echo $row->kd_penjualan; ?></td>
                <td><?php echo $row->po; ?></td>
                <td align="center"><?php echo $row->kd_barang; ?></td>
                <td><?php echo $row->nm_barang; ?></td>
                <td><?php echo $row->ukuran; ?></td>
                <td align="center"><?php echo date("d M",strtotime($row->tanggal_kirim)); ?></td>
                <td align="center"><?php echo $row->qty; ?></td>
                <td><?php echo currency_format($row->harga); ?></td>
                <td></td>
                <td></td>
            </tr>

     <!--       <tr>
                <td colspan="4" style="text-align: center; background: #49afcd"><strong>Total Seluruh Penjualan</strong></td>
                <td><?= currency_format($row->total_all)?></td>
            </tr> -->
        <?php }
    }
    ?>
    </tbody>
</table>

<hr/>

<button class="btn pull-right" onclick="print()">
    <i class="icon-print"></i> Print
</button>
</div>
</body>
