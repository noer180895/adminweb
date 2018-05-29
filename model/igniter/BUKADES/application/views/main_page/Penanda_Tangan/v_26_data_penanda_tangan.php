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
		                                                 Pangkat <input type="text" value="<?php echo $row->pangkat_camat;?>" name="pangkatcamat" maxlength="255" required autofocus placeholder="Masukan pangkat camat..." class="span3">
		                                                 NIP <input type="number" value="<?php echo $row->nip_camat;?>" name="nipcamat" maxlength="21" required autofocus placeholder="Masukan nip camat..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Kepala Desa</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_kades;?>" name="kades" maxlength="255" required autofocus placeholder="Masukan nama kepala desa..." class="span4">
		                                                 Pangkat <input type="text" value="<?php echo $row->pangkat_kades;?>" name="pangkatkades" maxlength="255" required autofocus placeholder="Masukan pangkat kepala desa..." class="span3">
		                                                  NIP <input type="number" value="<?php echo $row->nip_kades;?>" name="nipkades" maxlength="21" required autofocus placeholder="Masukan nip kepala desa..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Sekretaris Desa</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_sekdes;?>" name="sekdes" maxlength="255" required autofocus placeholder="Masukan nama sekretaris desa..." class="span4">
		                                                 Pangkat <input type="text" value="<?php echo $row->pangkat_sekdes;?>" name="pangkatsekdes" maxlength="255" required autofocus placeholder="Masukan pangkat sekretaris desa..." class="span3">
		                                                  NIP <input type="number" value="<?php echo $row->nip_sekdes;?>" name="nipsekdes" maxlength="21" required autofocus placeholder="Masukan nip sekretaris desa..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Bendahara Desa</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_bendes;?>" name="bendes" maxlength="255" required autofocus placeholder="Masukan nama bendahara desa..." class="span4">
		                                                 Pangkat <input type="text" value="<?php echo $row->pangkat_bendes;?>" name="pangkatbendes" maxlength="255" required autofocus placeholder="Masukan pangkat bendahara desa..." class="span3">
		                                                  NIP <input type="number" value="<?php echo $row->nip_bendes;?>" name="nipbendes" maxlength="21" required autofocus placeholder="Masukan nip bendahara desa..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Pelaksana Tugas (Plt)</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_plt;?>" name="plt" maxlength="255" required autofocus placeholder="Masukan nama pelaksana tugas..." class="span4">
		                                                 Pangkat <input type="text" value="<?php echo $row->pangkat_plt;?>" name="pangkatplt" maxlength="255" required autofocus placeholder="Masukan pangkat pelaksana tugas..." class="span3">
		                                                  NIP <input type="number" value="<?php echo $row->nip_plt;?>" name="nipplt" maxlength="21" required autofocus placeholder="Masukan nip pelaksana tugas..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Pejabat (Pj)</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_pj;?>" name="pj" maxlength="255" required autofocus placeholder="Masukan nama pejabat..." class="span4">
		                                                 Pangkat <input type="text" value="<?php echo $row->pangkat_pj;?>" name="pangkatpj" maxlength="255" required autofocus placeholder="Masukan pangkat pejabat..." class="span3">
		                                                  NIP <input type="number" value="<?php echo $row->nip_pj;?>" name="nippj" maxlength="21" required autofocus placeholder="Masukan nip pejabat..." class="span4">
		                                            </div>
		                                        </div>
		                                        <div class="control-group">
		                                            <label class="control-label" for="basicinput">Kepala Urusan (Kaur)</label>
		                                            <div class="controls">
		                                                <input type="text" value="<?php echo $row->nama_kaur;?>" name="kaur" maxlength="255" required autofocus placeholder="Masukan nama kepala urusan..." class="span4">
		                                                 Pangkat <input type="text" value="<?php echo $row->pangkat_kaur;?>" name="pangkatkaur" maxlength="255" required autofocus placeholder="Masukan pangkat kepala urusan..." class="span3">
		                                                  NIP <input type="number" value="<?php echo $row->nip_kaur;?>" name="nipkaur" maxlength="21" required autofocus placeholder="Masukan nip kepala urusan..." class="span4">
		                                            </div>
		                                        </div>
		                                        <?php
													if($_SESSION['level'] == 1){

												?>
		                                        <div class="control-group">
		                                        	<div class="controls">
		                                        		<input type="submit" name="submit" class="btn btn-primary"  value="Simpan Data"></input>
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