<!--================ Content Wrapper===========================================-->

<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi inventori sederhana dengan CI & Bootstrap">
    <meta name="author" content="Djava-ui">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap-responsive.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/chosen.css')?>"/>
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>"/>
    <style type="text/css">
        .chzn-container-single .chzn-search input{
            width: 100%;
        }
    </style>

    <!-- Fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/favicon.ico')?>">

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/jquery.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('asset/js/chosen.jquery.js');?>"></script>
    <script type="text/javascript">
        $(function(){
            $('.chzn-select').chosen();
            $('.chzn-select-deselect').chosen({allow_single_deselect:true});
        });

    </script>

<!-- Load JQuery dari CDN -->
        <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        
        <!-- Load DataTables dan Bootstrap dari CDN -->
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
        
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
</head>
<body>

<div class="container">

    <!--========================= Header + Navbar ==============================-->
    <?php if ($this->session->userdata('LEVEL') == 'admin'){ ?>
        <div class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <ul class="nav">
                        <li class="<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>">
                            <a href="<?php echo site_url('dashboard')?>"><i class="icon-home"></i> Dashboard</a>
                        </li>
                        <li class="<?php if(isset($active_penjualan)){echo $active_penjualan ;}?>">
                            <a href="<?php echo site_url('penjualan')?>"><i class="icon-barcode"></i> Penjualan</a>
                        </li>
                        <li class="<?php if(isset($active_laporan)){echo $active_laporan ;}?>">
                            <a href="<?php echo site_url('laporan')?>"><i class="icon-file"></i> Laporan</a>
                        </li>
                        <li class="<?php if(isset($active_cust)){echo $active_cust ;}?>">
                            <a href="<?php echo site_url('customerpintar')?>"><i class="icon-file"></i> Cust. Pintar</a>
                        </li>
                        <li class="<?php if(isset($active_master)){echo $active_master ;}?>">
                            <a href="<?php echo site_url('master')?>"><i class="icon-cog"></i> Master Data</a>
                        </li>
                        <li><a href="<?php echo site_url('login/logout')?>" style="background: #333; color: #fff";><i class="icon-white icon-remove-sign"></i>  Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
    <?php } else { ?>

    <div class="navbar hidden-print">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav">
                    <li class="<?php if(isset($active_dashboard)){echo $active_dashboard ;}?>">
                        <a href="<?php echo site_url('dashboard')?>"><i class="icon-home"></i> Dashboard</a>
                    </li>
                    <li class="<?php if(isset($active_penjualan)){echo $active_penjualan ;}?>">
                        <a href="<?php echo site_url('penjualan')?>"><i class="icon-barcode"></i> Penjualan</a>
                    </li>
                    <li class="<?php if(isset($active_laporan)){echo $active_laporan ;}?>">
                        <a href="<?php echo site_url('laporan')?>"><i class="icon-file"></i> Laporan</a>
                    </li>
                    <li><a href="<?php echo site_url('login/logout')?>" style="background: #333; color: #fff"><i class="icon-white icon-remove-sign"></i>  Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <br>

<?php } ?>


<div class="navbar-inner"><br>
<div>
    <a href="<?php echo site_url('penjualan/pages_tambah_penjualan')?>" class="btn btn-mini btn-block" data-toggle="modal">
    <i class="icon-plus-sign icon-black"></i> Tambah Data</a>
</div>
<br>
<table id="table" class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No. CO</th>
        <th>Tanggal Order</th>
        <th>Customer</th>
        <th>Total Harga</th>
        <th>Detail</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($data_penjualan)){
        foreach($data_penjualan as $row){
            ?>
            <tr>
                <td><?php echo $row->kd_penjualan; ?></td>
                <td><?php echo date("d M Y",strtotime($row->tanggal_penjualan)); ?></td>
                <td><?php echo $row->kd_pelanggan; ?></td>
                <td><?php echo currency_format($row->total_harga); ?></td>
                <td>
                    <a class="btn btn-mini" href="<?php echo site_url('penjualan/detail_penjualan/'.$row->kd_penjualan)?>">
                        <i class="icon-eye-open"></i> Detail Order
                    </a>
            <!--        <a class="btn btn-mini" href="<?php echo site_url('penjualan/detail_customerpintar/'.$row->kd_penjualan)?>">
                        <i class="icon-eye-open"></i> Customer Pintar
                    </a> -->
                    <a class="btn btn-mini" href="<?php echo site_url('penjualan/hapus/'.$row->kd_penjualan)?>"
                       onclick="return confirm('Anda Yakin ?');">
                        <i class="icon-trash"></i> Hapus
                    </a>
                </td>
            </tr>
        <?php }
    }
    ?>
    </tbody>
</table>
</div>
        <script>
            $(document).ready(function(){
                $('#table').DataTable();
            });
        </script>
</body>
</html>