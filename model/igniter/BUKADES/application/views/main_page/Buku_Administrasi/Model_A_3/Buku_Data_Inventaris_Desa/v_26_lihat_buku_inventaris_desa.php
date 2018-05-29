
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" readonly autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis Barang Bangunan</label>
                                    <div class="controls">
                                        : <input type="text" name="jenisbarangbangunan" readonly autofocus placeholder="Masukan Nama Barang..." class="span8" value="<?php echo $row->jenis_barang_bangunan?>">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                <legend>Asal Barang</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Dibeli Sendiri</label>
                                    <div class="controls">
                                        : <input type="number" name="dibelisendiri" readonly autofocus class="span8" value="<?php echo $row->asal_dibeli_sendiri?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Bantuan Pemerintah</label>
                                    <div class="controls">
                                        : <input type="number" name="bantuanpemerintah" readonly autofocus class="span8" value="<?php echo $row->asal_bantuan_pemerintah?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Sumbangan</label>
                                    <div class="controls">
                                        : <input type="number" name="sumbangan" readonly autofocus class="span8" value="<?php echo $row->asal_sumbangan?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>

                                <fieldset>
                                <legend>Keadaan Barang Awal Tahun</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Baik</label>
                                    <div class="controls">
                                        : <input type="number" name="keadaanawalbaik" readonly autofocus class="span8" value="<?php echo $row->keadaan_baik?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Rusak</label>
                                    <div class="controls">
                                        : <input type="number" name="keadaanawalrusak" readonly autofocus class="span8" value="<?php echo $row->keadaan_rusak?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>

                                <fieldset>
                                <legend>Penghapusan</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Rusak</label>
                                    <div class="controls">
                                        : <input type="number" name="penghapusanrusak" readonly autofocus class="span8" value="<?php echo $row->penghapusan_rusak?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Dijual</label>
                                    <div class="controls">
                                        : <input type="number" name="penghapusandijual" readonly autofocus class="span8" value="<?php echo $row->penghapusan_dijual?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Disumbangkan</label>
                                    <div class="controls">
                                        : <input type="number" name="penghapusandisumbangkan" readonly autofocus class="span8" value="<?php echo $row->penghapusan_disumbangkan?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Penghapusan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpenghapusan" readonly autofocus class="span8" value="<?php echo $row->tanggal_penghapusan?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                <legend>Keadaan Barang Akhir Tahun</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Baik</label>
                                    <div class="controls">
                                        : <input type="number" name="keadaanakhirbaik" readonly autofocus class="span8" value="<?php echo $row->keadaan_akhir_tahun_baik?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Rusak</label>
                                    <div class="controls">
                                        : <input type="number" name="keadaanakhirrusak" readonly autofocus class="span8" value="<?php echo $row->keadaan_akhir_tahun_rusak?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" readonly><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                    <input type="submit" value="Kembali" name="Kembali" class="tombolhapus"></input>
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