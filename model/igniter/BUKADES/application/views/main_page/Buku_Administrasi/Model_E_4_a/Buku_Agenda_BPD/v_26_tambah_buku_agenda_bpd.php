
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Agenda</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalagenda" maxlength="200" required autofocus placeholder="Diisi tanggal terima surat..." class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Surat Masuk</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Surat Masuk</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorsuratmasuk" maxlength="200" required autofocus placeholder="Diisi nomor surat masuk..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Surat Masuk</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalsuratmasuk" maxlength="200" required autofocus placeholder="Diisi tanggal surat masuk..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Dari Siapa</label>
                                    <div class="controls">
                                        : <input type="text" name="darisuratmasuk" maxlength="200" required autofocus placeholder="Diisi nama pengirim surat..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Isi Singkat</label>
                                    <div class="controls">
                                        : <textarea name="isisuratmasuk" maxlength="200" required autofocus placeholder="Diisi perihal surat masuk..." class="span8"></textarea>
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Surat Keluar</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Isi Singkat</label>
                                    <div class="controls">
                                        : <textarea name="isisuratkeluar" maxlength="200" required autofocus placeholder="Diisi perihal surat keluar..." class="span8"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Pengiriman</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalsuratkeluar" maxlength="200" required autofocus placeholder="Diisi tanggal pengiriman..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Alamat</label>
                                    <div class="controls">
                                        : <textarea name="alamatsuratkeluar" maxlength="200" required autofocus placeholder="Diisi alamat instansi yang dituju..." class="span8"></textarea>
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
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/" class="tombolhapus" style="float: left;">Kembali</a>
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