<script>
  function hitungJumlah(str) {

     var angka = document.getElementById('angka'+str).value;
     var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            // document.getElementById("jumlah").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url()?>c_23_index/tampilAnggaran/"+angka+"?id="+ str,true);
      xmlhttp.send();
      location.reload();
  }

  function hitungJumlahPoin2(str) {

     var angka = document.getElementById('angka'+str).value;
     var hidden = document.getElementById('idHidden').value;
     // console.log(hidden);
     // console.log(angka);
     var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            // document.getElementById("jumlah2").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url()?>c_23_index/tampilAnggaranPoin2/"+angka+"/"+str+"?id="+ hidden,true);
      xmlhttp.send();
      // location.reload();
  }
</script>

                    <div class="span9">
                        <div class="content">
                            <center>
                            <div class="span9">

                            <?php
                             $row = $ambildata[0];
                            ?>

                            <table border="0">
                                <tr>
                                    <td rowspan="6" width="12%">
                                        
                                        <img src="<?php echo base_url().$row->logo_desa?>" width="100px" height="100px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <center>
                                            <h3 style="text-transform:uppercase;">Pemerintah Kabupaten <?php echo "$row->nama_kabupaten";?>
                                            <br>Kecamatan <?php echo "$row->nama_kecamatan";?>
                                            <br><b>Desa <?php echo "$row->nama_desa";?></b></h3>
                                        </center>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <center>
                                            <h5 style="padding-top: 10px;padding-right: 5px;padding-left: 5px"><?php echo "$row->alamat_desa";?></h5><br>
                                        </center>
                                    </td>
                                </tr>
                            </table>
                            <hr style="border-color: black">
                            <?php
                                 $rowapbdes= $ambilrapbdes[0];
                            ?>
                                <div class="content">
                                    <table align="right" border="0">
                                        <tr>
                                            <td style="padding-right: 10px">Nomor</td>
                                            <td style="padding-right: 10px">:</td>
                                            <td style="padding-right: 50px"><?php echo "$rowapbdes->nomor_perdes";?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-right: 10px">Tahun</td>
                                            <td style="padding-right: 10px">:</td>
                                            <td style="padding-right: 50px"><?php echo "$rowapbdes->tahun";?></td>
                                        </tr>
                                        <tr>
                                            <td style="padding-right: 10px">Tentang</td>
                                            <td style="padding-right: 10px">:</td>
                                            <td style="padding-right: 10px">Anggaran Pendapatan dan Belanda Desa</td>
                                        </tr>
                                    </table>
                                    <br><br>
                                    <br><br>
                                    <br><br>
                                </div>
                                <div class="content">
                                    <table>
                                        <tr>
                                            <td>
                                                <center>
                                                    <h3><b>RENCANA ANGGARAN PENDAPATAN DAN BELANJA DESA</b></h3>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                    <h3>
                                                        <b>TAHUN ANGGARAN <?php echo "$rowapbdes->tahun";?>  (<?php echo "$rowapbdes->status";?>)</b>
                                                        <a href="<?php echo base_url() ?>c_23_index/submitRAPBDes" class="btn btn-access">Minta Pertsetujuan Kepala Desa</a>
                                                    </h3>

                                                </center>
                                                <div class="module-body table">
                                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align:center" colspan="4">Kode Rekening</th>
                                                                <th style="text-align:center" >Uraian</th>
                                                                <th style="text-align:center" >Input</th>
                                                                <th colspan="2" style="text-align:center">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody width="100%">
                                                                    <?php
                                                                    $R = 1;
                                                                     foreach ($ambilRekening as $row) {
                                                                        $jumlahAnggaran = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekening($row->k1);
                                                                        $angkaPertama = substr($row->nomor_rekening, 0, 1);
                                                                        $angkaKedua = substr($row->nomor_rekening, 0, 3);
                                                                        // var_dump($jumlahAnggaran[0]->anggaran);
                                                                        // exit();
                                                                        echo 
                                                                            "
                                                                            <tr>
                                                                                <td>".$row->k1."</td>
                                                                                <td>".$row->k2."</td>
                                                                                <td>".$row->k3."</td>
                                                                                <td>".$row->k4."</td>
                                                                                <td>".$row->uraian."</td>";

                                                                                // kondisi kapan textbox anggaran harus muncul
                                                                                if ($row->k3 != 0 && $row->k1 != 2) {
                                                                                    if ($row->anggaran != 0 ) {
                                                                                        ?>
                                                                                            <td> 
                                                                                                <input type="number" id="angka<?php echo $row->nomor_rekening ?>" onfocusout="hitungJumlah('<?php echo $row->nomor_rekening ?>')" value="<?php echo $row->anggaran ?>"> 
                                                                                            </td>
                                                                                          <?php  
                                                                                    }else{
                                                                                        ?>
                                                                                            <td> 
                                                                                                <input type="number" id="angka<?php echo $row->nomor_rekening ?>" onfocusout="hitungJumlah('<?php echo $row->nomor_rekening ?>')"> 
                                                                                            </td>
                                                                                            
                                                                                          <?php  
                                                                                    }// tutup else $row->anggaran != 0
                                                                                }else{
                                                                                    $jumlahAnggaranAngkaPertama = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekening($angkaPertama);
                                                                                    $jumlahAnggaranAngkaKedua = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekening($angkaKedua);
                                                                                        ?>
                                                                                        <td>
                                                                                            <p id="jumlah">
                                                                                                <?php
                                                                                                    echo $jumlahAnggaranAngkaKedua[0]->anggaran;
                                                                                                ?>
                                                                                            </p>
                                                                                        </td>
                                                                                        <?php
                                                                                    
                                                                                }
                                                                                ?>

                                                                                <td></td>
                                                                                <td>
                                                                                <?php
                                                                                if ($row->k1 == 2) {
                                                                                    ?>
                                                                                        <a method="POST" name="cmdPost" value="kresna" class="btn btn-primary" data-toggle="modal" data-id="<?php echo $row->nomor_rekening ?>" data-author="aji"  id="cmdTambah" style="width: 100%;">Tambah Item</a>
                                                                                    <?php
                                                                                }

                                                                                /*
                                                                                ===============
                                                                                    POIN 2
                                                                                ===============
                                                                                */


                                                                        // kondisi (true) jika ada itemnya
                                                                        $lihat = $this->m_23_rekening->ambilDataItemRekeningBerdasarkan($row->nomor_rekening);
                                                                        // var_dump($lihat);
                                                                        $hitung = $this->m_23_rekening->hitungDataItemRekeningBerdasarkan($row->nomor_rekening);
                                                                        if ($hitung > 0) {
                                                                            foreach ($lihat as $key ) {
                                                                                $angkaPertamaPoin2 = substr($row->nomor_rekening, 0, 1);
                                                                                $angkaKeduaPoin2 = substr($row->nomor_rekening, 0, 3);
                                                                                echo
                                                                                    "
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td>-</td>
                                                                                        <td>".$key->uraian."</td>";

                                                                                         // kondisi kapan textbox anggaran harus muncul
                                                                                    if ($key->anggaran != 0 ) {
                                                                                        ?>
                                                                                            <td> 
                                                                                                <input type="number" id="angka<?php echo $key->id_item ?>" onfocusout="hitungJumlahPoin2('<?php echo $key->id_item ?>')" value="<?php echo $key->anggaran ?>"> 
                                                                                                <input type="hidden" id="idHidden" value="<?php echo $key->nomor_rekening ?>">
                                                                                            </td>
                                                                                          <?php  
                                                                                    }else{
                                                                                        ?>
                                                                                            <td> 
                                                                                                <input type="hidden" id="idHidden" value="<?php echo $key->nomor_rekening ?>">
                                                                                                <input type="number" id="angka<?php echo $key->id_item ?>" onfocusout="hitungJumlahPoin2('<?php echo $key->id_item ?>')"> 
                                                                                            </td>
                                                                                          <?php  
                                                                                    }
                                                                                    $jumlahAnggaranAngkaPertamaPoin2 = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekeningPoin2($angkaPertama);
                                                                                    $jumlahAnggaranAngkaKeduaPoin2 = $this->m_23_rekening->ambilSumAnggaranBerdasarkanRekeningPoin2($angkaKedua);
                                                                                    if ($angkaKedua == 0) {
                                                                                        ?>
                                                                                        <td>
                                                                                            <p id="jumlahPoin2">
                                                                                                <?php
                                                                                                    echo $jumlahAnggaranAngkaPertamaPoin2[0]->anggaran;
                                                                                                ?>
                                                                                            </p>
                                                                                        </td>
                                                                                        <?php
                                                                                    }else{
                                                                                    }// tutup elsenya if $angkaKedua == 0

                                                                                        echo "<td>";
                                                                                        ?>
                                                                                            <a data-id="<?php echo $key->id_item ?>" id="cmdUBah"  class="btn btn-success" style="width: 100%; margin:2% 0">Ubah</a>
                                                                                            <a onclick="return hapus()" href="<?php echo base_url() ?>c_23_index/hapusItemRekeningTabel?id=<?php echo $key->id_item ?>" class="btn btn-danger" style="width: 100%";>Hapus</a>

                                                                                        </td>
                                                                                        <td>
                                                                                        <?php
                                                                            }// foreach key
                                                                        }// if hitung >0
                                                                        echo 
                                                                            "
                                                                            </td>
                                                                            </tr>";
                                                                        include('RAPBDes/include/tambahModal.php');
                                                                        include('RAPBDes/include/ubahModal.php');
                                                                        
                                                                        $R++;
                                                                    }   
                                                                    ?>                                          
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th style="text-align:center" colspan="4">Kode Rekening</th>
                                                                <th style="text-align:center" >Uraian</th>
                                                                <th style="text-align:center" >Input</th>
                                                                <th colspan="2" style="text-align:center">Aksi</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            </center>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->

        <script type="text/javascript">
          function hapus () {
            return confirm("Anda yakin akan menghapus data ?");
          }
          function ubah () {
            return confirm("Anda yakin akan mengubah data ?");
          }
          function simpan () {
            return confirm("Anda yakin akan menyimpan data ?");
          }
        </script>       