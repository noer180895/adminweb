<script>
function nama() {
    var x = document.getElementById("name");
    x.value = x.value.toUpperCase();
}
function tmpt() {
    var x = document.getElementById("tmptlahir");
    x.value = x.value.toUpperCase();
}
function alamatU() {
    var x = document.getElementById("alamat");
    x.value = x.value.toUpperCase();
}
function kewarganegaraanU() {
    var x = document.getElementById("kewarganegaraan");
    x.value = x.value.toUpperCase();
}
function namaayahU() {
    var x = document.getElementById("namaayah");
    x.value = x.value.toUpperCase();
}
function namaibuU() {
    var x = document.getElementById("namaibu");
    x.value = x.value.toUpperCase();
}
</script>
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Tambah Data Penduduk Desa</h3>
                            </div>
                            <div class="module-body">
                                    
                           
                                    <form action="<?php echo base_url()?>Data_Penduduk/c_26_data_penduduk/simpan" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor KK</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnomorkk" maxlength="20" required autofocus value="<?php echo @$_SESSION['txtnomorkk'];?>" placeholder="Masukan Nomor KK..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor NIK</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnomornik" maxlength="20" required autofocus placeholder="Masukan Nomor NIK..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnama" maxlength="255" id="name" onkeyup="nama()" required autofocus placeholder="Masukan Nama Penduduk..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tempat Lahir</label>
                                            <div class="controls">
                                                : <input type="text" name="txttempatlahir" maxlength="200" id="tmptlahir" onkeyup="tmpt()" required autofocus placeholder="Masukan tempat lahir..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                            <div class="controls">
                                                : <input type="date" name="txttanggallahir" maxlength="255" required autofocus placeholder="Masukan tanggal lahir..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                            <div class="controls">
                                                : <select name="jeniskelamin" required class="span8">
                                                    <option value="Laki - Laki" selected>Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Golongan Darah</label>
                                            <div class="controls">
                                                : <select name="golongandarah" required class="span8">
                                                    <option value="A" selected="">A</option>
                                                    <option value="A-">A-</option>
                                                    <option value="A+">A+</option>
                                                    <option value="B">B</option>
                                                    <option value="B-">B-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="AB">AB</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="O">O</option>
                                                    <option value="O-">O-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="Tidak Tahu">TIDAK TAHU</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Alamat</label>
                                            <div class="controls">
                                                : <textarea name="alamat" class="span8" id="alamat" onkeyup="alamatU()" placeholder="Diisi Alamat Data Penduduk "></textarea>    
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">RT/RW</label>
                                            <div class="controls">
                                                : <input type="number" name="txtrt" maxlength="255" required autofocus placeholder="Masukan RT..." class="span4">
                                                <input type="number" name="txtrw" maxlength="255" required autofocus placeholder="Masukan RW..." class="span4">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Agama</label>
                                            <div class="controls">
                                                : <select name="agama" required class="span8">
                                                    <option value="Islam" name="islam" selected="">Islam</option>
                                                    <option value="Protestan" name="protestan">Protestan</option>
                                                    <option value="Khatolik" name="khatolik">Khatolik</option>
                                                    <option value="Hindu" name="hindu">Hindu</option>
                                                    <option value="Buddha" name="buddha">Buddha</option>
                                                    <option value="Khonghucu" name="konghucu">Khonghucu</option>
                                                    <option value="Tidak Beragama" name="tidakberagama">Tidak Beragama</option>
                                                    <option value="Lainnya" name="lainnya">Lainnya</option>
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Status Perkawinan</label>
                                            <div class="controls">
                                                : <select name="statusperkawinan" required class="span8">
                                                    <option value="Belum Menikah" selected="">Belum Menikah</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                                    <option value="Cerai Mati">Cerai Mati</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Pendidikan Terakhir</label>
                                            <div class="controls">
                                                : <select name="pendidikanterakhir" required class="span8">
                                                    <option value="Belum / Tidak Sekolah" selected>Belum / Tidak Sekolah</option>
                                                    <option value="Belum Tamat SD / Sederajat">Belum Tamat SD / Sederajat</option>
                                                    <option value="Tamat SD / Sederajat">Tamat SD / Sederajat</option>
                                                    <option value="SLTP / Sederajat">SLTP/Sederajat</option>
                                                    <option value="SLTA / Sederajat">SLTA/Sederajat</option>
                                                    <option value="DIPLOMA I / II">DIPLOMA I/II</option>
                                                    <option value="Akademi / DIPLOMA III / S.MUDA">Akademi / DIPLOMA III / S.Muda</option>
                                                    <option value="DIPLOMA IV / STRATA I">DIPLOMA IV / STRATA I</option>
                                                    <option value="STRATA II">STRATA II</option>
                                                    <option value="STRATA III">STRATA III</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Pekerjaan</label>
                                            <div class="controls">
                                                : <select name="txtpekerjaan" required class="span8">
                                                    <option value="Belum / Tidak Bekerja" selected>Belum / Tidak Bekerja </option>
                                                    <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                                    <option value="Pelajar / Mahasiswa">Pelajar / Mahasiswa</option>
                                                    <option value="Pensiunan">Pensiunan</option>
                                                    <option value="Bekerja pns">Pegawai Negeri Sipil (PNS)</option>
                                                    <option value="Bekerja tni">Tentara Nasional Indonesia (TNI)</option>
                                                    <option value="Bekerja polri">Kepolisian RI (POLRI)</option>
                                                    <option value="Bekerja perdagangan">Perdagangan</option>
                                                    <option value="Bekerja Petani / pekebun">Petani / Pekebun</option>
                                                    <option value="Bekerja peternak">Peternak</option>
                                                    <option value="Bekerja nelayan / perikanan">Nelayan / Perikanan</option>
                                                    <option value="Bekerja industri">Industri</option>
                                                    <option value="Bekerja konstruksi">Konstruksi</option>
                                                    <option value="Bekerja transportasi">Transportasi</option>
                                                    <option value="Bekerja karyawan swasta">Karyawan / Swasta</option>
                                                    <option value="Bekerja karyawan bumn">Karyawan / BUMN</option>
                                                    <option value="Bekerja karyawan bumd">Karyawan / BUMD</option>
                                                    <option value="Bekerja karyawan honorer">Karyawan / Honorer</option>
                                                    <option value="Bekerja buruh harian lepas">Buruh Harian Lepas</option>
                                                    <option value="Bekerja buruh tani perkebunan">Buruh Tani / Perkebunan</option>
                                                    <option value="Bekerja buruh nelayan perikanan">Buruh Nelayan / Perikanan</option>
                                                    <option value="Bekerja buruh peternakan">Buruh Peternakan</option>
                                                    <option value="Bekerja pembantu rumah tanggal">Pembantu Rumah Tangga</option>
                                                    <option value="Bekerja tukang cukur">Tukang Cukur</option>
                                                    <option value="Bekerja tukang listrik">Tukang Listrik</option>
                                                    <option value="Bekerja tukang batu">Tukang Batu</option>
                                                    <option value="Bekerja tukang kayu">Tukang Kayu</option>
                                                    <option value="Bekerja tukang sol sepatu">Tukang Sol Sepatu</option>
                                                    <option value="Bekerja tukang las atau pandai besi">Tukang Las Atau Pandai Besi</option>
                                                    <option value="Bekerja tukang jahit">Tukang Jahit</option>
                                                    <option value="Bekerja tukang gigi">Tukang Gigi</option>
                                                    <option value="Bekerja penata rias">Penata Rias</option>
                                                    <option value="Bekerja penata busana">Penata Busana</option>
                                                    <option value="Bekerja penata rambut">Penata Rambut</option>
                                                    <option value="Bekerja mekanik">Mekanik</option>
                                                    <option value="Bekerja seniman">Seniman</option>
                                                    <option value="Bekerja tabib">Tabib</option>
                                                    <option value="Bekerja paraji">Paraji</option>
                                                    <option value="Bekerja perancang busana">Perancang Busana</option>
                                                    <option value="Bekerja penterjemah">Penterjemah</option>
                                                    <option value="Bekerja imam masjid">Imam Masjid</option>
                                                    <option value="Bekerja pendeta">Pendeta</option>
                                                    <option value="Bekerja pastor">Pastor</option>
                                                    <option value="Bekerja wartawan">Wartawan</option>
                                                    <option value="Bekerja ustadz / mubaligh">Ustadz / Mubaligh</option>
                                                    <option value="Bekerja juru masak">Juru Masak</option>
                                                    <option value="Bekerja promotor acara">Promotor Acara</option>
                                                    <option value="Bekerja anggota dprri">Anggota DPR RI</option>
                                                    <option value="Bekerja anggota dpd">Anggota DPD</option>
                                                    <option value="Bekerja anggota bpk">Anggota BPK</option>
                                                    <option value="Bekerja presiden">Presiden</option>
                                                    <option value="Bekerja wakil presiden">Wakil Presiden</option>
                                                    <option value="Bekerja anggota mahkamah">Anggota Mahkamah</option>
                                                    <option value="Bekerja konstitusi">Konstitusi</option>
                                                    <option value="Bekerja anggota kabinet / kementrian">Anggota Kabinet / Kementrian</option>
                                                    <option value="Bekerja duta besar">Duta Besar</option>
                                                    <option value="Bekerja gubernur">Gubernur</option>
                                                    <option value="Bekerja wakil gubernur">Wakil Gubernur</option>
                                                    <option value="Bekerja bupati">Bupati</option>
                                                    <option value="Bekerja wakil bupati">Wakil Bupati</option>
                                                    <option value="Bekerja walikota">Walikota</option>
                                                    <option value="Bekerja wakil walikota">Wakil walikota</option>
                                                    <option value="Bekerja anggota dprd provinsi">Anggota DPRD Provinsi</option>
                                                    <option value="Bekerja anggota dprd kabupaten / kota">Anggota DPRD Kabupaten/Kota</option>
                                                    <option value="Bekerja dosen">Dosen</option>
                                                    <option value="Bekerja guru">Guru</option>
                                                    <option value="Bekerja pilot">Pilot</option>
                                                    <option value="Bekerja pengacara">Pengacara</option>
                                                    <option value="Bekerja notaris">Notaris</option>
                                                    <option value="Bekerja arsitek">Arsitek</option>
                                                    <option value="Bekerja akuntan">Akuntan</option>
                                                    <option value="Bekerja konsultan">Konsultan</option>
                                                    <option value="Bekerja dokter">Dokter</option>
                                                    <option value="Bekerja bidan">Bidan</option>
                                                    <option value="Bekerja perawat">Perawat</option>
                                                    <option value="Bekerja apoteker">Apoteker</option>
                                                    <option value="Bekerja psikiater / psikolog">Psikiater / Psikolog</option>
                                                    <option value="Bekerja penyiar televisi">Penyiar Televisi</option>
                                                    <option value="Bekerja penyiar radio">Penyiar Radio</option>
                                                    <option value="Bekerja pelaut">Pelaut</option>
                                                    <option value="Bekerja peneliti">Peneliti</option>
                                                    <option value="Bekerja sopir">Sopir</option>
                                                    <option value="Bekerja pialang">Pialang</option>
                                                    <option value="Bekerja paranormal">Paranormal</option>
                                                    <option value="Bekerja pedagang">Pedagang</option>
                                                    <option value="Bekerja perangkatdesa">Perangkat Desa</option>
                                                    <option value="Bekerja kepaladesa">Kepala Desa</option>
                                                    <option value="Bekerja biarawati">Biarawati</option>
                                                    <option value="Bekerja wiraswasta">Wiraswasta</option>
                                                    <option value="lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Hubungan Keluarga</label>
                                            <div class="controls">
                                                : <select name="hubungankeluarga" required class="span8">
                                                    <option value="Kepala Keluarga" selected>Kepala Keluarga</option>
                                                    <option value="Suami">Suami</option>
                                                    <option value="Istri">Istri</option>
                                                    <option value="Anak">Anak</option>
                                                    <option value="Menantu">Menantu</option>
                                                    <option value="Cucu">Cucu</option>
                                                    <option value="Orang Tua">Orang Tua</option>
                                                    <option value="Mertua">Mertua</option>
                                                    <option value="Pembantu">Pembantu</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Kewarganegaraan</label>
                                            <div class="controls">
                                                : <input type="text" name="txtkewarganegaraan" id="kewarganegaraan" onkeyup="kewarganegaraanU()" maxlength="255" required autofocus placeholder="Masukan Kewarganegaraan..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama Ayah</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnamaayah" maxlength="255" id="namaayah" onkeyup="namaayahU()" required autofocus placeholder="Masukan Nama Ayah..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama Ibu</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnamaibu" maxlength="255" id="namaibu" onkeyup="namaibuU()" required autofocus placeholder="Masukan Nama Ibu..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <a href="<?php echo base_url()?>Data_Penduduk/c_26_data_Penduduk/" class="tombolhapus" style="float: left;">Kembali</a>
                                            <div class="controls">
                                                <input type="submit" name="submit" maxlength="255" required autofocus onclick="return konfirmasisimpan()" class="tombolsimpanubah span4" value="Simpan Data">
                                                <input type="reset" name="submit" maxlength="255" required autofocus class="tombolsimpanubah span4" value="Batal">
                                            </div>
                                        </div>
                                        
                                    </form>
                                    <br>
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