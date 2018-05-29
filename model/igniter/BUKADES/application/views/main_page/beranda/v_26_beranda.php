                    <div class="span9">
                        <div class="content">
                            <center>
                            <div class="span9">
                                <h1>Selamat Datang</h1>

                                <h1>Sistem Keuangan Desa (SIMKUDES)</h1>
                                <h4>Permendagri No. 113 Tahun 2014 Tentang Pengelolaan Keuangan Desa</h4>
                                <hr style="border-color:black">

                                <div class="content">
                                	<form action="<?php echo base_url()?>beranda/c_26_beranda/masukTahun" method="POST">
	                                		<?php
	                                			foreach ($ambildata as $row) {
	                                			
	                                		?>
	                                	<table border="0" width="100%">
	                                		<tr>
	                                			<td>
		                                			<center>
		                                				<h3 style="text-transform:uppercase;">PEMERINTAH DESA <?php echo "$row->nama_desa";?></h3>
	                                					<h3 style="text-transform:uppercase;">KECAMATAN <?php echo "$row->nama_kecamatan";?></h3>
	                                					<h3 style="text-transform:uppercase;">KABUPATEN <?php echo "$row->nama_kabupaten";?></h3>
	                                				</center>
	                                			</td>
	                                		</tr>
	                                		
	                                	</table>
	                                	<br>
	                                	<br>
	                                	<table width="100%" border="0">
	                                		<tr>
	                                			<td>
	                                				<center>
	                                					<img src="<?php echo base_url().$row->logo_desa?>" width="150px" height="150px">
	                                				</center>
	                                			</td>
	                                		</tr>
	                                	</table>
	                                	<br>
	                                	<table width="100%">
	                                		<tr>
	                                			<td>
	                                				<center>
	                                					<p>TAHUN ANGGARAN</p>
	                                					<select name="tahunanggaran">
	                                						<option value="null" selected="selected">Pilih</option>
                                                       		<?php 
	                                							foreach ($ambiltahun as $rowtahun){
															?>
                                                       		        <option value="<?php echo $rowtahun->tahun ?>"><?php echo $rowtahun->tahun ?></option>
                                                                    <?php
                                                                }
                                                        ?>
	                                					</select>
	                                				</center>
	                                			</td>
	                                		</tr>
	                                	</table>
	                                	<input type="submit" class="btn btn-primary" value="Masuk">
	                                	<?php
	                                		}
	                                	?>
	                                </form>
                                </div>
                            </div>
                            </center>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->