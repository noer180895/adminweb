<script>
	$(function() {
		var keyword = <?php echo $keyword?> ;
		$( "#cari" ).autocomplete({
			source: keyword
		});
	});
</script>

<div id="pageC">
<table class="inner">
<tr style="vertical-align:top">

	<?php if($this->modul_ini <> 15): ?>
		<td class="side-menu">
			<legend>Kategori Dokumen</legend>
			<div class="lmenu">
				<ul>
					<a href="<?php echo site_url("dokumen/index/1")?>"><li <?php if($kat==1)echo "class='selected'";?>>Umum</li></a>
					<a href="<?php echo site_url("dokumen/index/2")?>"><li <?php if($kat==2)echo "class='selected'";?>>Inventaris dan Kekayaan Desa</li></a>
					<a href="<?php echo site_url("dokumen/index/3")?>"><li <?php if($kat==3)echo "class='selected'";?>>Peraturan desa</li></a>					
					<a href="<?php echo site_url("dokumen/index/4")?>"><li <?php if($kat==4)echo "class='selected'";?>>Aparat Pemerintah Desa</li></a>
					<a href="<?php echo site_url("dokumen/index/5")?>"><li <?php if($kat==5)echo "class='selected'";?>>Agenda</li></a>
					<a href="<?php echo site_url("dokumen/index/6")?>"><li <?php if($kat==6)echo "class='selected'";?>>Ekspedisi</li></a>
					<a href="<?php echo site_url("dokumen/index/7")?>"><li <?php if($kat==7)echo "class='selected'";?>>Lembaran Desa dan Berita Desa</li></a>
					
				</ul>
			</div>
		</td>
	<?php endif; ?>

	<td style="background:#fff;padding:0px;">
		<div id="contentpane">
			<form id="mainform" name="mainform" action="" method="post">
				<input name="kategori" type="hidden" value="<?php echo $kat?>">
		    <div class="ui-layout-north panel">
					<div class="content">
						<h3>Dokumen: <?php if($kat == 6){ echo 'Ekspedisi'; }else{ echo 'Umum'; }?></h3>
					</div>
		      <div class="left">
		        <div class="uibutton-group">
		        	<?php if($user_role == 2) { ?> <!-- id role user is operator -->
		          	<a href='<?php echo site_url("{$this->controller}/form/$kat")?>' class="uibutton tipsy south" title="Tambah Data" ><span class="fa fa-plus-square">&nbsp;</span>Tambah Dokumen Baru</a>
		         
			          <button type="button" title="Hapus Data" onclick="deleteAllBox('mainform','<?php echo site_url("{$this->controller}/delete_all/$kat/$p/$o")?>')" class="uibutton tipsy south"><span class="fa fa-trash">&nbsp;</span>Hapus Data</button>
			        <?php } ?>
		        </div>
		      </div>
		    </div>
		    <div class="ui-layout-center" id="maincontent" style="padding: 5px;">
		      <div class="table-panel top">
		        <div class="left">
		          
		        </div>
		        <div class="right">
		          <input name="cari" id="cari" type="text" class="inputbox help tipped" size="20" value="<?php echo $cari?>" title="Cari.." onkeypress="if (event.keyCode == 13) {$('#'+'mainform').attr('action','<?php echo site_url('dokumen/search')?>');$('#'+'mainform').submit();}" />
		          <button type="button" onclick="$('#'+'mainform').attr('action','<?php echo site_url('dokumen/search')?>');$('#'+'mainform').submit();" class="uibutton tipsy south"  title="Cari Data"><span class="fa fa-search">&nbsp;</span>Cari</button>
		        </div>
		      </div>		      
		      <table class="list">
						<thead>
		          <tr>
		            <th>No</th>
		            <?php if($user_role == 2){?>
		            	<th><input type="checkbox" class="checkall"/></th>
		            <?php }else if ($user_role == 4) { ?>
		            	<th>Approval Dokumen</th>
		            <?php } ?>
		            <?php if($user_role == 2) { ?> <!-- id role user is operator -->
		            	<th width="120">Aksi</th>
		            <?php } ?>
						 		<?php  if($o==2): ?>
									<th align="left"><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/1")?>">Judul / Tentangggg <span class="fa fa-sort-asc fa-sm">
								<?php  elseif($o==1): ?>
									<th align="left"><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/2")?>">Judul / Tentanggg<span class="fa fa-sort-desc fa-sm">
								<?php  else: ?>
									<th align="left"><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/3")?>">Judul / Tentangg <span class="fa fa-sort fa-sm">
								<?php  endif; ?>&nbsp;</span></a></th>

							  <?php if ($kat == 2) : ?>
							  	<th style="    width: 28px;">Jenis Barang / Bangunan</th>
							  	<th colspan="3" style="width: 28px!important;">Asal Barang / Bangunan</th>
							  	<tr>
							  		<th style="width: 28px;">Dibeli Sendiri</th> 
							  		<th style="width: 28px;">Bantuan</th>
							  		<th style="width: 28px;">Sumbangan</th>
							  	</tr>
							  	<th colspan="2" style="width: 28px;">Keadaan Barang / Bangunan Awal tahun</th>
							  	<tr> 							  		
							  		<th style="width: 28px;">Baik</th> 
							  		<th style="width: 28px;">Rusak</th> 
							  	</tr>
							  	<th colspan="4" style="width: 28px;">Penghapusan Barang dan bangunan</th>
							  	<tr> 							  		
							  		<th style="width: 28px;">Rusak</th> 
							  		<th style="width: 28px;">Dijual</th> 
							  		<th style="width: 28px;">Disumbangkan</th> 
							  		<th style="width: 28px;">Tanggal Penghapusan</th> 
							  	</tr>
							  	<th style="width: 28px;">Keterangann</th>
							  <?php elseif ($kat == 3) : ?>
							  	<th>Nomor Dan Tanggal Ditetapkan</th>
							  	<th>Uraian Singkat</th>
							  <?php elseif ($kat == 4) : ?>
							  	<th>Nama Lengkap</th>
							  	<th>Nomor Induk Aparat Pemerintah Desa(NIAP)</th>
							  	<th>Nomor Induk Pegawai(NIP)</th>
							  	<th>Jenis Kelamin</th>
							  	<th>Tempat dan Tanggal Lahir</th>
							  	<th>Agama</th>
							  	<th>Pangkat Golongan</th>
							  	<th>Jabatan</th>
							  	<th>Pendidikan Terakhir</th>
							  	<th>Nomor dan Tanggal Keputusan Pemberhentian</th>
							  	<th>Keterangan</th>
							  <?php elseif ($kat == 6) : ?>
							  	<th>No.Urut</th>
				            	<th>Tanggal Pengiriman</th>
				            	<th>Tanggal dan Nomor Surat</th>
				            	<th>Isi Singkat Surat Yang Dikirim</th>
				            	<th>Ditujukan Kepada</th>
				            	<th>Keterangan</th>
							  <?php endif; ?>

								<?php  if($o==1): ?>
									<th align="center"><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/3")?>">Aktif? <span class="fa fa-sort-asc fa-sm">
								<?php  else: ?>
									<th align="center"><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/3")?>">Aprrove? <span class="fa fa-sort fa-sm">
								<?php  endif; ?>&nbsp;</span></a></th>

								<?php  if($o==6): ?>
									<th align="center" width='200'><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/5")?>">Diunggah pada <span class="fa fa-sort-asc fa-sm">
								<?php  elseif($o==5): ?>
									<th align="center" width='200'><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/6")?>">Diunggah pada <span class="fa fa-sort-desc fa-sm">
								<?php  else: ?>
									<th align="center" width='200'><a href="<?php echo site_url("{$this->controller}/index/$kat/$p/5")?>">Diunggah pada <span class="fa fa-sort fa-sm">
								<?php  endif; ?>&nbsp;</span></a></th>
							</tr>
						</thead>
						<tbody>
					    <?php foreach($main as $data){?>
								<tr>
									<td align="center" width="2"><?php echo $data['no']?></td>
									<?php if($user_role == 2) { ?> <!-- id role user is operator -->
										<td align="center" width="5">
											<input type="checkbox" name="id_cb[]" value="<?php echo $data['id']?>" />
										</td>
										<td>
											<div class="uibutton-group" style="display: flex;">

												<a href="<?php echo site_url("{$this->controller}/form/$kat/$p/$o/$data[id]")?>" class="uibutton tipsy south fa-tipis" title="Ubah Data"><span class="fa fa-edit"></span> Ubah</a>
												<a href="<?php echo base_url().LOKASI_DOKUMEN.underscore($data['satuan'])?>" class="uibutton tipsy south fa-tipis" title="Unduh Berkas"><span class="fa fa-download"></span> Unduh</a>
												
												<a href="<?php echo site_url("{$this->controller}/delete/$kat/$p/$o/$data[id]")?>" class="uibutton tipsy south" title="Hapus Data" target="confirm" message="Apakah Anda Yakin?" header="Hapus Data"><span class="fa fa-trash"><span></a>
									
												<?php if($data['enabled'] == '2'):?>
													<a href="<?php echo site_url($this->controller.'/dokumen_lock/'.$kat.'/'.$data['id'])?>" class="uibutton tipsy south" title="Aktivasi dokumen"><span class="fa fa-lock"></span></a>
												<?php elseif($data['enabled'] == '1'): ?>
													<a href="<?php echo site_url($this->controller.'/dokumen_unlock/'.$kat.'/'.$data['id'])?>" class="uibutton tipsy south" title="Non-aktifkan dokumen"><span class="fa fa-unlock"><span></a>
												<?php endif?>
											</div>
									  	</td>
									<?php } ?>
									<!-- id role user is kepala desa dna status belum di approve -->
									<?php if($user_role == 4 && $data['is_approve'] == 0) { ?> 
									<td align="center" width="4"><button type="text" style="background: green;" onclick="approveEkspedisi(<?php echo $data['id'];?>)"><span class="fa fa-check">&nbsp;</span></button>&nbsp;<button type="text" style="background: red; onclick="rejectEkspedisi(<?php echo $data['id'];?>)"><span class="fa fa-remove">&nbsp;</span></button></td>
									<?php } ?>

									<!-- id role user is kepala desa dan status sudah approve -->
									<?php if($user_role == 4 && $data['is_approve'] == 1) { ?> 
									<td align="center" width="4"><button type="text" style="background: green;"><span class="fa fa-check">&nbsp;</span></button>
									</td>
									<?php } ?>

									<!-- id role user is kepala desa dan status reject -->
									<?php if($user_role == 4 && $data['is_approve'] == 2) { ?> 
									<td align="center" width="4"><button type="text" style="background: red;"><span class="fa fa-remove">&nbsp;</span></button>
									</td>
									<?php } ?>

								  <td><?php echo $data['nama']?></td>
								  <?php if ($kat == 2) : ?>
								  	<td><?php echo $data['attr']['no_kep_kades']." / ".$data['attr']['tgl_kep_kades']?></td>
								  	<td><?php echo $data['attr']['uraian']?></td>
								  <?php elseif ($kat == 3) : ?>
								  	<td><?php echo $data['attr']['no_ditetapkan']." / ".$data['attr']['tgl_ditetapkan']?></td>
								  	<td><?php echo $data['attr']['uraian']?></td>
								  <?php endif; ?>
								  <?php if($kat == 6): ?> <!-- kondisi jika kategori nya dokumen ekspedisi !-->
								  	<td align="center"><?php echo $data['no_urut']; ?></td>
								  	<td align="center"><?php echo tgl_indo2($data['tanggal_pengiriman'])?></td>
								  	<td align="center"><?php echo $data['tanggal_no_surat'];?></td>
								  	<td align="center"><?php echo $data['isi_surat']; ?></td>
								  	<td align="center"><?php echo $data['ditujukan_kepada']; ?></td>
								  	<td align="center"><?php echo $data['keterangan']; ?></td>
								  	<td align="center"><?php if($data['is_approve'] == 0) { echo 'Waiting Approval'; }else if($data['is_approve'] == 1) { echo 'approved'; }else{ echo 'Rejected'; } ?></td>
								  <?php endif; ?>
								  <?php if ($kat == 1) : ?>
									<td align="center"><?php echo $data['aktif']?></td>
									<td align="center"><?php echo tgl_indo2($data['tgl_upload'])?></td>
								  <?php else: ?>
								  	<td align="center"><?php echo tgl_indo2($data['created_date'])?></td>
								  <?php endif; ?>
								  
								
				
								</tr>
					    <?php }?>
						</tbody>
			    </table>
		    </div>
			</form>
		  <div class="ui-layout-south panel bottom">
		    <div class="left">
					<div class="table-info">
		        <form id="paging" action="<?php echo site_url($this->controller.'/index/'.$kat)?>" method="post">
						  <label>Tampilkan</label>
		          <select name="per_page" onchange="$('#paging').submit()" >
		            <option value="20" <?php  selected($per_page,20); ?> >20</option>
		            <option value="50" <?php  selected($per_page,50); ?> >50</option>
		            <option value="100" <?php  selected($per_page,100); ?> >100</option>
		          </select>
		          <label>Dari</label>
		          <label><strong><?php echo $paging->num_rows?></strong></label>
		          <label>Total Data</label>
		        </form>
		      </div>
		    </div>
		    <div class="right">
		      <div class="uibutton-group">
		        <?php  if($paging->start_link): ?>
							<a href="<?php echo site_url("{$this->controller}/index/$kat/$paging->start_link/$o")?>" class="uibutton"  ><span class="fa fa-fast-backward"></span> Awal</a>
						<?php  endif; ?>
						<?php  if($paging->prev): ?>
							<a href="<?php echo site_url("{$this->controller}/index/$kat/$paging->prev/$o")?>" class="uibutton"  ><span class="fa fa-step-backward"></span> Prev</a>
						<?php  endif; ?>
		      </div>
		      <div class="uibutton-group">

						<?php  for($i=$paging->start_link;$i<=$paging->end_link;$i++): ?>
							<a href="<?php echo site_url("{$this->controller}/index/$kat/$i/$o")?>" <?php  jecho($p,$i,"class='uibutton special'")?> class="uibutton"><?php echo $i?></a>
						<?php  endfor; ?>
		      </div>
		      <div class="uibutton-group">
					<?php  if($paging->next): ?>
						<a href="<?php echo site_url("{$this->controller}/index/$kat/$paging->next/$o")?>" class="uibutton">Next <span class="fa fa-step-forward"></span></a>
					<?php  endif; ?>
					<?php  if($paging->end_link): ?>
		        <a href="<?php echo site_url("{$this->controller}/index/$kat/$paging->end_link/$o")?>" class="uibutton">Akhir <span class="fa fa-fast-forward"></span></a>
					<?php  endif; ?>
		    </div>
		  </div>
		</div>
	</td>
</tr>
</table>
</div>


<script type="text/javascript">
	function approveEkspedisi(id) // function untuk approve ekspedisi
	{
	    url = "<?php echo site_url('dokumen/approve/')?>";
	    //Ajax Load data from ajax
	    $.ajax({
        url : url,
        type: "POST",
        data: {'id' : id},
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                location.reload();

            }
            else
            {
                alert('failed update');
            }


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
          

        }
    });
	}


	function rejectEkspedisi(id) // function untuk approve ekspedisi
	{
	    url = "<?php echo site_url('dokumen/reject/')?>";
	    //Ajax Load data from ajax
	    $.ajax({
        url : url,
        type: "POST",
        data: {'id' : id},
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                location.reload();

            }
            else
            {
                alert('failed update');
            }


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
          

        }
    });
	}

</script>