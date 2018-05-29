<?php 
    $tahun = $_SESSION['tahunApbdes'];
    $ambilRekening = $this->m_26_RAPBDes->ambilDataRekeningBerdasarkanTahun($tahun); 
  ?>

<script type="text/javascript">
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
    function simpan() {
        
    }
</script>

                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>BUKU Kas Umum</h3>
                                <div style="margin: 1% 0 0 0">
                                    <a class="btn btn-default" href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/pdfkasUmum">Export PDF</a>
                                </div>
                            </div>
                            <div class="module-body">
                                <div class="alert">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Peringatan!</strong> Penghapusan data hanya dapat dilakukan pada data yang terakhir di inputkan.
                                </div>
                                <form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/simpanKasUmum" method="POST">
                                        <br>
                                    <table border="0" class="datatable-1 table table-bordered table-striped display" style="text-align: center;overflow: scroll !important;">
                                        <thead >
                                            <tr>
                                                
                                                <th colspan="2" style="text-align:center">
                                                    
                                                </th>
                                                <th colspan="5">Kode Rekening</th>
                                                <th rowspan="2">Uraian</th>
                                                <th rowspan="2">Penerimaan</th>
                                                <th rowspan="2">Pengeluaran</th>
                                                <th rowspan="2">Nomor Bukti</th>
                                                <th rowspan="2">Jumlah Pengeluaran Komulatif</th>
                                                <th rowspan="2">Saldo</th>
                                                <th  rowspan="2" >Aksi</th>
                                            </tr>
                                            <tr>
                                                <th >No</th>
                                                <th >Tanggal</th>
                                                <th>k1</th>
                                                <th>k2</th>
                                                <th>k3</th>
                                                <th>k4</th>
                                                <th>k5</th>

                                            </tr>
                                            <tr>
                                                <th>  </th>
                                                <th> <input type="date" id="inputDate"      name="dtmDate"> </th>
                                                <th> <input type="number" id="inputK1"      name="txtK1"> </th>
                                                <th> <input type="number" id="inputK2"      name="txtK2"> </th>
                                                <th> <input type="number" id="inputK3"      name="txtK3"> </th>
                                                <th> <input type="number" id="inputK4"      name="txtK4"> </th>
                                                <th> <input type="number" id="inputK5"      name="txtK5"> </th>

                                                <th> <input type="text" id="inputUraian"    name="txtUraian" > </th>
                                                <th> <input type="number" id="inputPenerimaan"     name="txtPenerimaan" > </th>
                                                <th> <input type="number" id="inputPengeluaran"   name="txtPengeluaran" > </th>
                                                <th>  <input type="number" id="inputNoBukti"   name="txtNoBukti" > </th></th>
                                                <th colspan="3" > <input type="SUBMIT" id="tombolSimpan" name="cmdSimpan" class="btn btn-default" onclick="simpan()" value="Simpan" style="width: 100%"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($item as $row) {
                                                echo
                                                    "
                                                    <tr>
                                                        <td> $no </td>
                                                        <td> $row->tanggal </td>
                                                        <td> $row->k1 </td>
                                                        <td> $row->k2 </td>
                                                        <td> $row->k3 </td>
                                                        <td> $row->k4 </td>
                                                        <td> $row->k5 </td>
                                                        <td> $row->uraian </td>
                                                        <td> $row->penerimaan </td>
                                                        <td> $row->pengeluaran </td>
                                                        <td> $row->no_bukti </td>
                                                        <td> $row->jumlah_pengeluaran_komulatif </td>
                                                        <td> $row->saldo </td>
                                                    ";
                                                $dataAkhir = $this->m_23_bukuKasUmum->selectDesc();
                                                if ($row->id == $dataAkhir[0]->id) {
                                                    echo 
                                                                // <a data-toggle='modal' data-id=' $row->id ' id='tombolUbah' class='btn btn-default' style='width:60%;margin: 0 0 5px 0'> Ubah </a>
                                                        "
                                                        <td> 
                                                                
                                                                <a href ='".base_url()."APBDes/c_23_generateAPBDes/hapusKasUmum?id=".$row->id."' id='tombol' class='btn btn-default' style='width:60%;margin: 0 0 0 0'> Hapus </a>
                                                            </td>
                                                        </tr>
                                                        ";
                                                }else{
                                                    echo "<td></td>";
                                                }
                                                $no++;
                                            }
                                            
                                        ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="8"> Jumlah  </th>
                                                <th> <?php echo $sum_penerimaan[0]->penerimaan ?> </th>
                                                <th> <?php echo $sum_pengeluaran[0]->pengeluaran ?> </th>
                                                <th>  </th>
                                                <th>  </th>
                                                <th>  </th>
                                                <th>  </th>
                                            </tr>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Tanggal</th>
                                                <th colspan="5">Kode Rekening</th>
                                                <th rowspan="2">Uraian</th>
                                                <th rowspan="2">Penerimaan</th>
                                                <th rowspan="2">Pengeluaran</th>
                                                <th rowspan="2">Nomor Bukti</th>
                                                <th rowspan="2">Jumlah Pengeluaran Komulatif</th>
                                                <th rowspan="2">Saldo</th>
                                                <th  rowspan="2" >Aksi</th>
                                            </tr>
                                            <tr>
                                                <th>k1</th>
                                                <th>k2</th>
                                                <th>k3</th>
                                                <th>k4</th>
                                                <th>k5</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="bawah" style="height: 150px">
                                        <div class="bawah-kiri" style="float: left">
                                            <table style="text-align: center;margin-top: 25px">
                                                <tr>
                                                    <td>Mengetahui</td>
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
                                                           echo date("d M Y")
                                                        ?>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Bendahara Desa</td>
                                                </tr>
                                                <tr>
                                                    <td  style="text-transform: uppercase;padding-top: 50px">
                                                    <?php
                                                       echo $perdes[0]->nama_bendahara_desa;
                                                    ?>
                                                        
                                                    </td>
                                                </tr>
                                            </table>
                                        </div> <!-- #bawah-kanan -->
                                    </div> <!-- #bawah -->
                                </form>
                                <?php 
                                    include('include/v_23_ubahModalUmum.php');
                                ?>
                            </div>
                        </div>                        
                    </div><!--/.content-->
                </div><!--/.span9-->
<script type="text/javascript">
    function simpan() {
        return confirm("Apakah anda benar akan menyimpan data ?");
    }


</script>
<?php 
    include('include/v_23_RekeningModal.php');
    ?>