<?php
if(isset($detail_barang)){
    foreach($detail_barang as $row){
        ?>

        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">No.OP</label>
                    <div class="controls">
                        <input name="kd_barang" type="text" value="<?php echo $row->kd_barang; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Prod. Desc</label>
                    <div class="controls">
                        <input name="nm_barang" type="text" value="<?php echo $row->nm_barang; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group ">
                    <label class="control-label">Harga</label>
                    <div class="controls ">
                        <input name="harga" type="text" value="<?php echo $row->harga; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group ">
                    <label class="control-label">Ukuran</label>
                    <div class="controls ">
                        <input name="ukuran" type="text" value="<?php echo $row->ukuran; ?>" readonly="readonly">
                    </div>
                </div>
            </div>
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Kualitas</label>
                    <div class="controls">
                        <input id="quality" name="quality" type="text" value="<?php echo $row->quality; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Type</label>
                    <div class="controls">
                        <input id="type" name="type" type="text" value="<?php echo $row->type; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Ready Stok</label>
                    <div class="controls">
                        <input id="stok" name="stok" type="text" value="<?php echo $row->stok; ?>" readonly="readonly">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label">Order</label>
                    <div class="controls">
                        <input name="qty" type="text" class="" placeholder="Input Jumlah Order...">
                    </div>
                </div>
            </div>
        </div>

    <?php
    }
}
?>
