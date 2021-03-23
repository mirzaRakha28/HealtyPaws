<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th style="width: 10px">#</th>
            <th style="width: 10px"></th>
            <th>Nama Pasien</th>
            <th >Jam order</th>
            <th>Jam selesai</th>
            <th>Tanggal</th>
            <th style="width: 40px"></th>
        </tr>
        </thead>
        <tbody>
        <?php $index = 1;
         foreach($order as $od){?>
        <tr>
            <td><?=$index++?></td>
            <td><img src="<?=$od->gambar?>" width="40" alt=""></td>
            <td><?=$od->user?></td>
            <td><?=$od->jam_order?></td>
            <td><?=$od->jam_selesai?></td>
            <td><?=$od->tanggal?></td>
            <td><?php if($od->id_participant!=0){?>
            <a class="btn " href="<?=base_url()?>admin_dokter/chat2?id_user=<?=$od->id_user?>&&id=<?=$od->id_participant?>" role="button"><i class="fas fa-comment-dots"></i></a></td>
            <?php }?>
        </tr>
        <?php }?>

    </tbody>
</table>
    
</div>
