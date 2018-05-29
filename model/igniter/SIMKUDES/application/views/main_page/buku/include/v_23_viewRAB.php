<?php
// var_dump($itemRekening[0]->uraian);
// exit();
    $dataWhere =  array(
        'nomor_rekening' => $itemRekening[0]->nomor_rekening , 
        'tahun' => $_SESSION['tahunApbdes'],
        );
    $selectWhere = $this->m_23_RAB->selectWhereRAB($dataWhere);
    $rab = $selectWhere[0];
?>

<script type="text/javascript">
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
        var nomor_rekening = document.getElementById('nomor_rekening').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                // document.getElementById("jumlah").innerHTML = xmlhttp.responseText;
            }
          };
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateRAB/"+nomor_rekening+"?waktuPelaksanaan="+ r,true);
        xmlhttp.send();
        // location.reload();
    }
    function PelaksanaKegiatan(r) {
        var nomor_rekening = document.getElementById('nomor_rekening').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                // document.getElementById("jumlah").innerHTML = xmlhttp.responseText;
            }
          };
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateRAB/"+nomor_rekening+"?pelaksanaKegiatan="+ r,true);
        xmlhttp.send();
        // location.reload();
    }
    function tanggalChange(r) {
        var nomor_rekening = document.getElementById('nomor_rekening').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                // document.getElementById("jumlah").innerHTML = xmlhttp.responseText;
            }
          };
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateRAB/"+nomor_rekening+"?tanggal="+ r,true);
        xmlhttp.send();
        // location.reload();
    }
</script>

                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>RENCANA ANGGARAN BIAYA ( R A B )</h3>
                                <div style="margin: 1% 0 0 0">
                                    <a class="btn btn-default" href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/pdfRAB">Export PDF</a>
                                </div>
                            </div>
                            <div class="module-body">
                                <div class="alert">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Peringatan!</strong> Untuk menyimpan data anda hanya perlu menginputkan data dan tidak perlu menekan tombol safe, karena data sudah otomatis tersimpan.
                                </div>
                                <form>
                                    <table>
                                        <tr>
                                            <td>Bidang</td>
                                            <td>: <?php echo $bidang ?></td>
                                        </tr>

                                        <tr>
                                            <td>Kegiatan</td>
                                            <td>: <?php echo $kegiatan ?></td>
                                        </tr>

                                        <tr>
                                            <td>Waktu Pelaksanaan</td>
                                            <td>
                                                <?php
                                                    if (isset($rab->waktu_pelaksanaan)) {
                                                        ?>
                                                            <input type="text" value="<?php echo $rab->waktu_pelaksanaan?>" name="txtWaktuPelaksanaan" onfocusout ="waktuPelaksanaan(this.value)">
                                                        <?php
                                                    }else{
                                                        ?>
                                                            <input type="text" name="txtWaktuPelaksanaan" onfocusout ="waktuPelaksanaan(this.value)">
                                                        <?php
                                                    }
                                                ?>
                                                
                                            <td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </table>
                                        <br>
                                    <table border="0" class="datatable-1 table table-bordered table-striped     display">
                                        <tr>
                                            <th>No</th>
                                            <th>Uraian</th>
                                            <th>Volume</th>
                                            <th>Harga Satuan (Rp.)</th>
                                            <th>Jumlah</th>
                                        </tr>

                                        <?php

                                        $no = 1;
                                        $no2 = 2;
                                        // var_dump($item);
                                        // exit();
                                            foreach ($item as $row) {
                                                echo 
                                                "
                                                    <tr>
                                                        <td>".$no."</td>
                                                        <td>".$row->uraian." : </td>
                                                        <td></td>
                                                        <td></td>
                                                        <td style='text-align:right'>";
                                                if (isset($jumlah[0]->jumlah)) {
                                                    echo $jumlah[0]->jumlah;
                                                }else{
                                                    echo "0";
                                                }   
                                                echo   
                                                    "
                                                    </td>
                                                    </tr>
                                                            ";
                                                $no++;
                                            }
                                            foreach ($selectWhere as $key) {
                                                ?>
                                                    <input type="hidden" id="idRekening<?php echo $no2 ?>" value="<?php echo $key->uraian ?>">
                                                    <input type="hidden" id="nomor_rekening" value="<?php echo $key->nomor_rekening ?>">
                                                <?php
                                                echo
                                                "   <tr>
                                                        <td>".$no2."</td>
                                                        <td> - ".$key->uraian."</td>
                                                        ";

                                                    if (isset($rab->harga_satuan)) {
                                                            ?>  
                                                                <td>
                                                                    <input type='number' value="<?php echo $key->volume?>" onkeyup='harga("<?php echo $no2?>")' id='volume<?php echo $no2?>' >
                                                                </td>
                                                                <td>
                                                                    <input type='text' value="<?php echo $key->harga_satuan ?>"  id='harga<?php echo $no2?>' readonly >
                                                                </td>
                                                            <?php
                                                    }else{
                                                        ?>
                                                            <input type='number' onkeyup='harga("<?php echo $no2?>")' id='volume<?php echo $no2?>' >
                                                            </td>
                                                            <td><input type='text'  id='harga<?php echo $no2?>' readonly ></td>
                                                        <?php
                                                    }
                                                    ?>
                                                        
                                                        <td style='text-align:right' id='txtAnggaran<?php echo $no2?>'><?php echo $key->jumlah ?></td>
                                                    </tr>
                                                <?php
                                                $no2++;
                                            }
                                        ?>
                                        <tr>
                                            <td colspan="4">Jumlah</td>
                                            <td style='text-align:right'>
                                                <?php
                                                    if (isset($jumlah[0]->jumlah)) {
                                                        echo $jumlah[0]->jumlah ;
                                                    }else{
                                                        echo "0";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="bawah" style="height: 150px">
                                        <div class="bawah-kiri" style="float: left">
                                            <table style="text-align: center;margin-top: 25px">
                                                <tr>
                                                    <td>Disetujui / Mengesahkan</td>
                                                </tr>
                                                <tr>
                                                    <td>Kepala Desa</td>
                                                </tr>
                                                <tr>
                                                    <td  style="text-transform: uppercase;padding-top: 50px"><?php echo $_SESSION['namaKepalaDesa'] ?></td>
                                                </tr>
                                            </table>
                                        </div> <!-- #bawah-kiri -->
                                        <div class="bawah-kanan" style="float: right;">
                                            <table style="text-align: center;margin-top: 25px">
                                                <tr>
                                                    <td style="text-transform: capitalize;">
                                                        <?php echo $_SESSION['namaDesa'] ?>, 
                                                        <?php
                                                            if (isset($rab->waktu_pelaksanaan)) {
                                                                ?>
                                                                    <input  type="date" value="<?php echo $rab->tanggal?>" name="Tanggal" id="tanggal" onchange="tanggalChange(this.value)">
                                                                <?php
                                                            }else{
                                                                ?>
                                                                    <input  type="date" name="Tanggal" id="tanggal" onchange="tanggalChange(this.value)">
                                                                <?php
                                                            }
                                                        ?>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Pelaksana Kegiatan</td>
                                                </tr>
                                                <tr>
                                                    <td  style="text-transform: uppercase;padding-top: 50px">
                                                    <?php
                                                        if (isset($rab->waktu_pelaksanaan)) {
                                                            ?>
                                                                <input type="text" style="text-align: center;" value="<?php echo $rab->pelaksana_kegiatan?>" id="pelaksanaKegiatan" onfocusout="PelaksanaKegiatan(this.value)" name="pelaksanaKegiatan">
                                                            <?php
                                                        }else{
                                                            ?>
                                                                <input type="text" id="pelaksanaKegiatan" onfocusout="PelaksanaKegiatan(this.value)" name="pelaksanaKegiatan">
                                                            <?php
                                                        }
                                                    ?>
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                        </div> <!-- #bawah-kanan -->
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