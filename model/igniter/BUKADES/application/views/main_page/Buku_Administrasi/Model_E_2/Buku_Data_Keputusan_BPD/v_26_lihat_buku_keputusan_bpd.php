
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_E_2/Buku_Data_Keputusan_BPD/c_26_buku_keputusan_bpd/" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" readonly autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                
                                <br><br>
                                <fieldset>
                                    <legend>Tanggal dan Nomor Keputusan</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Keputusan</label>
                                    <div class="controls">
                                        : <input type="date" name="keputusantanggal" maxlength="200" readonly autofocus value="<?php echo $row->keputusan_tanggal?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Keputusan</label>
                                    <div class="controls">
                                        : <input type="text" name="keputusannomor" maxlength="255" readonly autofocus value="<?php echo $row->keputusan_nomor?>" class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <hr>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tentang</label>
                                    <div class="controls">
                                        : <input type="text" name="tentang" maxlength="200" readonly autofocus value="<?php echo $row->tentang?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Uraian Singkat</label>
                                    <div class="controls">
                                        : <textarea name="uraiansingkat" class="span8" placeholder="Uraian singakt dari keputusan BPD" readonly><?php echo $row->uraian_singkat?></textarea>
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