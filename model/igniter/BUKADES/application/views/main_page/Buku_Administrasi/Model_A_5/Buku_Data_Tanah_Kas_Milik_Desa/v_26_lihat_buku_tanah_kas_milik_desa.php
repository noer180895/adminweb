
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" readonly autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Asal Tanah Kas Milik Desa / Tanah Kas Desa</label>
                                    <div class="controls">
                                        : <input type="text" name="namaasal" readonly autofocus value="<?php echo $row->asal_tanah?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Sertifikat Buku Letter C / Persil</label>
                                    <div class="controls">
                                        : <input type="number" name="nomorsertifikat" readonly autofocus class="span8" value="<?php echo $row->nomor_sertifikat?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Luas (Ha)</label>
                                    <div class="controls">
                                        : <input type="number" name="luas" readonly autofocus class="span8"  value="<?php echo $row->luas?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">klas</label>
                                    <div class="controls">
                                        : <input type="text" name="klas" readonly autofocus class="span8"  value="<?php echo $row->klas?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Asli Milik Desa</label>
                                    <div class="controls">
                                        : <input type="number" name="aslimilikdesa" readonly autofocus class="span8"  value="<?php echo $row->asli_milik_desa?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pusat</label>
                                    <div class="controls">
                                        : <input type="number" name="pusat" readonly autofocus class="span8"  value="<?php echo $row->pusat?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Provinsi</label>
                                    <div class="controls">
                                        : <input type="number" name="provinsi" readonly autofocus class="span8"  value="<?php echo $row->provinsi?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Kabupaten / Kota</label>
                                    <div class="controls">
                                        : <input type="number" name="kabupatenkota" readonly autofocus class="span8"  value="<?php echo $row->kabupaten?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Lain - Lain</label>
                                    <div class="controls">
                                        : <input type="number" name="lainlain" readonly autofocus class="span8"  value="<?php echo $row->lain_lain?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Perolehan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalperolehan" readonly autofocus class="span8"  value="<?php echo $row->tanggal_perolehan?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Sawah</label>
                                    <div class="controls">
                                        : <input type="number" name="sawah" readonly autofocus class="span8"  value="<?php echo $row->sawah?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tegal</label>
                                    <div class="controls">
                                        : <input type="number" name="tegal" readonly autofocus class="span8"  value="<?php echo $row->tegal?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Kebun</label>
                                    <div class="controls">
                                        : <input type="number" name="kebun" readonly autofocus class="span8"  value="<?php echo $row->kebun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tambak / Kolam</label>
                                    <div class="controls">
                                        : <input type="number" name="tambakkolam" readonly autofocus class="span8"  value="<?php echo $row->tambak_kolam?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanah Kering / Daratan</label>
                                    <div class="controls">
                                        : <input type="number" name="tanahdaratan" readonly autofocus class="span8"  value="<?php echo $row->tanah_kering_daratan?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="patokada" readonly autofocus class="span8"  value="<?php echo $row->patok_ada?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tidak Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="patoktidak" readonly autofocus class="span8"  value="<?php echo $row->patok_tidak_ada?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="papanada" readonly autofocus class="span8"  value="<?php echo $row->papan_ada?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tidak Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="papantidakada" readonly autofocus class="span8"  value="<?php echo $row->papan_tidak_ada?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Lokasi</label>
                                    <div class="controls">
                                        : <input type="text" name="lokasi" readonly autofocus class="span8"  value="<?php echo $row->lokasi?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Peruntukan</label>
                                    <div class="controls">
                                        : <input type="text" name="peruntukan" readonly autofocus class="span8"  value="<?php echo $row->peruntukan?>">
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" readonly=""><?php echo $row->ket?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                    <input type="submit" value="kembali" name="kembali" class="tombolhapus"></input>
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