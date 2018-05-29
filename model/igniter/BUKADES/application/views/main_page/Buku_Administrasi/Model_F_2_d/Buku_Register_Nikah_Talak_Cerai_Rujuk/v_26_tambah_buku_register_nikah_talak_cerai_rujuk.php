
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_Talak_cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Tanggal</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Nikah / talak / Cerai / Rujuk</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalregister" maxlength="200" required autofocus placeholder="Diisi tanggal menikah / talak / cerai / rujuk..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Suami</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Suami</label>
                                    <div class="controls">
                                        : <input type="text" name="namasuami" maxlength="200" required autofocus placeholder="Diisi Nama Suami..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Alamat Suami</label>
                                    <div class="controls">
                                        : <textarea name="alamatsuami" required class="span8" placeholder="Diisi Alamat Suami"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor KTP Suami</label>
                                    <div class="controls">
                                        : <input type="number" name="nomorktpsuami" maxlength="200" required autofocus placeholder="Diisi Nomor KTP Suami ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Status Suami</label>
                                    <div class="controls">
                                        : <select name="statussuami" required class="span8">
                                            <option value="Jejaka" selected>Jejaka</option>
                                            <option value="Duda">Duda</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggallahirsuami" required class="span8" placeholder="Diisi Tanggal Lahir suami"></input>
                                    </div>
                                </div>
                                <div class="control-group">
                                            <label class="control-label" for="basicinput">Pekerjaan</label>
                                            <div class="controls">
                                                : <select name="pekerjaansuami" class="span8">
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
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Istri</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Istri</label>
                                    <div class="controls">
                                        : <input type="text" name="namaistri" maxlength="200" required autofocus placeholder="Diisi Nama Istri..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Alamat Istri</label>
                                    <div class="controls">
                                        : <textarea name="alamatistri" required class="span8" placeholder="Diisi Alamat Istri"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor KTP Istri</label>
                                    <div class="controls">
                                        : <input type="number" name="nomorktpistri" maxlength="200" required autofocus placeholder="Diisi Nomor KTP Istri ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Status Istri</label>
                                    <div class="controls">
                                        : <select name="statusistri" required class="span8">
                                            <option value="Perawan" selected>Perawan</option>
                                            <option value="Janda">Janda</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggallahiristri" required class="span8" placeholder="Diisi Tanggal Lahir istri"></input>
                                    </div>
                                </div>
                                <div class="control-group">
                                            <label class="control-label" for="basicinput">Pekerjaan Istri</label>
                                            <div class="controls">
                                                : <select name="pekerjaanistri" class="span8">
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
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Wali</label>
                                    <div class="controls">
                                        : <input type="text" name="namawali" required class="span8" placeholder="Diisi dengan anam Wali"></input>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_d/Buku_Register_Nikah_Talak_Cerai_Rujuk/c_26_buku_register_nikah_talak_cerai_rujuk/" class="tombolhapus" style="float: left;">Kembali</a>
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