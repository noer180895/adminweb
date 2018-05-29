
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Ubah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            <?php
                                foreach ($ambildata as $row) {
                                 
                            ?>
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_E_4_b/Buku_Ekspedisi/c_26_buku_ekspedisi/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Pengiriman</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpengiriman" maxlength="200"  autofocus  value="<?php echo $row->tanggal_pengiriman?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Surat Masuk</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalsurat" maxlength="200"  autofocus  value="<?php echo $row->tanggal_surat?>" class="span8">
                                    </div>
                                </div>
                                
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Surat Masuk</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorsurat" maxlength="200"  autofocus  value="<?php echo $row->nomor_surat?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perihal</label>
                                    <div class="controls">
                                        : <input type="text" name="perihal" maxlength="200"  autofocus  value="<?php echo $row->perihal?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan"><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_E_4_b/Buku_Ekspedisi/c_26_buku_ekspedisi/" class="tombolhapus" style="float: left;">Kembali</a>
                                    <div class="controls">
                                    <input type="submit" value="Ubah Data" name="ubahdata" class="tombolsimpanubah" onclick="return konfirmasiubahdata()"></input>
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
<script type="text/javascript">
    function konfirmasisimpan () {
         return confirm('Apakah Anda Akan Menyimpan Data ?');
    }
    function konfirmasiubahdata () {
         return confirm('Apakah Anda Akan Mengubah Data ?');
    }
</script>