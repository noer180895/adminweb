<?php
    $dataWhere = array(
        'tahun' => $_SESSION['tahunApbdes'] , 
        'kegiatan' => $kegiatan , 
        );
    $SPP = $this->m_23_SPP->selectWhere($dataWhere);
    if (isset($SPP[0])) {
        $SPP = $SPP[0];
    }
?>

<script type="text/javascript">
    function sebelumSimpan() {
        
        var pagu = document.getElementById('inputPaguAnggaran').value;
        var permintaan_sekarang = document.getElementById('inputPermintaanSekarang').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                document.getElementById("cek").value = xmlhttp.responseText;
            }
          };
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/cekSPP/"+pagu+"/"+permintaan_sekarang,true);
        xmlhttp.send();
        return kresna();
    }

    function kresna() {
        if (document.getElementById("cek") != null) {
            console.log(document.getElementById("cek").value);
            var checking = document.getElementById("cek").value;
            if (checking < 0) {
                alert('Permintaan melebihi Pagu anggaran, Permintaan ditolak !');
                return false;
                clearTimeout();
            }else if(checking == ""){
                setTimeout(kresna, 1000);
                return false;
            }else{
                clearTimeout();
                return true;
            }
        }
    }
    function harga(r) {
        var harga = document.getElementById('harga'+r).value;
        var anggaran = document.getElementById('txtAnggaran'+r).innerHTML;
        var volume = document.getElementById('volume'+r).value;
        var hitung;
        hitung = anggaran / volume;

        if (volume == 0 || volume == null) {
        }else{
            if (hitung > anggaran) {
                alert('Harga tidak boleh melebihi anggaran');
                location.reload();
            }else if(hitung < 100){
                alert('Harga tidak boleh kurang dari 100');
                location.reload();
            }else{
                document.getElementById('harga'+r).value = hitung;
                
                /*
                =====================
                    PENYIMPANAN
                =====================
                */
                var idRekening = document.getElementById('idRekening'+r).value;
                var nomor_rekening = document.getElementById('nomor_rekening').value;
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        // document.getElementById("jumlah").innerHTML = xmlhttp.responseText;
                    }
                  };
                xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateRAB/"+nomor_rekening+"/"+hitung+"/"+volume+"?uraian="+ idRekening,true);
                xmlhttp.send();
            
                /*
                =====================
                    #PENYIMPANAN#
                =====================
                */
            } //  #else hitung > anggaran
        }// #else volume == 0 ..
    }

    function waktuPelaksanaan(r) {
        var kegiatan = document.getElementById('inputKegiatan').innerHTML;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                // document.getElementById("jumlah").innerHTML = xmlhttp.responseText;
            }
          };
        console.log(r);
        console.log(kegiatan);
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateSPP/"+r+"?kegiatan="+ kegiatan,true);
        xmlhttp.send();
        // location.reload();
    }
    function pelaksanaKegiatan(r) {
        var id = document.getElementById('inputId').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                // document.getElementById("jumlah").innerHTML = xmlhttp.responseText;
            }
          };
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateSPP/"+id+"?pelaksanaKegiatan="+ r,true);
        xmlhttp.send();
        // location.reload();
    }
    function tanggalChange(r) {
        var kegiatan = document.getElementById('inputKegiatan').innerHTML;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                // document.getElementById("jumlah").innerHTML = xmlhttp.responseText;
            }
          };
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateSPP/"+kegiatan+"?tanggal="+ r,true);
        xmlhttp.send();
        // location.reload();
    }
</script>
<input type="hidden" id="cek">
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Surat Permintaan Pembayaran </h3>
                                <div style="margin: 1% 0 0 0">
                                    <a class="btn btn-default" href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/pdfSPP">Export PDF</a>
                                </div>
                            </div>
                            <div class="module-body">
                                <form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/simpanSPP"  method="POST">
                                    <table>
                                        <tr>
                                            <td>Bidang</td>
                                            <td>: <?php echo $bidang ?></td>
                                        </tr>

                                        <tr>
                                            <td>Kegiatan</td>
                                            <td>: <a style="text-decoration: none;color: #777" id="inputKegiatan"><?php echo $kegiatan ?></a> </td>
                                        </tr>
                                        <tr>
                                            <td>Waktu Pelaksanaan</td>
                                            <td>:
                                                <?php
                                                    if (isset($SPP->waktu_pelaksanaan)) {
                                                        ?>
                                                            <input type="text" name="txtWaktuPelaksanaan" onfocusout="waktuPelaksanaan(this.value)" id="inputWaktuPelaksanaan" value="<?php echo $SPP->waktu_pelaksanaan ?>">
                                                        <?php
                                                    }else{
                                                        ?>
                                                            <input type="text" name="txtWaktuPelaksanaan" onfocusout="waktuPelaksanaan(this.value)" placeholder="Cth : 30 Hari" id="inputWaktuPelaksanaan">
                                                        <?php
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rincian Pelaksanaan</td>
                                            <td>:</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </table>
                                        <br>
                                    
                                    <table border="0" class="datatable-1 table table-bordered table-striped display">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Uraian</th>
                                                <th>Pagu Anggaran</th>
                                                <th>Pencarian S.D yang lalu</th>
                                                <th>Permintaan Sekarang</th>
                                                <th>Jumlah Sampai Saat Ini</th>
                                                <th>Sisa Dana</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <!--  <tr>
                                                <td>1</td>
                                                <td>ini belum dinamis</td>
                                                <td>600</td>
                                                <td>0</td>
                                                <td>200</td>
                                                <td>200</td>
                                                <td>400</td>
                                                <td></td>
                                            </tr> -->
                                            <?php

                                            $no = 1;
                                            $no2 = 2;
                                            // var_dump($item);
                                            foreach ($item as $row ) {
                                                echo 
                                                    "
                                                        <tr>
                                                            <td>".$no."</td>
                                                            <td>".$row->uraian."</td>
                                                            <td>".$row->pagu_anggaran."</td>
                                                            <td>".$row->pencairan."</td>
                                                            <td>".$row->permintaan_sekarang."</td>
                                                            <td>".$row->jumlah_sampai_saat_ini."</td>
                                                            <td>".$row->sisa_dana."</td>
                                                         ";
                                                                $dataAkhir = $this->m_23_SPP->selectDesc();
                                                                if ($row->id == $dataAkhir[0]->id) {
                                                                    echo 
                                                                                // <a data-toggle='modal' data-id=' $row->id ' id='tombolUbah' class='btn btn-default' style='width:60%;margin: 0 0 5px 0'> Ubah </a>
                                                                        "
                                                                        <td>        
                                                                            <a href ='".base_url()."APBDes/c_23_generateAPBDes/hapusKasSPP?id=".$row->id."' id='tombol' class='btn btn-default' style='width:60%;margin: 0 0 0 0'> Hapus </a>
                                                                        </td>
                                                        </tr>
                                                                        ";
                                                                }else{
                                                                    echo "<td></td> 
                                                        </tr>";
                                                                }
                                                    $no++;
                                            }
                                            ?>
                                            <tr>
                                                    <td></td>
                                                    <td><input type="text" name="txtUraian" id="inputUraian" ></td>
                                                    <td>
                                                        <?php
                                                            if (isset($SPP->pagu_anggaran)) {
                                                                ?>
                                                                    <input type="number" readonly name="txtPaguAnggaran" id="inputPaguAnggaran" value="<?php echo $SPP->pagu_anggaran ?>">
                                                                <?php
                                                            }else{
                                                                ?>
                                                                    <input type="number" name="txtPaguAnggaran" id="inputPaguAnggaran" >
                                                                <?php
                                                            }
                                                        ?>
                                                    </td>
                                                    <td></td>
                                                    <td><input type="number" name="txtPermintaanSekarang" id="inputPermintaanSekarang" ></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><input type="submit" onclick="return sebelumSimpan()" value="Simpan" class="btn btn-default" style="width: 100%"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="bawah" style="height: 200px">
                                        <table width="100%">
                                            <tbody><tr>
                                                <td width="50%">
                                                   <table style="text-align: center;margin-top: 25px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-transform: capitalize;">
                                                                    Telah dilaksanakan verifikasi
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sekertaris Desa</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-transform: uppercase;padding-top: 50px">
                                                                    <?php
                                                                        echo $perdes[0]->nama_sekretaris_desa;
                                                                    ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td width="50%" style="float:right">
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tbody>
                                                                <tr>
                                                                    <td style="text-transform: capitalize;">
                                                                        <?php 
                                                                            echo $_SESSION['namaKabupaten'];
                                                                            if (isset($SPP->tanggal_ttd)) {
                                                                                ?>
                                                                                    ,<input type="date" value="<?php echo $SPP->tanggal_ttd?>" name="txtWaktuPelaksanaan" onfocusout ="tanggalChange(this.value)">
                                                                                <?php
                                                                            }else{
                                                                                ?>
                                                                                    <input type="date" name="txtWaktuPelaksanaan" onfocusout ="tanggalChange(this.value)">
                                                                                <?php
                                                                            }
                                                                    ?>  
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pelaksana Kegiatan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-transform: uppercase;padding-top: 50px">
                                                                        <?php
                                                                            if (isset($SPP->id)) {
                                                                                ?>
                                                                                    <input type="hidden" value="<?php echo $SPP->id?>" id="inputId" >   
                                                                                <?php
                                                                            }
                                                                            if (isset($SPP->pelaksana_kegiatan)) {
                                                                                ?>
                                                                                    <input type="text" style="text-align: center;text-transform: uppercase;" value="<?php echo $SPP->pelaksana_kegiatan?>" onfocusout ="pelaksanaKegiatan(this.value)">
                                                                                <?php
                                                                            }else{
                                                                                ?>
                                                                                    <input type="text" onfocusout ="pelaksanaKegiatan(this.value)">
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- #bawah -->

                                    <div class="bawah" style="height: 200px">
                                        <table width="100%">
                                            <tbody><tr>
                                                <td width="50%">
                                                   <table style="text-align: center;margin-top: 25px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-transform: capitalize;">
                                                                    Disetujui untuk dibayarkan     
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kepala Desa</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-transform: uppercase;padding-top: 50px">
                                                                    <?php echo $_SESSION['namaKepalaDesa'] ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                                <td width="50%" style="float:right">
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tbody>
                                                                <tr>
                                                                    <td style="text-transform: capitalize;">
                                                                        Telah dibayar lunas
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Bendahara</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-transform: uppercase;padding-top: 50px">
                                                                        <?php
                                                                            echo $perdes[0]->nama_bendahara_desa;  
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- #bawah -->
                                </form>
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
<script type="text/javascript">
    function simpan() {
        return confirm("Apakah anda benar akan menyimpan data ?");
    }


</script>