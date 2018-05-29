
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_B_1/Buku_Data_Induk_penduduk_Desa/c_26_buku_induk_penduduk_desa/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Lengkap</label>
                                    <div class="controls">
                                        : <input type="text" name="namalengkap" maxlength="255"  autofocus value="<?php echo $row->nama_lengkap?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                    <div class="controls">
                                        : <select name="jeniskelamin"  class="span8">
                                            <option value="<?php echo $row->jenis_kelamin?>" selected><?php echo $row->jenis_kelamin?></option>
                                            <option value="Laki - Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Status Perkawinan</label>
                                    <div class="controls">
                                        : <select name="statusperkawinan"  class="span8">
                                            <option value="<?php echo $row->status_perkawinan?>" selected><?php echo $row->status_perkawinan?></option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tempat Lahir</label>
                                    <div class="controls">
                                        : <input type="text" name="tempatlahir" maxlength="200"  autofocus value="<?php echo $row->tempat_lahir?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggallahir" maxlength="255"  autofocus value="<?php echo $row->tanggal_lahir?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Agama</label>
                                    <div class="controls">
                                        : <select name="agama"  class="span8">
                                            <option value="<?php echo $row->agama?>" selected><?php echo $row->agama?></option>
                                            <option value="Islam" name="islam">Islam</option>
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
                                    <label class="control-label" for="basicinput">Pendidikan Terakhir</label>
                                    <div class="controls">
                                        : <select name="pendidikanterakhir"  class="span8">
                                            <option value="<?php echo $row->pendidikan_terakhir?>" selected><?php echo $row->pendidikan_terakhir?></option>
                                            <option value="Belum / Tidak Sekolah">Belum / Tidak Sekolah</option>
                                            <option value="Belum Tamat DS / Sederajat">Belum Tamat SD / Sederajat</option>
                                            <option value="Tamat SD / Sederajat">Tamat SD / Sederajat</option>
                                            <option value="SLTP / Sederajat">SLTP/Sederajat</option>
                                            <option value="SLTP / Sederajat">SLTA/Sederajat</option>
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
                                        : <select name="pekerjaan" class="span8" >
                                            <option value="<?php echo $row->pekerjaan?>" selected><?php echo $row->pekerjaan?></option>
                                            <option value="Belum / Tidak Bekerja">Belum / Tidak Bekerja</option>
                                            <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                                            <option value="Pelajar / Mahasiswa">Pelajar / Mahasiswa</option>
                                            <option value="Pensiunan">Pensiunan</option>
                                            <option value="Bekerjapns">Pegawai Negeri Sipil (PNS)</option>
                                            <option value="bekerjatni">Tentara Nasional Indonesia (TNI)</option>
                                            <option value="bekerjapolri">Kepolisian RI (POLRI)</option>
                                            <option value="bekerjaperdagangan">Perdagangan</option>
                                            <option value="bekerjaPetani/pekebun">Petani / Pekebun</option>
                                            <option value="bekerjapeternak">Peternak</option>
                                            <option value="bekerjanelayan/perikanan">Nelayan / Perikanan</option>
                                            <option value="bekerjaindustri">Industri</option>
                                            <option value="bekerjakonstruksi">Konstruksi</option>
                                            <option value="bekerjatransportasi">Transportasi</option>
                                            <option value="bekerjakaryawanbswasta">Karyawan / Swasta</option>
                                            <option value="bekerjakaryawanbumn">Karyawan / BUMN</option>
                                            <option value="bekerjakaryawanbumd">Karyawan / BUMD</option>
                                            <option value="bekerjakaryawanhonorer">Karyawan / Honorer</option>
                                            <option value="bekerjaburuhharianlepas">Buruh Harian Lepas</option>
                                            <option value="bekerjaburuhtaniperkebunan">Buruh Tani / Perkebunan</option>
                                            <option value="bekerjaburuhnelayanperikanan">Buruh Nelayan / Perikanan</option>
                                            <option value="bekerjaburuhpeternakan">Buruh Peternakan</option>
                                            <option value="bekerjapembanturumahtanggal">Pembantu Rumah Tangga</option>
                                            <option value="bekerjatukangcukur">Tukang Cukur</option>
                                            <option value="bekerjatukanglistrik">Tukang Listrik</option>
                                            <option value="bekerjatukangbatu">Tukang Batu</option>
                                            <option value="bekerjatukangkayu">Tukang Kayu</option>
                                            <option value="bekerjatukangsolsepatu">Tukang Sol Sepatu</option>
                                            <option value="bekerjatukanglasataupandaibesi">Tukang Las Atau Pandai Besi</option>
                                            <option value="bekerjatukangjahit">Tukang Jahit</option>
                                            <option value="bekerjatukanggigi">Tukang Gigi</option>
                                            <option value="bekerjapenatarias">Penata Rias</option>
                                            <option value="bekerjabpenatabusana">Penata Busana</option>
                                            <option value="bekerjapenatarambut">Penata Rambut</option>
                                            <option value="bekerjamekanik">Mekanik</option>
                                            <option value="bekerjaseniman">Seniman</option>
                                            <option value="bekerjatabib">Tabib</option>
                                            <option value="bekerjaparaji">Paraji</option>
                                            <option value="bekerjaperancangbusana">Perancang Busana</option>
                                            <option value="bekerjapenterjemah">Penterjemah</option>
                                            <option value="bekerjaimammasjid">Imam Masjid</option>
                                            <option value="bekerjabpendeta">Pendeta</option>
                                            <option value="bekerjapastor">Pastor</option>
                                            <option value="bekerjawartawan">Wartawan</option>
                                            <option value="bekerjaustadz/mubaligh">Ustadz / Mubaligh</option>
                                            <option value="bekerjajurumasak">Juru Masak</option>
                                            <option value="bekerjapromotoracara">Promotor Acara</option>
                                            <option value="bekerjaanggotadprri">Anggota DPR RI</option>
                                            <option value="bekerjaanggotadpd">Anggota DPD</option>
                                            <option value="bekerjaanggotabpk">Anggota BPK</option>
                                            <option value="bekerjapresiden">Presiden</option>
                                            <option value="bekerjawakilpresiden">Wakil Presiden</option>
                                            <option value="bekerjaanggotamahkamah">Anggota Mahkamah</option>
                                            <option value="bekerjakonstitusi">Konstitusi</option>
                                            <option value="bekerjaanggotakabinet/kementrian">Anggota Kabinet / Kementrian</option>
                                            <option value="bekerjadutabesar">Duta Besar</option>
                                            <option value="bekerjagubernur">Gubernur</option>
                                            <option value="bekerjawakilgubernur">Wakil Gubernur</option>
                                            <option value="bekerjabupati">Bupati</option>
                                            <option value="bekerjawakilbupati">Wakil Bupati</option>
                                            <option value="bekerjawalikota">Walikota</option>
                                            <option value="bekerjawakilwalikota">Wakil walikota</option>
                                            <option value="bekerjaanggotadprdprovinsi">Anggota DPRD Provinsi</option>
                                            <option value="bekerjaanggotadprdkabupaten/kota">Anggota DPRD Kabupaten/Kota</option>
                                            <option value="bekerjadosen">Dosen</option>
                                            <option value="bekerjaguru">Guru</option>
                                            <option value="bekerjapilot">Pilot</option>
                                            <option value="bekerjapengacara">Pengacara</option>
                                            <option value="bekerjanotaris">Notaris</option>
                                            <option value="bekerjaarsitek">Arsitek</option>
                                            <option value="bekerjaakuntan">Akuntan</option>
                                            <option value="bekerjakonsultan">Konsultan</option>
                                            <option value="bekerjadokter">Dokter</option>
                                            <option value="bekerjabidan">Bidan</option>
                                            <option value="bekerjaperawat">Perawat</option>
                                            <option value="bekerjaapoteker">Apoteker</option>
                                            <option value="bekerjapsikiater/psikolog">Psikiater / Psikolog</option>
                                            <option value="bekerjapenyiartelevisi">Penyiar Televisi</option>
                                            <option value="bekerjapenyiarradio">Penyiar Radio</option>
                                            <option value="bekerjapelaut">Pelaut</option>
                                            <option value="bekerjapeneliti">Peneliti</option>
                                            <option value="bekerjasopir">Sopir</option>
                                            <option value="bekerjapialang">Pialang</option>
                                            <option value="bekerjaparanormal">Paranormal</option>
                                            <option value="bekerjapedagang">Pedagang</option>
                                            <option value="bekerjaperangkatdesa">Perangkat Desa</option>
                                            <option value="bekerjakepaladesa">Kepala Desa</option>
                                            <option value="bekerjabiarawati">Biarawati</option>
                                            <option value="bekerjawiraswasta">Wiraswasta</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Kepandaian Membaca</label>
                                    <div class="controls">
                                        : <select name="kepandaianmembaca"  class="span8">
                                            <option value="<?php echo $row->kepandaian_membaca?>"><?php echo $row->kepandaian_membaca?></option>
                                            <option value="A" selected="">L (Latin)</option>
                                            <option value="D (Daerah)">D (Daerah)</option>
                                            <option value="A (Arab)">A (Arab)</option>
                                            <option value="AL (Arab Latin)">AL (Arab Latin)</option>
                                            <option value="AD (ARab Daerah)">AD (ARab Daerah)</option>
                                            <option value="ALD (Arab,Latin dan Daerah)">ALD (Arab,Latin dan Daerah)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Kewarganegaraan</label>
                                    <div class="controls">
                                        : <input type="text" name="kewarganegaraan" maxlength="255"  autofocus value="<?php echo $row->kewarganegaraan?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Alamat</label>
                                    <div class="controls">
                                        : <textarea name="alamat" class="span8" ><?php echo $row->alamat_lengkap?></textarea>    
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hubungan Keluarga</label>
                                    <div class="controls">
                                        : <select name="hubungankeluarga"  class="span8">
                                            <option value="<?php echo $row->hubungan_keluarga?>" selected><?php echo $row->hubungan_keluarga?></option>
                                            <option value="Kepala Keluarga">Kepala Keluarga</option>
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
                                    <label class="control-label" for="basicinput">Nomor KTP</label>
                                    <div class="controls">
                                        : <input type="number" name="nomorktp" maxlength="20"  autofocus value="<?php echo $row->no_ktp?>" placeholder="Masukan Nomor KK..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor KK</label>
                                    <div class="controls">
                                        : <input type="number" name="nomorkk" maxlength="20"  autofocus value="<?php echo $row->no_kk?>" class="span8">
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan" ><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_B_1/Buku_Data_Induk_Penduduk_Desa/c_26_buku_induk_penduduk_desa/" class="tombolhapus" style="float: left;">Kembali</a>
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