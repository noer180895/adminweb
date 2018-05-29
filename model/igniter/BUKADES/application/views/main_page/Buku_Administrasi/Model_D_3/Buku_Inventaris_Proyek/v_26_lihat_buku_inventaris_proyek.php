
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_D_3/Buku_Inventaris_Proyek/c_26_buku_inventaris_proyek/" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" readonly autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Proyek Kegiatan</label>
                                    <div class="controls">
                                        : <input type="text" name="namaproyekkegiatan" maxlength="255" readonly autofocus value="<?php echo $row->nama_proyek?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Volume</label>
                                    <div class="controls">
                                        : <input type="text" name="volume" maxlength="200" readonly autofocus  value="<?php echo $row->volume?>" class="span8">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah Biaya</label>
                                    <div class="controls">
                                        : <div class="input-append" style="width: 615px">
                                        <span class="add-on">Rp</span><input type="number" name="jumlah" maxlength="200" id="jumlah" autofocus readonly value="<?php echo $row->jumlah_biaya?>" class="span8">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Lokasi Proyek</label>
                                    <div class="controls">
                                        : <input type="text" name="lokasi" maxlength="200" readonly autofocus  value="<?php echo $row->lokasi_proyek?>" class="span8">
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
                            </form>
                            <?php
                        }
                            ?>
                            </div>
                            </div>
                            
                        </div>
                </div>