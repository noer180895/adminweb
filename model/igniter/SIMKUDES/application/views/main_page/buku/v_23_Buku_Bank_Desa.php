

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
                                <h3>BUKU BANK DESA</h3>
                                <div style="margin: 1% 0 0 0">
                                    <a class="btn btn-default" href="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/pdfbbd">Export PDF</a>
                                </div>
                            </div>
                            <div class="module-body">
                                <form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/simpanBukuBankDesa" method="POST">
                                    <table>
                                        <tr>
                                            <td>Bulan</td>
                                            <td>: 
                                                Semua Bulan
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Bank CAB</td>
                                            <td>: <?php echo $perdes[0]->nama_bank_desa ?></td>
                                        </tr>

                                        <tr>
                                            <td>Nomor Rekening</td>
                                            <td>
                                               : <?php echo $perdes[0]->nomor_rekening_desa ?>
                                            <td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </table>
                                        <br>
                                    <table border="0" class="datatable-1 table table-bordered table-striped display" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Tanggal Transaksi</th>
                                                <th rowspan="2">Uraian Transaksi</th>
                                                <th rowspan="2">Bukti Transaksi</th>
                                                <th colspan="2">Pemasukan</th>
                                                <th colspan="3">Pengeluaran</th>
                                                <th rowspan="2">Saldo</th>
                                                <th rowspan="2">Aksi</th>
                                            </tr>
                                            <tr>
                                                <th>Setoran</th>
                                                <th>Bunga Bank</th>
                                                <th>Penarikan</th>
                                                <th>Pajak</th>
                                                <th>Biaya ADM</th>
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
                                                        <td> $row->tanggal_transaksi </td>
                                                        <td> $row->uraian_transaksi </td>
                                                        <td> $row->bukti_transaksi </td>
                                                        <td> $row->setoran </td>
                                                        <td> $row->bunga_bank </td>
                                                        <td> $row->penarikan </td>
                                                        <td> $row->pajak </td>
                                                        <td> $row->biaya_adm </td>
                                                        <td> $row->saldo </td>";
                                                $dataAkhir = $this->m_23_bukubankdesa->selectDesc();
                                                if ($row->id == $dataAkhir[0]->id) {
                                                    echo 
                                                        "
                                                        <td> 
                                                                <a data-toggle='modal' data-id=' $row->id ' id='tombolUbah' class='btn btn-default' style='width:100%;margin: 0 0 5px 0'> Ubah </a>
                                                                
                                                                <a href ='".base_url()."APBDes/c_23_generateAPBDes/Hapus?id=".$row->id."' id='tombol' class='btn btn-default' style='width:100%;margin: 0 0 0 0'> Hapus </a>
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
                                            <!-- <tr>
                                                <th colspan="4"> TOTAL TRANSAKSI BULAN INI  </th>
                                                <th>  </th>
                                                <th>  </th>
                                                <th>  </th>
                                                <th>  </th>
                                                <th>  </th>
                                                <th>  </th>
                                                <th>  </th>
                                            </tr> -->
                                            <tr>
                                                <th colspan="4"> TOTAL TRANSAKSI KOMULATIF  </th>
                                                <th> <?php echo $sum_setoran[0]->setoran ?> </th>
                                                <th> <?php echo $sum_bungaBank[0]->bunga_bank ?> </th>
                                                <th> <?php echo $sum_penarikan[0]->penarikan ?> </th>
                                                <th> <?php echo $sum_pajak[0]->pajak ?> </th>
                                                <th> <?php echo $sum_biayaAdm[0]->biaya_adm ?> </th>
                                                <th>  </th>
                                                <th>  </th>
                                            </tr>
                                            <tr>
                                                <th>  </th>
                                                <th> <input type="date" id="inputDate"      name="dtmDate"> </th>
                                                <th> <input type="text" id="inputUraian"    name="txtUraian" > </th>
                                                <th> <input type="text" id="inputBukti"     name="txtBukti" > </th>
                                                <th> <input type="text" id="inputSetoran"   name="txtSetoran" > </th>
                                                <th> <input type="text" id="inputBunga"     name="txtBunga" > </th>
                                                <th> <input type="text" id="inputPenarikan" name="txtPenarikan" > </th>
                                                <th> <input type="text" id="inputPajak"     name="txtPajak" > </th>
                                                <th> <input type="text" id="inputBiayaADM"  name="txtBiayaADM" > </th>
                                                <th colspan="2"> <input type="SUBMIT" id="tombolSimpan" name="cmdSimpan" class="btn btn-default" onclick="simpan()" value="Simpan"> </th>
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
                                    include('include/v_23_ubahModalBank.php');
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