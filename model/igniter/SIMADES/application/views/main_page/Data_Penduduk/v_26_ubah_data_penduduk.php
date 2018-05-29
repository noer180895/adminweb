
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Ubah Data Penduduk Desa</h3>
                            </div>
                            <div class="module-body">
                                    <?php 
                                    foreach ($ambil as $row) {
                                         
                                            foreach ($rowa as $datadesa) {
                                            
                                        
                           
                                    ?>
                                    <style type="text/css">
                                    input{
                                        text-transform: uppercase;
                                    }
                                    </style>
                                    <form action="<?php echo base_url()?>Data_Penduduk/c_26_data_penduduk/ubahdata" class="form-horizontal row-fluid" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                        
                                        <input type="hidden" name="namakabupaten" value="<?php echo $datadesa->nama_kabupaten;?>"></input>
                                        <input type="hidden" name="namakecamatan" value="<?php echo $datadesa->nama_kecamatan;?>"></input>
                                        <input type="hidden" name="namadesa" value="<?php echo $datadesa->nama_desa;?>"></input>
                                      
                                        <?php
                                    }
                                    ?>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor KK</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnomorkk" maxlength="20" required autofocus value="<?php echo $row->no_kk;?>" placeholder="Masukan Nomor KK..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor NIK</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnomornik" maxlength="20" required autofocus value="<?php echo $row->no_NIK;?>" placeholder="Masukan Nomor NIK..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnama" maxlength="255" required autofocus value="<?php echo $row->nama;?>" placeholder="Masukan Nama Penduduk..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tempat Lahir</label>
                                            <div class="controls">
                                                : <input type="text" name="txttempatlahir" maxlength="200" required autofocus value="<?php echo $row->tempat_lahir;?>" placeholder="Masukan tempat lahir..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                            <div class="controls">
                                                : <input type="date" name="txttanggallahir" maxlength="255" required autofocus value="<?php echo $row->tanggal_lahir;?>" placeholder="Masukan tanggal lahir..." class="span8">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                            <div class="controls">

                                                    <?php
                                                        $jk = $row->jenis_kelamin;
                                                      ?>
                                                        : <select name="jeniskelamin" required class="span8"> 
                                                        <option value="<?php echo $jk ?>" selected ><?php echo $jk ?></option>
                                                            <option value="Laki - Laki" >Laki - Laki</option>    
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                        
                                                    
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Golongan Darah</label>
                                            <div class="controls">
                                            <?php
                                                $golongan = $row->golongan_darah;
                                            ?>
                                                : <select name="golongandarah" required class="span8">
                                                    <option value="<?php echo $golongan?>" selected><?php echo $golongan?></option>
                                                    <option value="A">A</option>
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
                                                    <option value="tidaktahu">TIDAK TAHU</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Alamat</label>
                                            <div class="controls">
                                                : <textarea name="alamat" class="span8"><?php echo $row->Alamat?></textarea>    
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">RT/RW</label>
                                            <div class="controls">
                                                : <input type="number" name="txtrt" maxlength="255" required autofocus value="<?php echo $row->RT?>" placeholder="Masukan RT..." class="span4">
                                                <input type="number" name="txtrw" maxlength="255" required autofocus value="<?php echo $row->RW?>" placeholder="Masukan RW..." class="span4">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Agama</label>
                                            <div class="controls">
                                            <?php
                                                $agama = $row->agama;
                                            ?>
                                                : <select name="agama" required class="span8">
                                                    <option value="<?php echo $agama ?>" name="islam" selected><?php echo $agama ?></option>
                                                    <option value="islam" name="islam" >Islam</option>
                                                    <option value="protestan" name="protestan">Protestan</option>
                                                    <option value="khatolik" name="khatolik">Khatolik</option>
                                                    <option value="hindu" name="hindu">Hindu</option>
                                                    <option value="buddha" name="buddha">Buddha</option>
                                                    <option value="khonghucu" name="konghucu">Khonghucu</option>
                                                    <option value="tidakberagama" name="tidakberagama">Tidak Beragama</option>
                                                    <option value="lainnya" name="lainnya">Lainnya</option>
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Status Perkawinan</label>
                                            <div class="controls">
                                            <?php
                                                $status = $row->status_perkawinan;
                                            ?>
                                                : <select name="statusperkawinan" required class="span8">
                                                    <option value="<?php echo $status?>" selected><?php echo $status?></option>
                                                    <option value="belummenikah">Belum Menikah</option>
                                                    <option value="menikah">Menikah</option>
                                                    <option value="ceraihidup">Cerai Hidup</option>
                                                    <option value="ceraimati">Cerai Mati</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Pendidikan Terakhir</label>
                                            <div class="controls">
                                            <?php
                                                $pendidikan = $row->pendidikan_terakhir;
                                            ?>
                                                : <select name="pendidikanterakhir" required class="span8">
                                                    <option value="<?php echo $pendidikan?>" selected><?php echo $pendidikan?></option>
                                                    <option value="belum/tidaksekolah">Belum / Tidak Sekolah</option>
                                                    <option value="belumtamatsd/sederajat">Belum Tamat SD / Sederajat</option>
                                                    <option value="tamatsd/sederajat">Tamat SD / Sederajat</option>
                                                    <option value="sltp/sederajat">SLTP/Sederajat</option>
                                                    <option value="slta/sederajat">SLTA/Sederajat</option>
                                                    <option value="diplomai/ii">DIPLOMA I/II</option>
                                                    <option value="akademi/diplomaiii/smuda">Akademi / DIPLOMA III / S.Muda</option>
                                                    <option value="diplomaiv/stratai">DIPLOMA IV / STRATA I</option>
                                                    <option value="strataii">STRATA II</option>
                                                    <option value="strataiii">STRATA III</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Pekerjaan</label>
                                            <div class="controls">
                                            <?php
                                                $pekerjaan = $row->pekerjaan;
                                            ?>
                                                : <select name="txtpekerjaan" class="span8">
                                                    <option value="<?php echo $pekerjaan?>" selected><?php echo $pekerjaan?></option>
                                                    <option value="belum / tidakBekerja ">Belum / Tidak Bekerja </option>
                                                    <option value="mengurus rumah tangga">Mengurus Rumah Tangga</option>
                                                    <option value="pelajar / mahasiswa">Pelajar / Mahasiswa</option>
                                                    <option value="pensiunan">Pensiunan</option>
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
                                            <label class="control-label" for="basicinput">Hubungan Keluarga</label>
                                            <div class="controls">
                                            <?php
                                                $hubungan = $row->hubungan_keluarga;
                                            ?>
                                                : <select name="hubungankeluarga" required class="span8">
                                                    <option value="<?php echo $hubungan?>" selected><?php echo $hubungan?></option>
                                                    <option value="kepalakeluarga">Kepala Keluarga</option>
                                                    <option value="suami">Suami</option>
                                                    <option value="istri">Istri</option>
                                                    <option value="anak">Anak</option>
                                                    <option value="menantu">Menantu</option>
                                                    <option value="cucu">Cucu</option>
                                                    <option value="orangtua">Orang Tua</option>
                                                    <option value="mertua">Mertua</option>
                                                    <option value="pembantu">Pembantu</option>
                                                    <option value="lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Kewarganegaraan</label>
                                            <div class="controls">
                                                : <input type="text" name="txtkewarganegaraan" maxlength="255" required autofocus placeholder="Masukan Kewarganegaraan..." class="span8" value="<?php echo $row->kewarganegaraan?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama Ayah</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnamaayah" maxlength="255" required autofocus placeholder="Masukan Nama Ayah..." class="span8" value="<?php echo $row->nama_ayah?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama Ibu</label>
                                            <div class="controls">
                                                : <input type="text" name="txtnamaibu" maxlength="255" required autofocus placeholder="Masukan Nama Ibu..." class="span8" value="<?php echo $row->nama_ibu?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <a href="<?php echo base_url()?>Data_Penduduk/c_26_data_Penduduk/" class="tombolhapus" style="float: left;">Kembali</a>
                                            <div class="controls">
                                                <input type="submit" name="submit" onclick="return ubahdata()" maxlength="255" required autofocus class="tombolsimpanubah" value="Ubah Data">
                                            </div>
                                        </div>
                                        
                                    </form>
                                    <br>
                                    <?php
                                }
                                ?>
                            </div>
                            </div>
                        </div>
<script type="text/javascript">
    function simpan() {
        return confirm("Apakah anda benar akan menyimpan data ?");
    }
    function hapus() {
        return confirm("Apakah anda benar akan menghapus data ?");
    }
    function ubahdata() {
        return confirm("Apakah anda benar akan mengubah data ?");
    }

</script>