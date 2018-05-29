
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" readonly autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Perorangan</label>
                                    <div class="controls">
                                        : <input type="text" name="namaperorangan" readonly autofocus value="<?php echo $row->nama_perorangan?>"class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah</label>
                                    <div class="controls">
                                        : <input type="number" name="jumlah" readonly autofocus class="span8" value="<?php echo $row->jumlah?>">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                <legend>Sudah Bersertifikat</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Milik</label>
                                    <div class="controls">
                                        : <input type="number" name="hakmilik" readonly autofocus class="span8"value="<?php echo $row->hak_milik?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Guna Bangunan</label>
                                    <div class="controls">
                                        : <input type="number" name="hakgunabangunan" readonly autofocus class="span8" value="<?php echo $row->hak_guna_bangunan?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Pakai</label>
                                    <div class="controls">
                                        : <input type="number" name="hakpakai" readonly autofocus class="span8" value="<?php echo $row->hak_pakai?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Guna Usaha</label>
                                    <div class="controls">
                                        : <input type="number" name="hakgunausaha" readonly autofocus class="span8" value="<?php echo $row->Hak_guna_usaha?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Pengelolaan</label>
                                    <div class="controls">
                                        : <input type="number" name="hakpengelolaan" readonly autofocus class="span8" value="<?php echo $row->hak_pengelolaan?>">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Belum Bersertifikat</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Milik Adat</label>
                                    <div class="controls">
                                        : <input type="number" name="hakmilikadat" readonly autofocus class="span8" value="<?php echo $row->hak_milik_adat?>">
                                    </div>
                                    </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Verponding Indonesie</label>
                                    <div class="controls">
                                        : <input type="number" name="verpondingindonesie" readonly autofocus class="span8" value="<?php echo $row->verponding_indonesie?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanah Nagara</label>
                                    <div class="controls">
                                        : <input type="number" name="tanahnegara" readonly autofocus class="span8" value="<?php echo $row->tanah_negara?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Non Pertanian</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perumahan</label>
                                        <div class="controls">
                                            : <input type="number" name="perumahan" readonly autofocus class="span8" value="<?php echo $row->perumahan?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perdagangan & Jasa</label>
                                        <div class="controls">
                                            : <input type="number" name="perdaganganjasa" readonly autofocus class="span8" value="<?php echo $row->perdagangan_jasa?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perkantoran</label>
                                        <div class="controls">
                                            : <input type="number" name="perkantoran" readonly autofocus class="span8" value="<?php echo $row->perkantoran?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Industri</label>
                                        <div class="controls">
                                            : <input type="number" name="industri" readonly autofocus class="span8" value="<?php echo $row->industri?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Fasilitas Umum</label>
                                        <div class="controls">
                                            : <input type="number" name="fasilitasumum" readonly autofocus class="span8" value="<?php echo $row->fasilitas_umum?>">
                                        </div>
                                    </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pertanian</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Sawah</label>
                                        <div class="controls">
                                            : <input type="number" name="sawah" readonly autofocus class="span8" value="<?php echo $row->sawah?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Tegalan</label>
                                        <div class="controls">
                                            : <input type="number" name="tegalan" readonly autofocus class="span8" value="<?php echo $row->tegalan?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perkebunan</label>
                                        <div class="controls">
                                            : <input type="number" name="perkebunan" readonly autofocus class="span8" value="<?php echo $row->perkebunan?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Peternakan / Perikanan</label>
                                        <div class="controls">
                                            : <input type="number" name="peternakanperikanan" readonly autofocus class="span8" value="<?php echo $row->peternakan_perikanan?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hutan Belukar</label>
                                        <div class="controls">
                                            : <input type="number" name="hutanbelukar" readonly autofocus class="span8" value="<?php echo $row->hutan_belukar?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hutan Lebat / Lindung</label>
                                        <div class="controls">
                                            : <input type="number" name="hutanlebatlindung" readonly autofocus class="span8" value="<?php echo $row->hutan_lebat_lindung?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Tanah Kosong</label>
                                        <div class="controls">
                                            : <input type="number" name="tanahkosong" readonly autofocus class="span8" value="<?php echo $row->tanah_kosong?>">
                                        </div>
                                    </div>
                                </fieldset>
                                <br><br>
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