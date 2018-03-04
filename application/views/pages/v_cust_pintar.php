<script type="text/javascript">
    $(function(){
        $("#btnCari").click(function() {
            var $form = $('#laporanPage').find('form'),
                $tgl_awal = $("#tgl_awal").val(),
                $tgl_akhir = $("#tgl_akhir").val(),
                $url = $form.attr('action');
        });
    });
</script>

<h3 style="text-align: center">
    Lihat Customer Pintar
</h3>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span4">&nbsp;</div>
        <div class="span4 loader" style="text-align: center">
            <div class="progress progress-striped active" style="display: none">
                <div class="bar" style="width: 100%;"></div>
            </div>
        </div>
        <div class="span4">&nbsp;</div>
    </div>

    <div style="border-bottom: 1px #999 dashed; margin-bottom: 20px"></div>

    <div class="row-fluid">
        <div id="laporanPage">
            <form class="form-horizontal" method="post" action="<?= site_url('customerpintar/cari')?>">
                <div class="control-group">
                    <label class="control-label" for="start_date">Tanggal Awal</label>
                    <div class="controls">
                        <input type="date" id="tgl_awal" name="tgl_awal">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="end_date">Tanggal Akhir</label>
                    <div class="controls">
                        <input type="date" id="tgl_akhir" name="tgl_akhir">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button id="btnCari" type="submit" class="btn btn-info"><i class="icon icon-white icon-search"></i> Search...</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div style="border-bottom: 1px #999 dashed; margin-bottom: 20px"></div>

    <div class="row-fluid">
        <div id="result"></div>
    </div>

</div>