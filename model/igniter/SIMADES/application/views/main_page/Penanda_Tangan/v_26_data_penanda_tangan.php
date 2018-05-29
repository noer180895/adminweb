                    <div class="span9">
                        <div class="content">
                            <div class="span10">
                                <div class="content">
	                                <div class="module">
		                                <div class="module-head">
		                                	<h2>Referensi Penanda Tangan </h2>
		                                </div>
		                                <?php
		                                	foreach ($ambil as $row) {
		                                	
		                                ?>
		                                <div class="module-body">
		                                	<form action="<?php echo base_url() ?>Penanda_Tangan/c_26_penanda_tangan/simpanpenandatangan" class="form-horizontal row-fluid" method="POST" enctype="multipart/form-data">
	                                			<div class="control-group">
		                                            <label class="control-label" for="basicinput">Camat</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_camat;?>" name="camat" maxlength="255" required autofocus placeholder="Masukan nama camat..." class="span4">
		                                                 Pangkat <select class="span3" name="pangkatcamat">
		                                                 	<option value="<?php echo $row->pangkat_camat?>" selected><?php echo $row->pangkat_camat?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select> NIP <input type="number" value="<?php echo $row->nip_camat;?>" name="nipcamat" maxlength="21" required autofocus placeholder="Masukan nip camat..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Kepala Desa</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_kades;?>" name="kades" maxlength="255" required autofocus placeholder="Masukan nama kepala desa..." class="span4">
		                                                 Pangkat <select class="span3" name="pangkatkades">
		                                                 	<option value="<?php echo $row->pangkat_kades?>" selected><?php echo $row->pangkat_kades?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select> NIP <input type="number" value="<?php echo $row->nip_kades;?>" name="nipkades" maxlength="21" required autofocus placeholder="Masukan nip kepala desa..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Sekretaris Desa</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_sekdes;?>" name="sekdes" maxlength="255" required autofocus placeholder="Masukan nama sekretaris desa..." class="span4">
		                                                 Pangkat <select class="span3" name="pangkatsekdes">
		                                                 	<option value="<?php echo $row->pangkat_sekdes?>" selected><?php echo $row->pangkat_sekdes?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select> NIP <input type="number" value="<?php echo $row->nip_sekdes;?>" name="nipsekdes" maxlength="21" required autofocus placeholder="Masukan nip sekretaris desa..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Bendahara Desa</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_bendes;?>" name="bendes" maxlength="255" required autofocus placeholder="Masukan nama bendahara desa..." class="span4">
		                                                 Pangkat <select class="span3" name="pangkatbendes">
		                                                 	<option value="<?php echo $row->pangkat_bendes?>" selected><?php echo $row->pangkat_bendes?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select> NIP <input type="number" value="<?php echo $row->nip_bendes;?>" name="nipbendes" maxlength="21" required autofocus placeholder="Masukan nip bendahara desa..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Pelaksana Tugas (Plt)</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_plt;?>" name="plt" maxlength="255" required autofocus placeholder="Masukan nama pelaksana tugas..." class="span4">
		                                                 Pangkat <select class="span3" name="pangkatplt">
		                                                 	<option value="<?php echo $row->pangkat_plt?>" selected><?php echo $row->pangkat_plt?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select> NIP <input type="number" value="<?php echo $row->nip_plt;?>" name="nipplt" maxlength="21" required autofocus placeholder="Masukan nip pelaksana tugas..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Pejabat (Pj)</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_pj;?>" name="pj" maxlength="255" required autofocus placeholder="Masukan nama pejabat..." class="span4">
		                                                 Pangkat <select class="span3" name="pangkatpj">
		                                                 	<option value="<?php echo $row->pangkat_pj?>" selected><?php echo $row->pangkat_pj?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select> NIP <input type="number" value="<?php echo $row->nip_pj;?>" name="nippj" maxlength="21" required autofocus placeholder="Masukan nip pejabat..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Kepala Urusan (Kaur)</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_kaur;?>" name="kaur" maxlength="255" required autofocus placeholder="Masukan nama kepala urusan..." class="span4">
		                                                 Pangkat <select class="span3" name="pangkatkaur">
		                                                 	<option value="<?php echo $row->pangkat_kaur?>" selected><?php echo $row->pangkat_kaur?></option>
		                                                 	<option value="I/a Juru Muda">I/a Juru Muda</option>
		                                                 	<option value="I/b Juru Muda Tingkat I">I/b Juru Muda Tingkat I</option>
		                                                 	<option value="I/d Juru Tingkat I">I/d Juru Tingkat I/option>
		                                                 	<option value="II/a Pengatur Muda">II/a Pengatur Muda</option>
		                                                 	<option value="II/b Pengatur Muda Tingkat I">II/b Pengatur Muda Tingkat I</option>
		                                                 	<option value="II/c Pengatur">II/c Pengatur</option>
		                                                 	<option value="II/d Pengatur Tingkat I">II/d Pengatur Tingkat I</option>
		                                                 	<option value="III/a Penata Muda">III/a Penata Muda</option>
		                                                 	<option value="III/b Penata Muda Tingkat I">III/b Penata Muda Tingkat I</option>
		                                                 	<option value="III/c Penata">III/c Penata</option>
		                                                 	<option value="III/d Penata Tingkat I">III/d Penata Tingkat I</option>
		                                                 	<option value="IV/a Pembina">IV/a Pembina</option>
		                                                 	<option value="IV/b Pembina Tingkat I">IV/b Pembina Tingkat I</option>
		                                                 	<option value="IV/c Pembina Utama Muda">IV/c Pembina Utama Muda</option>
		                                                 	<option value="IV/d Pembina Utama Madya">IV/d Pembina Utama Madya</option>
		                                                 	<option value="IV/e Pembina Utama">IV/e Pembina Utama</option>
		                                                 </select> NIP <input type="number" value="<?php echo $row->nip_kaur;?>" name="nipkaur" maxlength="21" required autofocus placeholder="Masukan nip kepala urusan..." class="span4">
		                                            </div>
		                                        </div>
		                                        <?php
													if($_SESSION['level'] == 1){

												?>
		                                        <div class="control-group">
		                                        	<div class="controls">
		                                        		<input type="submit" name="submit" class="tombolsimpanubah"  value="Simpan Data"></input>
		                                        	</div>
		                                        </div>
		                                        <?php
		                                    }else{

		                                    }
		                                    ?>
			                                </form>
			                            </div>
			                            <?php
			                        		}
			                            ?>
			                            </div>
		                             </div>
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