
                           
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
                            <form action="" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No Tanggal Peraturan Desa</label>
                                    <div class="controls">
                                        : <input type="text" name="noperaturandesa" readonly autofocus value="<?php echo $row->nomor_peraturan_desa; echo "  $row->tanggal_peraturan_desa";?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tentang</label>
                                    <div class="controls">
                                        : <textarea name="tentang" class="span8" readonly><?php echo $row->tentang;?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Uraian Singkat</label>
                                    <div class="controls">
                                        : <textarea name="uraiansingkat" class="span8" readonly><?php echo $row->uraian_singkat;?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No dan Tanggal Persetujuan BPD</label>
                                    <div class="controls">
                                        : <input type="text" name="notglpersetujuanbpd" maxlength="50" readonly autofocus  value="<?php echo $row->nomor_persetujuan_BPD; echo " / $row->tanggal_persetujuan_BPD";?>"  class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No dan tanggal Dilaporkan</label>
                                    <div class="controls">
                                        : <input type="text" name="notgldilaporkan" maxlength="50" readonly autofocus  value="<?php echo $row->nomor_dilaporkan; echo " / $row->tanggal_dilaporkan";?>"  class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" readonly><?php echo $row->keterangan;?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_1/Buku_Data_Peraturan_Desa/c_26_buku_peraturan_desa/" class="tombolhapus">Kembali</a>
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