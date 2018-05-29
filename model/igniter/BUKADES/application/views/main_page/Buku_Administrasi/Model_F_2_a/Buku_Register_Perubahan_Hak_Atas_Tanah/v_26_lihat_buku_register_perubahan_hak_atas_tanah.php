
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/c_26_buku_register_perubahan_hak_atas_tanah/" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" readonly autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Perubahan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalperubahan" maxlength="200" readonly autofocus value="<?php echo $row->tanggal_perubahan?>" placeholder="Diisi tanggal perubahan hak atas tanah..." class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Perubahan Hak Atas Tanah</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Yang Melepaskan Hak</label>
                                    <div class="controls">
                                        : <input type="text" name="namayangmelepaskan" maxlength="200" readonly autofocus value="<?php echo $row->melepaskan_perubahan_hak_tanah?>" placeholder="Diisi Nama Lembaga atau Orang yang melepaskan hak ..." class="span8">
                                    </div>
                                </div>
                                
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama yang Menerima</label>
                                    <div class="controls">
                                        : <input type="text" name="namayangmenerima" maxlength="200" readonly autofocus value="<?php echo $row->menerima_perubahan_hak_tanah?>" placeholder="Diisi Nama Lembaga atau Orang yang menerima hak..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis dan Kelas Tanah</label>
                                    <div class="controls">
                                        : <select name="jeniskelas" readonly class="span8">
                                            <option value="<?php echo $row->jenis_kelas_tanah?>" selected><?php echo $row->jenis_kelas_tanah?></option>
                                            <option value="Sawah" >Sawah</option>
                                            <option value="Daratan" >Daratan</option>
                                        </select>
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pengurus</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Persil</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorpersil" maxlength="200" readonly autofocus value="<?php echo $row->nomor_persil?>" placeholder="Diisi nomor persil ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Letak Blok</label>
                                    <div class="controls">
                                        : <input type="text" name="letakblok" maxlength="200" readonly autofocus value="<?php echo $row->letak_blok?>" placeholder="Diisi dengan lokasi tanah (Blok) ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Luas Tanah</label>
                                    <div class="controls">
                                        : <input type="number" name="luastanah" maxlength="200" readonly autofocus value="<?php echo $row->luas_tanah?>" placeholder="Diisi dengan luas tanah ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Batas Keliling</label>
                                    <div class="controls">
                                        : <input type="text" name="bataskeliling" maxlength="200" readonly autofocus value="<?php echo $row->batas_keliling?>" placeholder="Diisi dengan batas batas keliling tanah ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Harga (Rp)</label>
                                    <div class="controls">
                                        : <input type="number" name="harga" maxlength="200" readonly autofocus value="<?php echo $row->harga?>" placeholder="Diisi dengan harga tanah ..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Akte Perubahan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalakteperubahan" maxlength="200" readonly autofocus value="<?php echo $row->tanggal_akte_perubahan?>" placeholder="Diisi tanggal akte perubahan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Akte Perubahan</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorakteperubahan" maxlength="200" readonly autofocus value="<?php echo $row->nomor_akte_perubahan?>" placeholder="Diisi dengan nomor akte perubahan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Proses Perubahan Hak</label>
                                    <div class="controls">
                                        : <select name="prosesperubahan" readonly class="span8">
                                            <option value="<?php echo $row->proses_perubahan_hak?>" selected><?php echo $row->proses_perubahan_hak?></option>
                                            <option value="Jual Beli">Jual Beli</option>
                                            <option value="Hibah">Hibah</option>
                                            <option value="Wakaf">Wakaf</option>
                                            <option value="Tukar Menukar">Tukar Menukar</option>
                                            <option value="Waris">Waris</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan" readonly><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                    <input type="submit" value="Kembali" name="kembali" class="tombolhapus"></input>
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