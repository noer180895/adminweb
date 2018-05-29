
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_F_2_e/Buku_Register_Ketentraman_Ketertiban/c_26_buku_register_ketentraman_ketertiban/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun"  autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Kejadian</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalkejadian" maxlength="200"  autofocus value="<?php echo $row->tanggal_kejadian?>" placeholder="Diisi tanggal kejadian/peristiwa kejahatan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Uraian Singkat</label>
                                    <div class="controls">
                                        : <textarea name="uraiansingkat"  class="span8" placeholder="Diisi Kronologis kejadian / Peristiwa"><?php echo $row->uraian_singkat?></textarea>
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Kerugian</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Barang / Benda</label>
                                    <div class="controls">
                                        : <input type="text" name="namabenda" maxlength="200"  autofocus value="<?php echo $row->nama_barang?>" placeholder="Diisi Nama Barang ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Taksiran Harga Benda</label>
                                    <div class="controls">
                                        : <input type="number" name="hargabenda" maxlength="200"  autofocus value="<?php echo $row->taksiran_harga?>" placeholder="Diisi Taksiran Harga Barang ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Banyaknya Korban Luka</label>
                                    <div class="controls">
                                        : <input type="number" name="korbanluka" maxlength="200"  autofocus value="<?php echo $row->korban_luka?>" placeholder="Diisi Banyaknya Korban Luka ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Banyaknya Korban Jiwa</label>
                                    <div class="controls">
                                        : <input type="number" name="korbanjiwa" maxlength="200"  autofocus value="<?php echo $row->korban_jiwa?>" placeholder="Diisi Barang Korban Jiwa ..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan" ><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_e/Buku_Register_Ketentraman_Ketertiban/c_26_buku_register_ketentraman_ketertiban/" class="tombolhapus" style="float: left;">Kembali</a>
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