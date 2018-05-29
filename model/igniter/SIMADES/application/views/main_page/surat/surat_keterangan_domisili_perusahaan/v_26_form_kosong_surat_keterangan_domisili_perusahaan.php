
           
<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Data Penduduk Desa Pembuat Surat</h3>
            </div>
            <div class="module-body">
                
                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpanskdomisiliperusahaan" method="POST">
                <?php
                    
                    foreach ($ambilsuratberdasarkan as $rowsurat) {
                     
                foreach ($ambiljumlahsurat as $rowjumlah) {
                     
                ?>
                <input type="hidden" name="jumlah" value="<?php echo $rowjumlah->jumlah_keluar?>"></input>
                     <?php
                        }
                     ?>  
                <input type="hidden" name="namasurat" value="<?php echo $rowsurat->nama_surat?>"></input>
                <input type="hidden" name="nomorsurat" value="<?php echo $rowsurat->nomor_surat?>"></input>
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
                </div><br>
                <?php
                    foreach ($ambilperangkatdesa as $rowperangkat) {
                    
                ?>
                <fieldset>
                    <legend>Data Yang Berdomisili Perusahaan</legend>
                <table width="100%">
                    <tr>
                    <td>
                    <p class="span2">Kecamatan </p>:   <input class="span4" required type="text" name="namakecamatan" value="<?php echo $rowperangkat->nama_kecamatan; ?>" ></input><br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">Kabupaten </p>:   <input class="span4" required  type="text" name="namakabupaten" value="<?php echo $rowperangkat->nama_kabupaten; ?>" ></input>  <br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">Desa </p>:   <input class="span4" required  type="text" name="namadesa" value="<?php echo $rowperangkat->nama_desa; ?>" ></input>  <br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">RT </p>:   <input class="span4" required  type="number" name="rt" placeholder="Masukan RT yang bersangkutan .." ></input>  <br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">RW </p>:   <input class="span4" required  type="number" name="rw" placeholder="Masukan RW yang bersangkutan .." ></input>  <br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">No KTP </p>:   <input class="span4" required  type="text" name="nonik" placeholder="Masukan nomor KTP yang berdomisili perusahaan .."></input>  <br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">Nama </p>:   <input class="span4"  type="text" name="nama"  required placeholder="Diisi nama pemilik perusahaan yang akan berdomisili .."></input> <br> 
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">Tempat Lahir </p>:   <input class="span4"  type="text" name="tmptlahir" required placeholder="Diisi tempat lahir yang bersangkutan .."></input> <br> 
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">Tanggal Lahir </p>:   <input class="span4"  type="date" name="tgllahir"  required placeholder="Diisi Tanggal Lahir yang bersangkutan .."></input> <br> 
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">Jenis Kelamin </p>:   <select name="jk" required class="span4">
                                                    <option value="Laki - Laki" selected>Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>  <br>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">Alamat </p>:   <textarea class="span4" name="alamat" placeholder="Diisi alamat pemilik perusahaan .." required></textarea>  <br>
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
                                                </select>     <br>
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
                    <p class="span2">Status Pernikahan </p>:   <select name="statuspernikahan" required class="span4">
                                                    <option value="Belum Menikah" selected="">Belum Menikah</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                                    <option value="Cerai Mati">Cerai Mati</option>
                                                </select>  <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="span2">Kewarganegaraan </p>:   <input  class="span4" type="text" name="kewarganegaraan" required placeholder="Diisi Kewarganegaraan pemilik perusahaan .." ></input>  <br>
                    </td>
                </tr>
                </table>
                </fieldset>
                <fieldset>
                    <legend>Data Perusahan </legend>
                <table width="100%">
                <tr>
                    <td>
                    <br>  
                    <p class="span2">Jabatan </p>:   <select name="jabatan" required class="span4">
                        <option value="Direktur" selected>Direktur</option>
                        <option value="Kepala Bagian">Kepala Bagian</option>
                        <option value="Kepala Urusan">Kepala Urusan</option>
                        <option value="Sekretaris">Sekretaris</option>
                        <option value="Bendaharan">Bendahara</option>
                        <option value="Asisten">Asisten</option>
                        <option value="Staff">Staff</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    <br>  
                    <p class="span2">Nama Perusahaan </p>:   <input  class="span4" required placeholder="Diisi nama perusahaan yang akan berdomisili .." type="text" name="namaperusahaan">
                    </td>
                </tr>
                <tr>
                    <td>  
                    <p class="span2">Alamat Perusahaan </p>:   <textarea name="alamatperusahaan" required placeholder="Diisi alamat perusahaan .." class="span4"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>  
                    <p class="span2">Nomor Telepon </p>:   <input  class="span4" maxlength="13" required placeholder="Diisi nomor telepon perusahaan .." type="text" name="nomortelepon">
                    </td>
                </tr>
                <tr>
                    <td>  
                    <p class="span2">Bergerak dalam bidang </p>:   <select name="jenisusaha" class="span4" required>
                        <option value="Badan Usaha Agraris">Badan Usaha Agraris</option>
                        <option value="Badan Usaha Perdagangan">Badan Usaha Perdagangan</option>
                        <option value="Badan Usaha Industri">Badan Usaha Industri</option>
                        <option value="Badan Usaha Ekstraktif">Badan Usaha Ekstraktif</option>
                        <option value="Badan Usaha Jasa">Badan Usaha Barang dan Jasa</option> 
                    </select>
                    </td>
                </tr>
                </table>
                <fieldset>
                    <legend>Akta Pendirian</legend>
                <table width="100%">
                <tr>
                    <td>
                    <p class="span2">Notaris </p>:   <input required placeholder="Diisi notaris akta pendirian dari perusahaan" class="span4" type="text" name="notarispendirian">
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">Nomor </p>:   <input required placeholder="Diisi nomor akta pendirian dari perusahaan" class="span4" type="text" name="nomorpendirian">  
                    </td>
                </tr>
                <tr>
                    <td>
                    <p class="span2">Tanggal </p>:   <input required placeholder="Diisi tanggal akta pendirian dari perusahaan" class="span4" type="date" name="tanggalpendirian">
                    </td>
                </tr>
                </table>
                <legend></legend>
                </fieldset>
                <br><br>
                <table width="100%">
                <tr>
                    <td>  
                    <p class="span2">Jam Kerja </p>:   <input  type="time" class="span2" required placeholder="Diisi jumlah jam kerja pada perusahaan .." class="span2" name="jamkerja"> s/d <input  type="time" class="span2" required placeholder="Diisi jumlah jam kerja pada perusahaan .." class="span2" name="jamkerjasampai"> Jam
                    </td>
                </tr>
                <tr>
                    <td>  
                    <p class="span2">Jumlah Karyawan </p>:   <input required id="jumlah" onkeyup="terbilang(this.value)" placeholder="Diisi jumlah karyawan pada perusahaan tersebut" class="span4" type="number" name="jumlahkaryawan">
                    <?php 

                        echo "<input type='hidden' name='bilang' id='bilang'>"; 
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>  
                    <p class="span2">Luas Tanah / m2 </p>:   <input required placeholder="Diisi jumlah luas tanah yang digunakan usaha .." class="span4" type="number" name="luastanah">
                    </td>
                </tr>
                <tr>
                    <td>  
                    <p class="span2">Luas Bangunan / m2 </p>:   <input required placeholder="Diisi jumlah luas bangunan yang digunakan usaha .." class="span4" type="number" name="luasbangunan">
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>  
                    <p class="span2">Berlaku sampai dengan </p>:   <input placeholder="Diisi jumlah luas bangunan yang digunakan usaha .." class="span4" type="date" name="berlaku">
                    </td>
                </tr>
                </table>
                </fieldset>
                <br>
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

<!-- Modal -->
<div class="modal fade" id="modalTambah" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" onclick="refresh()" class="close" data-dismiss="modal" > &times; </button>
<h4 class="modal-title">ambil data</h4>
</div>
<div class="modal-body">
<form action="" method="POST" >
      <div class="control-group" id="wilayahCekRekening">
          <label class="control-label" for="basicinput">Data Perusahaan</label>
          <div class="controls">
              <input type="text" name="txtNorek" id="cek" value="" class="span4">
              <input type="text" name="txtKorek"  value="" class="span4" >
          </div>
      </div>

      
  <div class="modal-footer">
</form>
<button onclick="tambah()" name="tombolTambah" class="btn btn-default" data-dismiss="modal">Tambah</button>
</div>
</div>
</div>

</div>
</div>



<script>
function simpan () {
         return confirm('Apakah data ini benar ?');
    }
function tambah() {
var ambil= document.getElementById('cek').value;
document.getElementById('namacalonlakilaki').value = ambil; 
}
</script>
<script>
$(document).on("click", "#cmdtambah", function () {
$("#modalTambah").modal({backdrop: "static"});
});
</script>
<script type="text/javascript">
function cek (str) {
var x = document.getElementById("jumlah").value;
document.getElementById("bilang").value = x;
}
function konversi(str){

var x = Math.abs(str);
var angka = ["","satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
var temp = "";

if(x < 12){
temp = " "+angka[x];
}else if(x<20){
temp = konversi(x-10)+" belas";
}else if(x<100){
temp = konversi(x/10)+" puluh"+konversi(x%10);
}else if(x<200){
temp = " seratus"+konversi(x-100);
}else if(x<1000){
temp = konversi(x/100)+" ratus"+konversi(x%100);   
}else if(x<2000){
temp = " seribu"+konversi(x-1000);
}else if(x<1000000){
temp = konversi(x/1000)+" ribu"+konversi(x%1000);   
}else if(x<1000000000){
temp = konversi(x/1000000)+" juta"+konversi(x%1000000);
}else if(x<1000000000000){
temp = konversi(x/1000000000)+" milyar"+konversi(x%1000000000);
}
return temp;
}
function tkoma(M){
var str = M.indexOf(",");
var ex = M.split(',');

if((ex[1]/10) >= 1){
var a = Math.abs(ex[1]);
}
var string = ["nol", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan",   "sembilan","sepuluh", "sebelas"];
var temp = "";

var a2 = ex[1]/10;
var pjg = str.lenght;
var i =1;


if(a>=1 && a< 12){   
temp += " "+string[a];
}else if(a>12 && a < 20){   
temp += konversi(a - 10)+" belas";
}else if (a>20 && a<100){   
temp += konversi(a / 10)+" puluh"+ konversi(a % 10);
}else{
if(a2<1){

while (i<pjg){     
var char = str.substr(i,1);     
i++;
temp += " "+string[char];
}
}
}  
return temp;
}
//  function terbilang($x){
//   if($x<0){
//    $hasil = "minus ".trim(konversi(x));
//   }else{
//    $poin = trim(tkoma($x));
//    $hasil = trim(konversi($x));
//   }

// if($poin){
//    $hasil = $hasil." koma ".$poin;
//   }else{
//    $hasil = $hasil;
//   }
//   return $hasil;  
//  }
function terbilang(x){
var hasil = "";
if(x<0){
hasil = "minus "+konversi(x).trim();
}else{
var poin = tkoma(x).trim();
hasil = konversi(x).trim();
}

if(poin){
hasil = hasil+" koma "+poin;
}else{
hasil = hasil;
}
document.getElementById("bilang").value = hasil;
}
</script>
<?php   
// function konversi($x){

//   $x = abs($x);
//   $angka = array ("","satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
//   $temp = "";

//   if($x < 12){
//    $temp = " ".$angka[$x];
//   }else if($x<20){
//    $temp = konversi($x - 10)." belas";
//   }else if ($x<100){
//    $temp = konversi($x/10)." puluh". konversi($x%10);
//   }else if($x<200){
//    $temp = " seratus".konversi($x-100);
//   }else if($x<1000){
//    $temp = konversi($x/100)." ratus".konversi($x%100);   
//   }else if($x<2000){
//    $temp = " seribu".konversi($x-1000);
//   }else if($x<1000000){
//    $temp = konversi($x/1000)." ribu".konversi($x%1000);   
//   }else if($x<1000000000){
//    $temp = konversi($x/1000000)." juta".konversi($x%1000000);
//   }else if($x<1000000000000){
//    $temp = konversi($x/1000000000)." milyar".konversi($x%1000000000);
//   }

//   return $temp;
//  }

//  function terbilang($x){
//   if($x<0){
//    $hasil = "minus ".trim(konversi($x));
//   }else{
//    $poin = '';
//    $hasil = trim(konversi($x));
//   }

// if($poin){
//    $hasil = $hasil." koma ".$poin;
//   }else{
//    $hasil = $hasil;
//   }
//   return $hasil;  
//  }
?>