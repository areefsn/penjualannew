<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Kode Penjualan</th>
        <th>Nama Pelanggan</th>
        <th>Jumlah Order</th>
        <th>Total Harga</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    if(isset($dt_result)){
        foreach($dt_result as $row){
            ?>
            <tr class="gradeX">
                <td><?php echo $no++; ?></td>
                <td><?php echo date("d M Y",strtotime($row->tanggal_penjualan)); ?></td>
                <td><?php echo $row->kd_penjualan; ?></td>
                <td><?php echo $row->kd_pelanggan; ?></td>
                <td><?php echo $row->jumlah; ?></td>
                <td><?php echo currency_format($row->total_harga); ?></td>
                <td>
                    <a class="btn btn-mini" href="<?php echo site_url('penjualan/detail_penjualan/'.$row->kd_penjualan)?>">
                    <i class="icon-eye-open"></i> Detail Order
                </a>
                </td>
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