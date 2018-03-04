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
                            <dt>Tanggal Order :</dt>
                            <dd><?php echo date("d M Y",strtotime($row->tanggal_penjualan));?></dd>
                            <br/>
                            <dt>Tanggal Kirim :</dt>
                            <dd><?php echo date("d M Y",strtotime($row->tanggal_kirim));?></dd>
                            <br/>
                            <dt>Sales :</dt>
                            <dd><?php echo $row->nm_sales?></dd>
                            <br/>
                            <dt>Total Harga :</dt>
                            <dd><strong><u><?= currency_format($row->total_harga); ?></u></strong></dd>
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
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                <tr>
                    <th>No</th>
                    <th>No.OP</th>
                    <th>Product Description</th>
                    <th>Ukuran</th>
                    <th>Kualitas</th>
                    <th>Type</th>
                    <th>Order</th>  
                    <th>Kirim</th>  
                    <th>Sisa</th>  
                    <th>Harga</th>
                    <th>Update Data</th>
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
                            <td><?php echo $row->kualitas?></td>
                            <td><?php echo $row->type?></td>
                            <td><?php echo $row->qty?></td>
                            <td><?php echo $row->kirim?></td>
                            <td><?php echo $row->sisa_kirim?></td>
                            <td><?php echo currency_format($row->harga)?></td>
                            <td><a class="btn btn-mini" href="#modalEditBarang<?php echo $row->kd_barang?>" data-toggle="modal"><i class="icon-pencil"></i> Edit</a></td>
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

                <a href="<?php echo site_url('cetak/print_suratjalan/'.$row->kd_penjualan)?>" class="btn">
                    <i class="icon-print"></i> Cetak SJ
                </a>

                <a href="<?php echo site_url('cetak/print_suratjalankosong/'.$row->kd_penjualan)?>" class="btn">
                    <i class="icon-print"></i> Cetak SJ Kosong
                </a>

                <a href="<?php echo site_url('cetak/print_co/'.$row->kd_penjualan)?>" class="btn">
                    <i class="icon-print"></i> Cetak CO
                </a>

            <!--    <a href="<?php echo site_url('cetak/print_customerpintar/'.$row->kd_penjualan)?>" class="btn">
                    <i class="icon-print"></i> Cetak Cust. Pintar
                </a> -->
                <a href="<?php echo site_url('cetak/print_penjualan/'.$row->kd_penjualan)?>" class="btn">
                    <i class="icon-print"></i> Cetak Invoice
                </a>

            </div>
        </div>
    </div>
</div>

<!-- ============ MODAL EDIT BARANG =============== -->
<?php
if (isset($barang_jual)){
    foreach($barang_jual as $row){
        ?>
        <div id="modalEditBarang<?php echo $row->kd_barang?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Edit Data Barang</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo site_url('master/edit_jual')?>">
                <div class="modal-body">
                    <div class="control-group">
                        <label class="control-label">No.OP</label>
                        <div class="controls">
                            <input name="kd_barang" type="text" value="<?php echo $row->kd_barang;?>" readonly>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >OP</label>
                        <div class="controls">
                            <input name="kd_penjualan" type="text" value="<?php echo $row->kd_penjualan;?>" readonly>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Nama Barang</label>
                        <div class="controls">
                            <input name="nm_barang" type="text" value="<?php echo $row->nm_barang;?>" readonly>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" >Ukuran</label>
                        <div class="controls">
                            <input name="ukuran" type="text" value="<?php echo $row->ukuran;?>" readonly>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" >Kualitas</label>
                        <div class="controls">
                            <input name="kualitas" type="text" value="<?php echo $row->kualitas;?>" readonly>
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" >Type</label>
                        <div class="controls">
                            <input name="type" type="text" value="<?php echo $row->type;?>" readonly>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Harga</label>
                        <div class="controls">
                            <input name="harga" type="text" value="<?php echo $row->harga;?>" readonly>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Order</label>
                        <div class="controls">
                            <input name="qty" type="text" value="<?php echo $row->qty;?>" readonly>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Kirim</label>
                        <div class="controls">
                            <input name="kirim" type="text" value="<?php echo $row->kirim;?>" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" >Sisa</label>
                        <div class="controls">
                            <input name="sisa_kirim" type="text" value="<?php echo $row->sisa_kirim;?>" >
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Harga</label>
                        <div class="controls">
                            <input name="harga" type="text" value="<?php echo $row->harga;?>" readonly>
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label" >Subtotal</label>
                        <div class="controls">
                            <input name="subtotal" type="text" value="<?php echo $row->subtotal;?>" readonly>
                        </div>
                    </div>

                    <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </div>
                
            </form>
        </div>
    <?php }
}
?>