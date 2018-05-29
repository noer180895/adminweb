<?php
    $dataWhere = array(
        'tahun' => $_SESSION['tahunApbdes'] , 
        'kegiatan' => $kegiatan , 
        );
    $bantuKegiatan = $this->m_23_bantuKegiatan->selectWhere($dataWhere);
    if (isset($bantuKegiatan[0])) {
        $bantuKegiatan = $bantuKegiatan[0];
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
        console.log(r);
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateBantuKegiatan/"+r+"?kegiatan="+ kegiatan,true);
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
        xmlhttp.open("GET", "<?php echo base_url()?>APBDes/c_23_generateAPBDes/updateBantuKegiatan/"+id+"?pelaksanaKegiatan="+ r,true);
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
                                <h3>Buku Kas Bantu Kegiatan </h3>
                                <div style="margin: 1% 0 0 0">
                                    <a class="btn btn-default" href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/pdfBantuKegiatan">Export PDF</a>
                                </div>
                            </div>
                            <div class="module-body">
                                <form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/simpanBantuKegiatan" method="POST">
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
                                    
                                    <table border="0" class="datatable-1 table table-bordered table-striped display">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">tanggal</th>
                                                <th rowspan="2">Uraian</th>
                                                <th colspan="2">Penerimaan</th>
                                                <th rowspan="2">Nomor Bukti</th>
                                                <th colspan="2">Pengeluaran</th>
                                                <th rowspan="2">Jumlah Pengembalian ke Bendahara</th>
                                                <th rowspan="2">Saldo Kas</th>
                                                <th rowspan="2">Aksi</th>
                                            </tr>
                                            <tr>
                                                <th>Dari Bendahara</th>
                                                <th>Swadaya Masyarakat</th>
                                                <th>Belanja Barang dan Jasa</th>
                                                <th>Belanja Modal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                                            <td>".$row->tanggal."</td>
                                                            <td>".$row->uraian."</td>
                                                            <td>".$row->penerimaan_bendahara."</td>
                                                            <td>".$row->penerimaan_swadaya_masyarakat."</td>
                                                            <td>".$row->nomor_bukti."</td>
                                                            <td>".$row->pengeluaran_belanja_barang_dan_jasa."</td>
                                                            <td>".$row->pengeluaran_belanja_modal."</td>
                                                            <td>".$row->jumlah_pengembalian_ke_bendahara."</td>
                                                            <td>".$row->saldo_kas."</td>
                                                         ";
                                                                $dataAkhir = $this->m_23_bantuKegiatan->selectDesc();
                                                                if ($row->id == $dataAkhir[0]->id) {
                                                                    echo 
                                                                                // <a data-toggle='modal' data-id=' $row->id ' id='tombolUbah' class='btn btn-default' style='width:60%;margin: 0 0 5px 0'> Ubah </a>
                                                                        "
                                                                        <td>        
                                                                            <a href ='".base_url()."APBDes/c_23_generateAPBDes/hapusKasBantuKegiatan?id=".$row->id."' id='tombol' class='btn btn-default' style='width:60%;margin: 0 0 0 0'> Hapus </a>
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
                                                    <td><input type="date" name="txtDtm" id="inputDtm" ></td>
                                                    <td><input type="text" name="txtUraian" id="inputUraian" ></td>
                                                    <td><input type="number" name="txtDariBendahara" id="inputDariBendahara" ></td>
                                                    <td><input type="number" name="txtDariSwadaya" id="inputDariSwadaya" ></td>
                                                    <td><input type="text" name="txtNomorBukti" id="inputNomorBukti" ></td>
                                                    <td><input type="number" name="txtBelanjaBarang" id="inputBelanjaBarang" ></td>
                                                    <td>
                                                    <?php 
                                                        $row = $this->m_log->getNipUser();
                                                    ?>
                                                        <input type='number'name='txtBelanjaModal' id='inputBelanjaModal'> 
                                                        <input type='hidden'name='txtKegiatan' id='inpuKegiatan' value="<?php echo $kegiatan ?>">
                                                    </td>
                                                    <td>
                                                        <input type='number'name='txtPengembalianBendahara' id='inputPengembalianBendahara'> 
                                                        <input type='hidden'name='txtBidang' id='inputBidang' value="<?php echo $bidang ?>">
                                                    </td>
                                                    <td></td>
                                                    <td><input type="submit" value="simpan" class="btn btn-default" style="width: 100%"></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="bawah" style="height: 200px;margin-top: 3%">
                                                <div class="bawah-kanan" style="float: right;" >
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                                Desa <?php echo $_SESSION['namaDesa'] ?> <br>
                                                                <?php echo $_SESSION['namaKabupaten'] ?>, tanggal 
                                                                <?php
                                                                    if (isset($bantuKegiatan->tanggal_ttd)) {
                                                                        ?>
                                                                            <input type="date" value="<?php echo $bantuKegiatan->tanggal_ttd?>" name="txtWaktuPelaksanaan" onfocusout ="waktuPelaksanaan(this.value)">
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
                                                                    if (isset($bantuKegiatan->id)) {
                                                                        ?>
                                                                            <input type="hidden" value="<?php echo $bantuKegiatan->id?>" id="inputId" >   
                                                                        <?php
                                                                    }
                                                                    if (isset($bantuKegiatan->pelaksana_kegiatan)) {
                                                                        ?>
                                                                            <input type="text" style="text-align: center;text-transform: uppercase;" value="<?php echo $bantuKegiatan->pelaksana_kegiatan?>" onfocusout ="pelaksanaKegiatan(this.value)">
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