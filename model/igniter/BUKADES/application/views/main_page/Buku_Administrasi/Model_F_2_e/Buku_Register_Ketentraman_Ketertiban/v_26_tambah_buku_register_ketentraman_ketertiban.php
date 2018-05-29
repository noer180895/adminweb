
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_F_2_e/Buku_Register_Ketentraman_Ketertiban/c_26_buku_register_ketentraman_ketertiban/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Kejadian</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalkejadian" maxlength="200" required autofocus placeholder="Diisi tanggal kejadian/peristiwa kejahatan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Uraian Singkat</label>
                                    <div class="controls">
                                        : <textarea name="uraiansingkat" required class="span8" placeholder="Diisi Kronologis kejadian / Peristiwa"></textarea>
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Kerugian</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Barang / Benda</label>
                                    <div class="controls">
                                        : <input type="text" name="namabenda" maxlength="200" required autofocus placeholder="Diisi Nama Barang ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Taksiran Harga Benda</label>
                                    <div class="controls">
                                        : <input type="number" name="hargabenda" maxlength="200" value="0" required autofocus placeholder="Diisi Taksiran Harga Barang ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Banyaknya Korban Luka</label>
                                    <div class="controls">
                                        : <input type="number" name="korbanluka" maxlength="200" value="0" required autofocus placeholder="Diisi Banyaknya Korban Luka ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Banyaknya Korban Jiwa</label>
                                    <div class="controls">
                                        : <input type="number" name="korbanjiwa" maxlength="200" value="0" required autofocus placeholder="Diisi Barang Korban Jiwa ..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_e/Buku_Register_Ketentraman_Ketertiban/c_26_buku_register_ketentraman_ketertiban/" class="tombolhapus" style="float: left;">Kembali</a>
                                    <div class="controls">
                                    <input type="submit" value="simpan" name="simpan" class="tombolsimpanubah span2" onclick="return konfirmasisimpan()"></input>
                                    <input type="reset" value="Batal" name="reset" class="tombolsimpanubah span2"></input>
                                    </div>
                                </div>
                            </form>
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