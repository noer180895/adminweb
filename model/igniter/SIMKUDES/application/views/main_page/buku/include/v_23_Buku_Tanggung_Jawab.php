<?php
    $dataWhere = array(
        'tahun' => $_SESSION['tahunApbdes'] , 
        'kegiatan' => $kegiatan , 
        );
    $tanggungJawab = $this->m_23_tanggungJawab->selectWhere($dataWhere);
    if (isset($tanggungJawab[0])) {
        $tanggungJawab = $tanggungJawab[0];
    }
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
        var kegiatan = document.getElementById('inpuKegiatan').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                // document.getElementById("jumlah").innerHTML = xmlhttp.responseText;
            }
          };
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateTanggungJawab/"+r+"?kegiatan="+ kegiatan,true);
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
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateTanggungJawab/"+id+"?pelaksanaKegiatan="+ r,true);
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
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateTanggungJawab/"+nomor_rekening+"?tanggal="+ r,true);
        xmlhttp.send();
        // location.reload();
    }
</script>

                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Pertanyataan Tanggung Jawab Belanja </h3>
                                <div style="margin: 1% 0 0 0">
                                    <a class="btn btn-default" href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/pdfTanggungJawab">Export PDF</a>
                                </div>
                            </div>
                            <div class="module-body">
                                <form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/simpanTanggungJawab" method="POST">
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
                                            <td></td>
                                        </tr>
                                    </table>
                                        <br>
                                    <table border="0" class="datatable-1 table table-bordered table-striped     display">
                                        <tr>
                                            <th>No</th>
                                            <th>Penerima</th>
                                            <th>Uraian</th>
                                            <th>Jumlah</th>
                                            <th>Aksi</th>
                                        </tr>

                                        <?php

                                        $no = 1;
                                        $no2 = 2;
                                        // var_dump($item);
                                        // exit();

                                        foreach ($item as $row ) {
                                            echo 
                                                "
                                                    <tr>
                                                        <td>".$no."</td>
                                                        <td>".$row->penerima."</td>
                                                        <td>".$row->uraian."</td>
                                                        <td>".$row->jumlah."</td>
                                                        <td></td>
                                                    </tr>
                                                            ";
                                                $no++;
                                        }
                                        ?>
                                        <tr>
                                                <td></td>
                                                <td>
                                                <?php 
                                                    $row = $this->m_log->getNipUser();
                                                ?>
                                                    <input type='text'name='txtPenerima' id='inputPenerima' value="<?php echo $row[0]->nama; ?>"> 
                                                    <input type='hidden'name='txtKegiatan' id='inpuKegiatan' value="<?php echo $kegiatan ?>">
                                                </td>
                                                <td>
                                                    <input type='text'name='txtUraian' id='inputUraian'> 
                                                    <input type='hidden'name='txtBidang' id='inputBidang' value="<?php echo $bidang ?>">
                                                </td>
                                                <td><input type='text'name='txtJumlah' id='inputJumlah'> </td>
                                                <td><input type="submit" value="simpan" class="btn btn-default" style="width: 100%"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">Jumlah</td>
                                            <td style='text-align:right'>
                                                <?php
                                                    if (isset($jumlah[0]->jumlah)) {
                                                        echo $jumlah[0]->jumlah ;
                                                    }else{
                                                        echo "0";
                                                    }
                                                ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </table>

                                    <div class="bawah" style="height: auto;margin-top: 3%">
                                        Bukti-bukti pengeluaran atau belanja di atas tersebut sebagai terlampir, untuk kelengkapan administrasi dan pemeriksaan sesuai peraturan perundang undangan.
                                        <br>
                                        <br>
                                        Demikian surat pernyataan ini dibuat denan sebenarnya.
                                        <center>    
                                                <div class="bawah-tengah" >
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                                <?php echo $_SESSION['namaDesa'] ?>, tanggal 
                                                                <?php
                                                                    if (isset($tanggungJawab->tanggal)) {
                                                                        ?>
                                                                            <input type="date" value="<?php echo $tanggungJawab->tanggal?>" name="txtWaktuPelaksanaan" onfocusout ="waktuPelaksanaan(this.value)">
                                                                        <?php
                                                                    }else{
                                                                        ?>
                                                                            <input type="date" name="txtWaktuPelaksanaan" onfocusout ="waktuPelaksanaan(this.value)">
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
                                                                    if (isset($tanggungJawab->id)) {
                                                                        ?>
                                                                            <input type="hidden" value="<?php echo $tanggungJawab->id?>" id="inputId" >   
                                                                        <?php
                                                                    }
                                                                    if (isset($tanggungJawab->pelaksana_kegiatan)) {
                                                                        ?>
                                                                            <input type="text" style="text-align: center;text-transform: uppercase;" value="<?php echo $tanggungJawab->pelaksana_kegiatan?>" onfocusout ="pelaksanaKegiatan(this.value)">
                                                                        <?php
                                                                    }else{
                                                                        ?>
                                                                            <input type="text" onfocusout ="pelaksanaKegiatan(this.value)">
                                                                        <?php
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div> <!-- #bawah-tengah -->
                                        </center>
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