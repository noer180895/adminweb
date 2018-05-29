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
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/c_26_buku_penduduk_sementara/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Lengkap</label>
                                    <div class="controls">
                                        : <input type="text" name="namalengkap" maxlength="255" required autofocus placeholder="Masukan Nama Lengkap..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                    <div class="controls">
                                        : <select name="jeniskelamin" required class="span8">
                                            <option value="Laki - Laki" selected>Laki - Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No Tanda Pengenal</label>
                                    <div class="controls">
                                        : <input type="text" name="notandapengenal" maxlength="255" required autofocus placeholder="Diisi nomor tanda pengenal..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tempat Lahir</label>
                                    <div class="controls">
                                        : <input type="text" name="tempatlahir" maxlength="255" required autofocus placeholder="Masukan Tempat Lahir Penduduk..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggallahir" maxlength="255" required autofocus placeholder="Masukan Tanggal Lahir Penduduk..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                            <label class="control-label" for="basicinput">Pekerjaan</label>
                                            <div class="controls">
                                                : <select name="pekerjaan" required class="span8">
                                                    <option value="Belum / Tidak Bekerja " selected>Belum / Tidak Bekerja </option>
                                                    <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                                    <option value="Pelajar / Mahasiswa">Pelajar / Mahasiswa</option>
                                                    <option value="Pensiunan">Pensiunan</option>
                                                    <option value="Bekerja pns">Pegawai Negeri Sipil (PNS)</option>
                                                    <option value="Bekerja tni">Tentara Nasional Indonesia (TNI)</option>
                                                    <option value="Bekerja polri">Kepolisian RI (POLRI)</option>
                                                    <option value="Bekerja perdagangan">Perdagangan</option>
                                                    <option value="Bekerja Petani/pekebun">Petani / Pekebun</option>
                                                    <option value="Bekerja peternak">Peternak</option>
                                                    <option value="Bekerja nelayan/perikanan">Nelayan / Perikanan</option>
                                                    <option value="Bekerja industri">Industri</option>
                                                    <option value="Bekerja konstruksi">Konstruksi</option>
                                                    <option value="Bekerja transportasi">Transportasi</option>
                                                    <option value="Bekerja karyawanbswasta">Karyawan / Swasta</option>
                                                    <option value="Bekerja karyawanbumn">Karyawan / BUMN</option>
                                                    <option value="Bekerja karyawanbumd">Karyawan / BUMD</option>
                                                    <option value="Bekerja karyawanhonorer">Karyawan / Honorer</option>
                                                    <option value="Bekerja buruhharianlepas">Buruh Harian Lepas</option>
                                                    <option value="Bekerja buruhtaniperkebunan">Buruh Tani / Perkebunan</option>
                                                    <option value="Bekerja buruhnelayanperikanan">Buruh Nelayan / Perikanan</option>
                                                    <option value="Bekerja buruhpeternakan">Buruh Peternakan</option>
                                                    <option value="Bekerja pembanturumahtanggal">Pembantu Rumah Tangga</option>
                                                    <option value="Bekerja tukangcukur">Tukang Cukur</option>
                                                    <option value="Bekerja tukanglistrik">Tukang Listrik</option>
                                                    <option value="Bekerja tukangbatu">Tukang Batu</option>
                                                    <option value="Bekerja tukangkayu">Tukang Kayu</option>
                                                    <option value="Bekerja tukangsolsepatu">Tukang Sol Sepatu</option>
                                                    <option value="Bekerja tukanglasataupandaibesi">Tukang Las Atau Pandai Besi</option>
                                                    <option value="Bekerja tukangjahit">Tukang Jahit</option>
                                                    <option value="Bekerja tukanggigi">Tukang Gigi</option>
                                                    <option value="Bekerja penatarias">Penata Rias</option>
                                                    <option value="Bekerja bpenatabusana">Penata Busana</option>
                                                    <option value="Bekerja penatarambut">Penata Rambut</option>
                                                    <option value="Bekerja mekanik">Mekanik</option>
                                                    <option value="Bekerja seniman">Seniman</option>
                                                    <option value="Bekerja tabib">Tabib</option>
                                                    <option value="Bekerja paraji">Paraji</option>
                                                    <option value="Bekerja perancangbusana">Perancang Busana</option>
                                                    <option value="Bekerja penterjemah">Penterjemah</option>
                                                    <option value="Bekerja imammasjid">Imam Masjid</option>
                                                    <option value="Bekerja bpendeta">Pendeta</option>
                                                    <option value="Bekerja pastor">Pastor</option>
                                                    <option value="Bekerja wartawan">Wartawan</option>
                                                    <option value="Bekerja ustadz/mubaligh">Ustadz / Mubaligh</option>
                                                    <option value="Bekerja jurumasak">Juru Masak</option>
                                                    <option value="Bekerja promotoracara">Promotor Acara</option>
                                                    <option value="Bekerja anggotadprri">Anggota DPR RI</option>
                                                    <option value="Bekerja anggotadpd">Anggota DPD</option>
                                                    <option value="Bekerja anggotabpk">Anggota BPK</option>
                                                    <option value="Bekerja presiden">Presiden</option>
                                                    <option value="Bekerja wakilpresiden">Wakil Presiden</option>
                                                    <option value="Bekerja anggotamahkamah">Anggota Mahkamah</option>
                                                    <option value="Bekerja konstitusi">Konstitusi</option>
                                                    <option value="Bekerja anggotakabinet/kementrian">Anggota Kabinet / Kementrian</option>
                                                    <option value="Bekerja dutabesar">Duta Besar</option>
                                                    <option value="Bekerja gubernur">Gubernur</option>
                                                    <option value="Bekerja wakilgubernur">Wakil Gubernur</option>
                                                    <option value="Bekerja bupati">Bupati</option>
                                                    <option value="Bekerja wakilbupati">Wakil Bupati</option>
                                                    <option value="Bekerja walikota">Walikota</option>
                                                    <option value="Bekerja wakilwalikota">Wakil walikota</option>
                                                    <option value="Bekerja anggotadprdprovinsi">Anggota DPRD Provinsi</option>
                                                    <option value="Bekerja anggotadprdkabupaten/kota">Anggota DPRD Kabupaten/Kota</option>
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
                                                    <option value="Bekerja psikiater/psikolog">Psikiater / Psikolog</option>
                                                    <option value="Bekerja penyiartelevisi">Penyiar Televisi</option>
                                                    <option value="Bekerja penyiarradio">Penyiar Radio</option>
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
                                    <label class="control-label" for="basicinput">Kewarganegaraan</label>
                                    <div class="controls">
                                        : <input type="text" name="kewarganegaraan" maxlength="255" required autofocus placeholder="Masukan Kewarganegaraan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Asal Penduduk</label>
                                    <div class="controls">
                                        : <input type="text" name="asalpenduduk" maxlength="255" required autofocus placeholder="Masukan Asal Penduduk..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tujuan Datang</label>
                                    <div class="controls">
                                        : <input type="text" name="tujuandatang" maxlength="255" required autofocus placeholder="Diisi Tujuan Datang Penduduk..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Alamat yang didatangi</label>
                                    <div class="controls">
                                        : <input type="text" name="namaalamatyangdidatangi" maxlength="255" required autofocus placeholder="Masukan Nama Alamat yang Didatangi..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Kedatangan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalkedatangan" maxlength="255" required autofocus placeholder="Masukan Tanggal Kedatangan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Kepergian</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalkepergian" maxlength="255" required autofocus placeholder="Masukan Tanggal Kepergian..." class="span8">
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_urL()?>Buku_Administrasi/Model_B_4/Buku_Penduduk_Sementara/c_26_buku_penduduk_sementara/" class="tombolhapus" style="float: left;">Kembali</a>
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