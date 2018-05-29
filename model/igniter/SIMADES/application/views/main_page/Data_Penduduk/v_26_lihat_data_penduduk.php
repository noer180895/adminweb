
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Lihat Data Penduduk Desa</h3>
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
                
                                    <form action="<?php echo base_url()?>Data_Penduduk/c_26_data_penduduk/" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor KK</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnomorkk" maxlength="20"  autofocus readonly value="<?php echo $row->no_kk;?>" placeholder="Masukan Nomor KK..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor NIK</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnomornik" maxlength="20"  autofocus readonly value="<?php echo $row->no_NIK;?>" placeholder="Masukan Nomor NIK..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnama" maxlength="255"  autofocus readonly value="<?php echo $row->nama;?>"placeholder="Masukan Nama Penduduk..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tempat Lahir</label>
                                            <div class="controls">
                                                : <input type="text" name="txttempatlahir" maxlength="200"  autofocus readonly value="<?php echo $row->tempat_lahir;?>" placeholder="Masukan tempat lahir..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                            <div class="controls">
                                                : <input type="date" name="txttanggallahir" maxlength="255"  autofocus readonly value="<?php echo $row->tanggal_lahir;?>" placeholder="Masukan tanggal lahir..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                            <div class="controls">
                                                : <input type="text" name="txtjeniskelamin" maxlength="255"  autofocus readonly value="<?php echo $row->jenis_kelamin;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Golongan Darah</label>
                                            <div class="controls">
                                                : <input type="text" name="txtgolongandarah" maxlength="255"  autofocus readonly value="<?php echo $row->golongan_darah;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Alamat</label>
                                            <div class="controls">
                                                : <input type="text" name="txtalamat" maxlength="255"  autofocus readonly value="<?php echo $row->Alamat;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">RT/RW</label>
                                            <div class="controls">
                                                : <input type="number" name="txtrt" maxlength="255"  autofocus readonly placeholder="Masukan RT..." value="<?php echo $row->RT;?>" class="span4">
                                                <input type="number" name="txtrw" maxlength="255"  autofocus readonly placeholder="Masukan RW..." value="<?php echo $row->RW;?>" class="span4">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Agama</label>
                                            <div class="controls">
                                                : <input type="text" name="txtagama" maxlength="255"  autofocus readonly value="<?php echo $row->agama;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Status Perkawinan</label>
                                            <div class="controls">
                                                : <input type="text" name="txtstatusperkawinan" maxlength="255"  autofocus readonly value="<?php echo $row->status_perkawinan;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">pendidikan Terakhir</label>
                                            <div class="controls">
                                                : <input type="text" name="txtjeniskelamin" maxlength="255"  autofocus readonly value="<?php echo $row->pendidikan_terakhir;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Pendidikan Terakhir</label>
                                            <div class="controls">
                                                : <input type="text" name="txtpendidikanterakhir" maxlength="255"  autofocus readonly value="<?php echo $row->pendidikan_terakhir;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Hubungan Keluarga</label>
                                            <div class="controls">
                                                : <input type="text" name="txthubungankeluarga" maxlength="255"  autofocus readonly value="<?php echo $row->hubungan_keluarga;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Kewarganegaraan</label>
                                            <div class="controls">
                                                : <input type="text" name="txtjeniskelamin" maxlength="255"  autofocus readonly value="<?php echo $row->kewarganegaraan;?>" class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama Ayah</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnamaayah" maxlength="255"  autofocus readonly value="<?php echo $row->nama_ayah;?>" placeholder="Masukan Nama Ayah..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama Ibu</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnamaibu" maxlength="255"  autofocus readonly value="<?php echo $row->nama_ibu;?>" placeholder="Masukan Nama Ibu..." class="span8">
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
