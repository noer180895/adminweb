
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_E_3/Buku_Kegiatan_BPD/c_26_buku_kegiatan_bpd/" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" readonly autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tentang</label>
                                    <div class="controls">
                                        : <input type="text" name="tentang" maxlength="200" readonly autofocus  value="<?php echo $row->tentang?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pelaksana</label>
                                    <div class="controls">
                                        : <input type="text" name="pelaksana" maxlength="200" readonly autofocus  value="<?php echo $row->pelaksana?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pokok-Pokok Kegiatan</label>
                                    <div class="controls">
                                        : <input type="text" name="pokokkegiatan" maxlength="200" readonly autofocus  value="<?php echo $row->pokok_kegiatan?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hasil Kegiatan</label>
                                    <div class="controls">
                                        : <textarea name="hasilkegiatan" class="span8" placeholder="Hasil Kegiatan" readonly=""><?php echo $row->hasil_kegiatan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan" readonly=""><?php echo $row->keterangan?></textarea>
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