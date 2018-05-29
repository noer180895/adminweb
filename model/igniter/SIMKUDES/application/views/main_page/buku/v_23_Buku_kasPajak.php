

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
                                <h3>BUKU Kas Bantu Pajak</h3>
                                <div style="margin: 1% 0 0 0">
                                    <a class="btn btn-default" href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/pdfkasPajak">Export PDF</a>
                                </div>
                            </div>
                            <div class="module-body">
                                <div class="alert">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Peringatan!</strong> Penghapusan atau Pengubahan Data Hanya dapat dilakukan pada field yang terakhir di inputkan.
                                </div>
                                <form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/simpanPajak" method="POST">
                                        <br>
                                    <table border="0" class="datatable-1 table table-bordered table-striped display" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th >No</th>
                                                <th >Tanggal</th>
                                                <th >Uraian</th>
                                                <th >Pemotongan</th>
                                                <th >Penyetoran</th>
                                                <th >Saldo</th>
                                                <th >Aksi</th>
                                            </tr>
                                            <tr>
                                                <th>  </th>
                                                <th> <input type="date" id="inputDate"      name="dtmDate"> </th>
                                                <th> <input type="text" id="inputUraian"    name="txtUraian" > </th>
                                                <th> <input type="text" id="inputPemotongan"     name="txtPemotongan" > </th>
                                                <th> <input type="text" id="inputPenyetoran"   name="txtPenyetoran" > </th>
                                                <th>  </th>
                                                <th > <input type="SUBMIT" id="tombolSimpan" name="cmdSimpan" class="btn btn-default" onclick="simpan()" value="Simpan"> </th>
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
                                                        <td> $row->uraian </td>
                                                        <td> $row->pemotongan </td>
                                                        <td> $row->penyetoran </td>
                                                        <td> $row->saldo </td>
                                                    ";
                                                $dataAkhir = $this->m_23_bukuKasPajak->selectDesc();
                                                if ($row->id == $dataAkhir[0]->id) {
                                                    echo 
                                                        "
                                                        <td> 
                                                                <a data-toggle='modal' data-id=' $row->id ' id='tombolUbah' class='btn btn-default' style='width:60%;margin: 0 0 5px 0'> Ubah </a>
                                                                
                                                                <a href ='".base_url()."APBDes/c_23_generateAPBDes/hapusPajak?id=".$row->id."' id='tombol' class='btn btn-default' style='width:60%;margin: 0 0 0 0'> Hapus </a>
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
                                                <th colspan="3"> Jumlah  </th>
                                                <th> <?php echo $sum_pemotongan[0]->pemotongan ?> </th>
                                                <th> <?php echo $sum_penyetoran[0]->penyetoran ?> </th>
                                                <th>  </th>
                                                <th>  </th>
                                            </tr>
                                            <tr>
                                                <th >No</th>
                                                <th >Tanggal</th>
                                                <th >Uraian</th>
                                                <th >Pemotongan</th>
                                                <th >Penyetoran</th>
                                                <th >Saldo</th>
                                                <th >Aksi</th>
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
                                    include('include/v_23_ubahModalPajak.php');
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