                    <div class="span9">
                        <div class="content">
                            <div class="span9">
                                <div class="content">
                                	<form action="<?php echo base_url() ?>PerangkatDesa/c_26_Perangkat_Desa/ubahProfilDesa" class="form-horizontal row-fluid" method="POST" enctype="multipart/form-data">
                                		<?php
                                			foreach ($ambildata as $row) {
                                		?>
                                        <table width="100%" border="0">
	                                		<tr>
	                                			<td>
	                                				<center>
	                                					<img src="<?php echo base_url().$row->logo_desa?>" width="150px" height="150px">
	                                					<input type="hidden" name="hidden_foto" value="<?php echo $row->logo_desa ?>">
	                                					<input type="hidden" name="kodeDesa" value="<?php echo $row->id ?>">
	                                				</center>
	                                			</td>
	                                		</tr>
	                                	</table>
	                                	<br>
	                                		<div class="control-group">
	                                            <label class="control-label" for="basicinput">Ganti Logo Desa</label>

	                                            <div class="controls">
	                                                <input type="file" name="file_foto" class="span8">
	                                            </div>
	                                        </div>  
	                                	<br>
	                                	<table width="100%" border="0">
	                                		<tr>
	                                			<td style="padding:5px">
	                                				<p><b>INFORMASI UMUM</b></p>
	                                			</td>
	                                		<tr>
	                                			<td>

			                                        <div class="control-group">
			                                            <label class="control-label" for="basicinput">Kabupaten</label>

			                                            <div class="controls">
			                                                <input  type="text" name="kabupaten" required maxlength="150" placeholder="Nama Kabupaten …" class="span8 tip"value="<?php echo "$row->nama_kabupaten"; ?>">
			                                            </div>
			                                        </div>
			                                    </td>
			                                </tr>
			                                <tr>
	                                			<td>
			                                        <div class="control-group">
			                                            <label class="control-label" for="basicinput">Kecamatan</label>
			                                            <div class="controls">
			                                                <input  type="text" name="kecamatan" required maxlength="150" placeholder="Nama Kecamatan …" class="span8 tip"value="<?php echo "$row->nama_kecamatan"; ?>">
			                                            </div>
			                                        </div>
			                                    </td>
			                                </tr>
			                                <tr>
	                                			<td>
			                                        <div class="control-group">
			                                            <label class="control-label" for="basicinput">Nama Desa</label>
			                                            <div class="controls">
			                                                <input  type="text" name="namadesa" required maxlength="150" placeholder="Nama Desa …" class="span8 tip" value="<?php echo "$row->nama_desa"; ?>">
			                                            </div>
			                                        </div>
			                                    </td>
			                                </tr>
			                                <tr>
	                                			<td>
			                                        <div class="control-group">
			                                            <label class="control-label" for="basicinput">Alamat Desa</label>
			                                            <div class="controls">
			                                                <input  type="text" name="alamatdesa" required maxlength="150" placeholder="Alamat Desa …" class="span8 tip" value="<?php echo "$row->alamat_desa"; ?>">
			                                            </div>
			                                        </div>
			                                    </td>
			                                </tr>
			                                <tr>
			                                	<td style="padding:5px">
			                                		<p><b>PERANGKAT DESA</b></p>
			                                	</td>
			                                </tr>
			                                <tr>
	                                			<td>

			                                        <div class="control-group">
			                                            <label class="control-label" for="basicinput">Kepala Desa</label>

			                                            <div class="controls">
			                                                <input  type="text" name="kepaladesa" required maxlength="150" placeholder="Nama Kepala desa …" class="span8 tip"value="<?php echo "$row->nama_kepala_desa"; ?>">
			                                            </div>
			                                        </div>
			                                    </td>
			                                </tr>
			                                <tr>
	                                			<td>
			                                        <div class="control-group">
			                                            <label class="control-label" for="basicinput">Sekretaris Desa</label>
			                                            <div class="controls">
			                                                <input  type="text" name="sekretaris" required maxlength="150" placeholder="Nama Sekretarsi desa …" class="span8 tip"value="<?php echo "$row->nama_sekretaris_desa"; ?>">
			                                            </div>
			                                        </div>
			                                    </td>
			                                </tr>
			                                <tr>
	                                			<td style="align:left">
			                                        <div class="control-group">
			                                            <label class="control-label" for="basicinput">Bendahara Desa</label>
			                                            <div class="controls">
			                                                <input  type="text" name="bendaharadesa" required maxlength="150" placeholder="Nama Bendahara desa …" class="span8 tip" value="<?php echo "$row->nama_bendahara_desa"; ?>">
			                                            </div>
			                                        </div>
			                                    </td>
			                                </tr>
			                                <tr>
			                                	<td style="padding:5px">
			                                		<p><b>REKENING BANK DESA</b></p>
			                                	</td>
			                                </tr>
			                                <tr>
	                                			<td>

			                                        <div class="control-group">
			                                            <label class="control-label" for="basicinput">Nama Bank</label>

			                                            <div class="controls">
			                                                <input  type="text" name="namabank" required maxlength="150" placeholder="Nama Bank …" class="span8 tip"value="<?php echo "$row->nama_bank_desa"; ?>">
			                                            </div>
			                                        </div>
			                                    </td>
			                                </tr>
			                                <tr>
	                                			<td>
			                                        <div class="control-group">
			                                            <label class="control-label" for="basicinput">Cabang</label>
			                                            <div class="controls">
			                                                <input  type="text" name="cabang" required maxlength="150" placeholder="Nama Cabang …" class="span8 tip"value="<?php echo "$row->cabang"; ?>">
			                                            </div>
			                                        </div>
			                                    </td>
			                                </tr>
			                                <tr>
	                                			<td style="align:left">
			                                        <div class="control-group">
			                                            <label class="control-label" for="basicinput">Nomor Rekening</label>
			                                            <div class="controls">
			                                                <input  type="number" name="nomorrekening" required maxlength="150" placeholder="Nomor Rekening …" class="span8 tip" value="<?php echo "$row->nomor_rekening_desa"; ?>">
			                                            </div>
			                                        </div>
			                                    </td>
			                                </tr>
                                        </table>
	                                	<br>
	                                	<br>
	                                	<center>
		                                	<input type="submit" class="btn btn-primary" value="Ubah Data">
		                                </center>
		                                <?php
		                                	}

		                                ?>
	                                </form>
                                </div>
                            </div>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->