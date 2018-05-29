
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Lihat Buku</h3></center>
                            </div>
                            <div class="module-body">
                            <?php
                                foreach ($ambildata as $row) {
                                 
                            ?>
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_4/Buku_Data_Aparat_Pemerintah_Desa/c_26_buku_aparat_pemerintah_desa/" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" readonly autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Lengkap</label>
                                    <div class="controls">
                                        : <input type="text" name="namalengkap" readonly autofocus value="<?php echo $row->nama_lengkap?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">NIAP</label>
                                    <div class="controls">
                                        : <input type="number" name="niap" readonly autofocus class="span8" value="<?php echo $row->niap?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">NIP / NRP</label>
                                    <div class="controls">
                                        : <input type="number" name="nipnrp" readonly autofocus class="span8" value="<?php echo $row->nip_nrp?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                    <div class="controls">
                                        : <input type="text" name="nipnrp" readonly autofocus class="span8" value="<?php echo $row->jenis_kelamin?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tempat Tanggal Lahir</label>
                                    <div class="controls">
                                        : <input type="text" name="tmptlahir" readonly autofocus class="span8" value="<?php echo $row->tempat_tanggal_lahir?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Agama</label>
                                    <div class="controls">
                                        : <input type="text" name="agama" readonly autofocus class="span8" value="<?php echo $row->agama?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pangkat Golongan</label>
                                    <div class="controls">
                                        : <input type="text" name="pangkatgolongan" readonly autofocus class="span8" value="<?php echo $row->pangkat_golongan?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jabatan</label>
                                    <div class="controls">
                                        : <input type="text" name="jabatan" readonly autofocus class="span8" value="<?php echo $row->jabatan?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pendidikan Terkakhir</label>
                                    <div class="controls">
                                        : <input type="text" name="pendidikanterakhir" readonly autofocus class="span8" value="<?php echo $row->pendidikan_terakhir?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No & Tanggal Keputusan Pengangkatan</label>
                                    <div class="controls">
                                        : <input type="text" name="nokeputusanpengangkatan" readonly autofocus class="span4" value="<?php echo $row->nomor_keputusan_pengangkatan?>">
                                        <input type="date" name="tglkeputusanpengangkatan" readonly autofocus class="span4" value="<?php echo $row->tanggal_keputusan_pengangkatan?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No & Tanggal Keputusan Pemberhentian</label>
                                    <div class="controls">
                                        : <input type="text" name="nokeputusanpemberhentian" readonly autofocus class="span4" value="<?php echo $row->nomor_keputusan_pemberhentian?>">
                                        <input type="date" name="tglkeputusanpemberhentian" readonly autofocus class="span4" value="<?php echo $row->tanggal_keputusan_pemberhentian?>">
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" readonly=""><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                    <input type="submit" value="Kembali" name="kembali" class="tombolhapus"></input>\
                                    </div>
                                </div>
                            </form>
                            <?php
                        }
                        ?>
                            </div>
                            </div>
                            
                        </div>
                </div>