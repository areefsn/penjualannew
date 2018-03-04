<!--========================= Content Wrapper ==============================-->
<div class="container">

    <div class="well">
        <h4 class="alert alert-info" style="text-align: center">Keterangan</h4>
        <div class="row-fluid">
            <?php if(isset($dt_penjualan)){
                foreach($dt_penjualan as $row){
                    ?>
                    <div class="span6">
                        <dl class="dl-horizontal">
                            <dt>No. CO :</dt>
                            <dd><?php echo $row->kd_penjualan?></dd>
                            <br/>
                            <dt>No. PO :</dt>
                            <dd><?php echo $row->po?></dd>
                            <br/>
                            <dt>Tanggal Order :</dt>
                            <dd><?php echo date("d M Y",strtotime($row->tanggal_penjualan));?></dd>
                            <br/>
                            <dt>Tanggal Kirim :</dt>
                            <dd><?php echo date("d M Y",strtotime($row->tanggal_kirim));?></dd>
                        </dl>
                    </div>
                    <div class="span6">
                        <dl class="dl-horizontal">
                            <dt>Customer :</dt>
                            <dd><?php echo $row->nm_pelanggan?></dd>
                            <br/>
                            <dt>Kode Customer :</dt>
                            <dd><?php echo $row->kd_pelanggan?></dd>
                            <br/>
                            <dt>Alamat :</dt>
                            <dd><?php echo $row->alamat?></dd>
                            <br/>
                            <dt>NPWP :</dt>
                            <dd><?php echo $row->email?></dd>
                            <br/>
                        </dl>
                    </div>
                <?php }
            }
            ?>
        </div>
    </div>


    <div class="well">
        <h4 class="alert alert-info" style="text-align: center"> Daftar Barang</h4>
        <div class="row-fluid">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>No.OP</th>
                    <th>Items</th>
                    <th>Ukuran</th>
                    <th>Order</th>
                    <th>Harga</th>
                    <th>Total Kirim</th>
                    <th>Sisa Kirim</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                if(isset($barang_jual)){
                    foreach($barang_jual as $row ){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row->kd_barang?></td>
                            <td><?php echo $row->nm_barang?></td>
                            <td><?php echo $row->ukuran?></td>
                            <td><?php echo $row->qty?></td>
                            <td><?php echo currency_format($row->harga)?></td>
                            <td><?php echo $row->total_kirim?></td>
                            <td><?php echo $row->sisa_kirim?></td>
                        </tr>
                    <?php }
                }
                ?>
                </tbody>
            </table>

            <div class="form-actions">
                <a href="<?php echo site_url('penjualan')?>" class="btn btn-inverse">
                    <i class="icon-circle-arrow-left icon-white"></i> Back
                </a>
            </div>
        </div>
        </div>
</div>