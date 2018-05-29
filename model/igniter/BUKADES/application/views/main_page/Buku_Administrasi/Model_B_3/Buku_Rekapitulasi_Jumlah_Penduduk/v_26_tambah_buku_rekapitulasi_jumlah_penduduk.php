<script type="text/javascript">

    function hitungg () {
         var kkakhir = document.getElementById('jumlahkkakhirbulan').value;
         var anggotakeluargaakhir = document.getElementById('jumlahanggotakeluargaakhirbulan').value;
         var hasill = parseInt(kkakhir)+parseInt(anggotakeluargaakhir);
         document.getElementById('jumlahpendudukakhir').value = hasill;
    }
    function hitung () {
         var kkawal = document.getElementById('jumlahkkawalbulan').value;
         var anggotakeluargaawal = document.getElementById('jumlahanggotakkawalbulan').value;
         var hasil = parseInt(kkawal)+parseInt(anggotakeluargaawal);
         document.getElementById('jumlahpendudukawal').value = hasil;
    }
</script>
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_jumlah_Penduduk/c_26_buku_rekapitulasi_jumlah_penduduk/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Dusun</label>
                                    <div class="controls">
                                        : <input type="text" name="namadusun" maxlength="255" required autofocus placeholder="Masukan Nama dusun..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah KK awal bulan</label>
                                    <div class="controls">
                                        : <input type="number" name="jumlahkkawalbulan" maxlength="200" value="0" id="jumlahkkawalbulan" onkeyup="hitung('jumlahkkawalbulan')" required autofocus placeholder="Jumlah kepala keluarga awal bulan..." class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>WNA awal bulan</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wnaawallakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wna awal bulan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wnaawalperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wna awal bulan..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <br><br>
                                <fieldset>
                                    <legend>WNI awal bulan</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wniawallakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wni awal bulan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wniawalperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wni awal bulan..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah Anggota KK awal bulan</label>
                                    <div class="controls">
                                        : <input type="number" name="jumlahanggotakkawalbulan" value="0" maxlength="200" id="jumlahanggotakkawalbulan" onkeyup="hitung('jumlahanggotakkawalbulan')" required autofocus placeholder="Jumlah anggota kepala keluarga awal bulan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah Penduduk awal bulan</label>
                                    <div class="controls">
                                        : <input type="number" name="jumlahpendudukawalbulan" maxlength="200" id="jumlahpendudukawal" readonly autofocus placeholder="Jumlah penduduk awal bulan..." class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Penambahan WNA yang lahir</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wnalahirlakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wna yang lahir..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wnalahirperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wna yang lahir..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Penambahan WNI yang lahir</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wnilahirlakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wni yang lahir..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wnilahirperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wni yang lahir..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Penambahan WNA yang Pindah</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wnapindahlakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wna yang pindah..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wnapindahperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wna yang pindah..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Penambahan WNI yang Pindah</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wnipindahlakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wni yang pindah..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wnipindahperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wni yang pindah..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pengurangan WNA karena kematian</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wnakematianlakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wna yang mati..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wnakematianperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wna yang mati..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pengurangan WNI karena kematian</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wnikematianlakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wni yang mati..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wnikematianperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wni yang mati..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pengurangan WNA karena pindah</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wnapenguranganpindahlakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wna yang pindah..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wnapenguranganpindahperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wna yang pindah..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pengurangan WNI karena pindah</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wnipenguranganpindahlakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wni yang pindah..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wnipenguranganpindahperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wni yang pindah..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Jumlah Penduduk WNA akhir bulan</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wnaakhirlakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wna akhir bulan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wnaakhirperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wna akhir bulan..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Jumlah Penduduk WNI akhir bulan</legend>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Laki - Laki </label>
                                    <div class="controls">
                                        : <input type="number" name="wniakhirlakilaki" maxlength="200" value="0" required autofocus placeholder="Jumlah wni akhir bulan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Perempuan</label>
                                    <div class="controls">
                                        : <input type="number" name="wniakhirperempuan" maxlength="200" value="0" required autofocus placeholder="Jumlah wni akhir bulan..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah KK akhir bulan</label>
                                    <div class="controls">
                                        : <input type="number" name="jumlahkkakhirbulan" maxlength="200" value="0" id="jumlahkkakhirbulan" onkeyup="hitungg('jumlahkkakhirbulan')" required autofocus placeholder="Jumlah kk akhir bulan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah Anggota KK akhir bulan</label>
                                    <div class="controls">
                                        : <input type="number" name="jumlahanggotakeluargaakhirbulan" value="0" id="jumlahanggotakeluargaakhirbulan" onkeyup="hitungg('jumlahanggotakeluargaakhirbulan')" maxlength="200" required autofocus placeholder="Jumlah anggota keluarga akhir..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah Penduduk akhir bulan</label>
                                    <div class="controls">
                                        : <input type="number" name="jumlahpendudukakhir" maxlength="200" id="jumlahpendudukakhir" readonly autofocus placeholder="Jumlah penduduk akhir bulan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_3/Buku_Rekapitulasi_Jumlah_Penduduk/c_26_buku_rekapitulasi_jumlah_penduduk/" class="tombolhapus" style="float: left;">Kembali</a>
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