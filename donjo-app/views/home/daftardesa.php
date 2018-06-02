<script>
	$(function() {
		var keyword = <?php echo $keyword?> ;
		$( "#cari" ).autocomplete({
			source: keyword
		});
	});
</script>
<div id="pageC">
<!-- Start of Space Admin -->
	<table class="inner">
	<tr style="vertical-align:top">
<td style="background:#fff;padding:0px;">
<div class="content-header">

</div>
<div id="contentpane">
	<form id="mainform" name="mainform" action="" method="post">
    <div class="ui-layout-north panel">
      <div class="left"><h3>Pemerintah <?php echo ucwords($this->setting->sebutan_desa)?></h3>
        <div class="uibutton-group">
          <a href="<?php echo site_url('daftardesa/form')?>" class="uibutton tipsy south" title="Tambah Data" ><span class="fa fa-plus-square">&nbsp;</span>Tambah <?php echo ucwords($this->setting->sebutan_desa)?></a>
          <button type="button" title="Hapus Data" onclick="deleteAllBox('mainform','<?php echo site_url("daftardesa/delete_all")?>')" class="uibutton tipsy south"><span class="fa fa-trash">&nbsp;</span>Hapus Data
        </div>
      </div>
    </div>
    <div class="ui-layout-center" id="maincontent" style="padding: 5px;">
      <div class="table-panel top">
        <div class="left">
          
        </div>
       
      </div>
        <table class="list">
      		<thead>
            <tr>
              <th width="5">No</th>
              <th width="10"><input type="checkbox" class="checkall"/></th>
              <th width="100">Aksi</th>
      				<th align="left">Nama Desa</th>
              <th align="left">Nama Kepala</th>
      				<th align="left">NIP Kepala</th>
              <th align="left">Kode Pos</th>
              <th align="left">Alamat Kantor</th>
      				<th>&nbsp;</th>
      			</tr>
      		</thead>
      		<tbody>

            <?php $no=0;  foreach($main as $data){ $no++; ?>
          		<tr>
                <td align="center" width="2"><?php echo $no; ?></td>
          			<td align="center" width="5">
          				<input type="checkbox" name="id_cb[]" value="<?php echo $data['id']?>" />
          			</td>
                <td width="5">
                  <div class="uibutton-group">
                    <?php if($data['pamong_id']!="707"){?>
                      <a href="<?php echo site_url("daftardesa/form/$data[id]")?>" class="uibutton tipsy south fa-tipis" title="Ubah Data"><span class="fa fa-edit"></span> Ubah</a>
                      <a href="<?php echo site_url("daftardesa/delete/$data[id]")?>" class="uibutton tipsy south" title="Hapus Data" target="confirm" message="Apakah Anda Yakin?" header="Hapus Data"><span class="fa fa-trash"></span></a>
                    <?php }?>
                  </div>
                </td>
                <td><?php echo $data['nama_desa']?></td>
          			<td><?php echo $data['nama_kepala_desa']?></td>
                <td><?php echo $data['nip_kepala_desa']?></td>
                 <td><?php echo $data['kode_pos']?></td>
                <td><?php echo $data['alamat_kantor']?></td>
        				<td>&nbsp;</td>
        		  </tr>
            <?php }?>
      		</tbody>
        </table>
      </div>
  	</form>
    <div class="ui-layout-south panel bottom">
      <div class="left">
      </div>
      <div class="right">
      </div>
    </div>
  </div>
</td></tr></table>
</div>
