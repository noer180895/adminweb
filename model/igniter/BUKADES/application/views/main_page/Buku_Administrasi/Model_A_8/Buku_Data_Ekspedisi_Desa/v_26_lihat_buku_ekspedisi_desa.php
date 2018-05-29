
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_8/Buku_Data_Ekspedisi_Desa/c_26_buku_Ekspedisi_desa/" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" readonly autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Pengiriman</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpengiriman" readonly autofocus value="<?php echo $row->tanggal_pengiriman?>" class="span8">
                                    </div>
                                </div>                                    
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Surat</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorsurat" readonly autofocus class="span8" value="<?php echo $row->nomor_surat?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Surat</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalsurat" readonly autofocus class="span8" value="<?php echo $row->tanggal_surat?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perihal</label>
                                    <div class="controls">
                                        : <textarea name="perihal"  class="span8" readonly=""><?php echo $row->perihal?></textarea>
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