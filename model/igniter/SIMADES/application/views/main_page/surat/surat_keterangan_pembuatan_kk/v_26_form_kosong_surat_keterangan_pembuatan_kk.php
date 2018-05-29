
           
<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Data Penduduk Desa Pembuat Surat</h3>
            </div>
            <div class="module-body">
                
                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpanskpembuatankk" method="POST">
                <?php
                    
                    foreach ($ambilsuratberdasarkan as $rowsurat) {
                        foreach ($ambiljumlahsurat as $rowjumlah) {
                     
                ?>
                <input type="hidden" name="jumlah" value="<?php echo $rowjumlah->jumlah_keluar?>"></input>
                     <?php
                        }
                     ?>  
                <input type="hidden"  name="namasurat" value="<?php echo $rowsurat->nama_surat;?>"></input>
                <input type="hidden"  name="nomorsurat" value="<?php echo $rowsurat->nomor_surat;?>"></input>
                <div style="border-bottom: solid;">
                    <table width="100%">
                        <tr>
                            <td>
                                <h3 style="text-transform: capitalize;">Untuk Surat :    <?php echo $rowsurat->nama_surat;?></h3>
                                
                            </td>
                            <td style="text-align: right;">
                                <h3>Format No.Surat :    <?php echo $rowsurat->nomor_surat;?></h3>
                                
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
                <?php 
                    foreach ($ambilperangkatdesa as $rowperangkat) {
                    
                ?>
                <br>
                <fieldset>
                    <legend>Data yang bersangkutan</legend>
                <table width="100%">
                    <tr>
                        <td>
                        <p class="span2">Kecamatan </p>:   <input class="span4" type="text" name="namakecamatan" value="<?php echo $rowperangkat->nama_kecamatan; ?>" required></input><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">Kabupaten </p>:   <input class="span4"  type="text" name="namakabupaten" value="<?php echo $rowperangkat->nama_kabupaten; ?>" required></input>  <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">Desa </p>:   <input class="span4"  type="text" name="namadesa" value="<?php echo $rowperangkat->nama_desa; ?>" required></input>  <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">RT </p>:   <input class="span4"  type="number" name="rt" placeholder="Diisi RT yang bersangkutan .." required></input>  <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">RW </p>:   <input class="span4"  type="number" name="rw" placeholder="Diisi RW yang bersangkutan .." required></input>  <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">Nama</p>:   <input class="span4"  type="text" name="nama" placeholder="Diisi nama yang bersangkutan .." required></input> <br> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">Tempat Lahir</p>:   <input class="span4"  type="text" name="tmptlahir" placeholder="Diisi tempat lahir yang bersangkutan .." required></input> <br> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">Tanggal Lahir</p>:   <input class="span4"  type="date" name="tgllahir" placeholder="Diisi tanggal lahir yang bersangkutan .." required></input> <br> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">Jenis Kelamin</p>:   <select name="jk" required class="span4">
                                                    <option value="Laki - Laki" selected>Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select> <br> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">Alamat </p>:   <textarea name="alamat" class="span4" required placeholder="Diisi alamat yang bersangkutan .."></textarea>  <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">Agama </p>:   <select name="agama" required class="span4">
                                                    <option value="Islam" name="islam" selected="">Islam</option>
                                                    <option value="Protestan" name="protestan">Protestan</option>
                                                    <option value="Khatolik" name="khatolik">Khatolik</option>
                                                    <option value="Hindu" name="hindu">Hindu</option>
                                                    <option value="Buddha" name="buddha">Buddha</option>
                                                    <option value="Khonghucu" name="konghucu">Khonghucu</option>
                                                    <option value="Tidak Beragama" name="tidakberagama">Tidak Beragama</option>
                                                    <option value="Lainnya" name="lainnya">Lainnya</option>
                                                </select>    <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">Pekerjaan </p>:   <select name="pekerjaan" required class="span4">
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
                                                </select>  <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">Status Perkawinan</p>:   <select name="statusperkawinan" required class="span4">
                                                    <option value="Belum Menikah" selected="">Belum Menikah</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                                    <option value="Cerai Mati">Cerai Mati</option>
                                                </select> <br> 
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <p class="span2">Kewarganegaraan</p>:   <input class="span4"  type="text" name="kewarganegaraan" placeholder="Diisi Kewarganegaraan yang bersangkutan .." required></input> <br> 
                        </td>
                    </tr>
                </table>
                </fieldset>
                <legend></legend>
                <center>
                <input type="submit" name="buatsurat" value="Simpan Surat" class="tombolsimpanubah" onclick="return simpan()"></input><br>
                    
                </center>
                <?php
                    }
                ?>
                </form>
                
                <?php
                    
                }
                ?>
            </div>        
        </div>
    </div>
</div>
            </div>

<script type="text/javascript">
function simpan () {
return confirm('Apakah data ini benar ?');
}
</script>