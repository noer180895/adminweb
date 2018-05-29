
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Lengkap</label>
                                    <div class="controls">
                                        : <input type="text" name="namalengkap" maxlength="255" required autofocus placeholder="Masukan Nama Penduduk datang , lahir ataupun meninggal..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tempat Lahir</label>
                                    <div class="controls">
                                        : <input type="text" name="tempatlahir" maxlength="200" required autofocus placeholder="Masukan tempat lahir..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggallahir" maxlength="255" required autofocus placeholder="Masukan tanggal lahir..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                    <div class="controls">
                                        : <select name="jeniskelamin" required class="span8">
                                            <option value="Laki - Laki" selected="">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Kewarganegaraan</label>
                                    <div class="controls">
                                        : <input type="text" name="kewarganegaraan" maxlength="255" required autofocus placeholder="Masukan Kewarganegaraan..." class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Penduduk yang baru Datang</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Asal Daerah</label>
                                    <div class="controls">
                                        : <input type="text" name="asaldaerah" maxlength="255" required autofocus placeholder="Diisi daerah Asal..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Datang</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggaldatang" maxlength="255" required autofocus placeholder="Diisi tanggal datang..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tempat Lahir</label>
                                    <div class="controls">
                                        : <input type="text" name="datangtempatlahir" maxlength="255" required autofocus placeholder="Diisi tempat lahir pendatang..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                    <div class="controls">
                                        : <input type="date" name="datangtanggallahir" maxlength="255" required autofocus placeholder="Diisi tanggal lahir pendatang..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pengurangan Penduduk</label>
                                    <div class="controls">
                                        : <input type="text" name="penguranganpenduduk" maxlength="255" required autofocus placeholder="Diisi daerah pengurangan penduduk tersebut..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Pindah</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpindah" maxlength="255" required autofocus placeholder="Diisi tanggal pindah pendatang..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pendudung yang Meninggal</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tempat Meninggal</label>
                                    <div class="controls">
                                        : <input type="text" name="tempatmeninggal" maxlength="255" required autofocus placeholder="Diisi tempat meninggal..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Meninggal</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalmeninggal" maxlength="255" autofocus placeholder="Diisi tanggal meninggal..." class="span8">
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
                                    <a href="<?php echo base_urL()?>Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/" class="tombolhapus" style="float: left;">Kembali</a>
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