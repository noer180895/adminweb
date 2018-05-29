
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data Penduduk Desa Pembuat Surat</h3>
                            </div>
                            <div class="module-body">
                                
                                   

                                  <?php
                                  foreach ($ambildatapendudukberdasarkan as $row) {
                                  ?>
                                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpanskdomisiliperusahaan" method="POST">
                                <?php
                                    
                                    foreach ($ambilsuratberdasarkan as $rowsurat) {
                                     
                                foreach ($ambiljumlahsurat as $rowjumlah) {
                                     
                                ?>
                                <input type="hidden" name="jumlah" value="<?php echo $rowjumlah->jumlah_keluar?>"></input>
                                     <?php
                                        }
                                     ?>  
                                <input type="hidden" name="nokk" value="<?php echo $row->no_kk?>"></input>
                                <input type="hidden" name="nonik" value="<?php echo $row->no_NIK?>"></input>
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
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <table width="100%" border="0">
                                            <tr>
                                                <td>
                                                <p class="span2">Kecamatan </p>:   <input class="span2" type="text" name="namakecamatan" value="<?php echo $row->nama_kecamatan; ?>" readonly></input><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Kabupaten </p>:   <input class="span2"  type="text" name="namakabupaten" value="<?php echo $row->nama_kabupaten; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Desa </p>:   <input class="span2"  type="text" name="namadesa" value="<?php echo $row->nama_desa; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">RT </p>:   <input class="span2"  type="text" name="rt" value="<?php echo $row->RT; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">RW </p>:   <input class="span2"  type="text" name="rw" value="<?php echo $row->RW; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">No KTP </p>:   <input class="span2"  type="text" name="nonik" value="<?php echo $row->no_NIK; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table width="100%">
                                            <tr>
                                                <td>
                                                <p class="span2">Nama </p>:   <input class="span2"  type="text" name="nama" value="<?php echo $row->nama; ?>" readonly></input> <br> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Tempat Lahir </p>:   <input class="span2"  type="text" name="tmptlahir" value="<?php echo $row->tempat_lahir; ?>" readonly></input> <br> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Tanggal Lahir </p>:   <input class="span2"  type="text" name="tgllahir" value="<?php echo $row->tanggal_lahir; ?>" readonly></input> <br> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Jenis Kelamin </p>:   <input  class="span2" type="text" name="jk" value="<?php echo $row->jenis_kelamin; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Alamat </p>:   <input  class="span2" type="text" name="alamat" value="<?php echo $row->Alamat; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Agama </p>:   <input class="span2"  type="text" name="agama" value="<?php echo $row->agama; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Pekerjaan </p>:   <input  class="span2" type="text" name="pekerjaan" value="<?php echo $row->pekerjaan; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Status Pernikahan </p>:   <input  class="span2" type="text" name="statuspernikahan" value="<?php echo $row->status_perkawinan; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="span2">Kewarganegaraan </p>:   <input  class="span2" type="text" name="kewarganegaraan" value="<?php echo $row->kewarganegaraan; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
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
                                <input type="submit" name="buatsurat" value="Simpan Surat" class="tombolsimpanubah"></input><br>
                                    
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