
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Lihat Data Perusahaan yang sudah berdomisili</h3>
                            </div>
                            <div class="module-body">
                                    <?php
                                        foreach ($ambil as $row) {
                                         
                                    ?>
                                    <style type="text/css">
                                    input{
                                        text-transform: uppercase;
                                    }
                                    </style>
                
                                    <form action="<?php echo base_url()?>Data_Perusahaan/c_26_data_perusahaan/" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama Perusahaan</label>
                                            <div class="controls">
                                                : <input type="text" name="namaperusahaan" maxlength="20"  autofocus readonly value="<?php echo $row->nama_perusahaan;?>" placeholder="Nama Perusahaan..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Alamat Perusahaan</label>
                                            <div class="controls">
                                                : <textarea name="alamatperusahaan" class="span8" placeholder="alamat perusahaan" readonly><?php echo $row->alamat_perusahaan?></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor Telepon</label>
                                            <div class="controls">
                                                : <input type="text" name="nomortelepon" maxlength="255"  autofocus readonly value="<?php echo $row->nomor_telepon;?>"placeholder="Nomor telepon perusahaan ..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Bergerak Di Bidang</label>
                                            <div class="controls">
                                                : <input type="text" name="bidang" maxlength="200"  autofocus readonly value="<?php echo $row->bidang;?>" placeholder="Bidang perusahaan ..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Notaris Pendirian</label>
                                            <div class="controls">
                                                : <input type="text" name="notarispendirian" maxlength="255"  autofocus readonly value="<?php echo $row->notaris_pendirian;?>" placeholder="Notaris Pendirian ..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor Pendirian</label>
                                            <div class="controls">
                                                : <input type="text" name="nomorpendirian" maxlength="255"  autofocus readonly value="<?php echo $row->nomor_pendirian;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal Pendirian</label>
                                            <div class="controls">
                                                : <input type="text" name="tanggalpendirian" maxlength="255"  autofocus readonly value="<?php echo $row->tanggal_pendirian;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Jam Kerja</label>
                                            <div class="controls">
                                                : <input type="text" name="jamkerjasampai" maxlength="255"  autofocus readonly value="<?php echo $row->jam_kerja;?>" class="span4"> s/d <input type="text" name="jamkerjasampai" maxlength="255"  autofocus readonly value="<?php echo $row->jam_kerja_sampai;?>" class="span4">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Jumlah Karyawan</label>
                                            <div class="controls">
                                                : <input type="text" name="jumlahkaryawan" maxlength="255"  autofocus readonly value="<?php echo $row->jumlah_karyawan;?> Orang" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Luas Tanah</label>
                                            <div class="controls">
                                                : <input type="text" name="luastanah" maxlength="255"  autofocus readonly value="<?php echo $row->luas_tanah;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Luas Bangunan</label>
                                            <div class="controls">
                                                : <input type="text" name="txtjeniskelamin" maxlength="255"  autofocus readonly value="<?php echo $row->luas_bangunan;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <input type="submit" name="kembali" value="Kembali" class="tombolhapus"></input>
                                            </div>
                                        </div>
                                        
                                    </form>
                                    <br>
                                    <?php
                                }
                                ?>
                            </div>
                            </div>
                        </div>
