
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/c_26_buku_Agenda_desa/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggal" required autofocus placeholder="Masukan tanggal agenda..." class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Surat</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Surat</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorsurat" required autofocus class="span8" placeholder="Masukan nomor surat">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Surat</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalsurat" required autofocus class="span8" placeholder="Masukan tanggal surat">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                <legend>Surat Masuk</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Dari siapa Surat Masuk</label>
                                    <div class="controls">
                                        : <input type="text" name="suratmasukdari" required autofocus class="span8" placeholder="diisi siapa yang mengirim surat masuk">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Isi Singkat Surat Masuk</label>
                                    <div class="controls">
                                        : <textarea name="suratmasukisi" placeholder="isi singkat dari surat masuk" class="span8"></textarea>
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Surat Keluar</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Isi Singkat Surat Keluar</label>
                                    <div class="controls">
                                        : <textarea name="suratkeluarisi" placeholder="diisi perihal surat keluar" class="span8"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Pengiriman</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpengiriman" required autofocus class="span8" placeholder="diisi tanggal pengiriman surat keluar">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Alamat</label>
                                    <div class="controls">
                                        : <input type="text" name="alamat" required autofocus class="span8" placeholder="diisi nama instansi yang dituju">
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
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/c_26_buku_agenda_desa/" class="tombolhapus" style="float: left;">Kembali</a>
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