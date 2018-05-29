<?php
    $rowperangkat = $perdes[0];
?> 
 <head>
     <style type="text/css">
        .tr-kanan th{
            text-align: right;
        }
        .kanan{
            text-align: right;
        }
        .module-head h3{
            padding-top: 3%;
            text-align: center;
            text-transform: uppercase;
        }
        .module-head{
            margin-bottom: 5%;
        }
        thead th{
            background-color: #f9f9f9;
        }
        tfoot th{
            background-color: #f9f9f9;
        }
     </style>
 </head>
                 <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <div style="border-bottom: 1px solid #000;">
                                    <table border="0" width="100%">
                                    <tr>
                                        <td rowspan="4" width="100px">
                                                <img style="margin-top: -10px;" src="<?php echo $rowperangkat->logo_desa;?>" width="80px" height="100px">
                                        </td>
                                        <td>
                                            <h3>
                                                <center>
                                                <p style="text-transform: uppercase;">PEMERINTAH KABUPATEN <?php echo $rowperangkat->nama_kabupaten; ?> </p>
                                                </center>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>
                                                <center>
                                                <p style="text-transform: uppercase;">KANTOR DESA <?php echo $rowperangkat->nama_desa;?></p>
                                                </center>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>
                                                <center>
                                                <p style="text-transform: uppercase;">KECAMATAN <?php echo $rowperangkat->nama_kecamatan;?></p>
                                                </center>
                                            </h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4>
                                                <center>
                                                <p><?php echo $rowperangkat->alamat_desa;?></p>
                                                </center>
                                            </h4>
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                                <!-- <h3>
                                    Laporan Anggaran Pembangunan dan Belanja Desa <br>
                                </h3> -->
                                <h3 style="border: none;text-decoration: underline;">
                                    Laporan Buku Bank Desa
                                </h3>
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
                                    <table border="1" class="datatable-1 table table-bordered table-striped display" style="text-align: center;">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Tanggal Transaksi</th>
                                                <th rowspan="2">Uraian Transaksi</th>
                                                <th rowspan="2">Bukti Transaksi</th>
                                                <th colspan="2">Pemasukan</th>
                                                <th colspan="3">Pengeluaran</th>
                                                <th rowspan="2">Saldo</th>
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
                                            foreach ($item as $row) {
                                                echo
                                                    "
                                                    <tr>
                                                        <td> $row->id </td>
                                                        <td> $row->tanggal_transaksi </td>
                                                        <td> $row->uraian_transaksi </td>
                                                        <td> $row->bukti_transaksi </td>
                                                        <td class='kanan'> $row->setoran </td>
                                                        <td class='kanan'> $row->bunga_bank </td>
                                                        <td class='kanan'> $row->penarikan </td>
                                                        <td class='kanan'> $row->pajak </td>
                                                        <td class='kanan'> $row->biaya_adm </td>
                                                        <td class='kanan'> $row->saldo </td>
                                                    </tr>
                                                    ";
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
                                            <tr class="tr-kanan">
                                                <th colspan="4"> TOTAL TRANSAKSI KOMULATIF  </th>
                                                <th> <?php echo $sum_setoran[0]->setoran ?> </th>
                                                <th> <?php echo $sum_bungaBank[0]->bunga_bank ?> </th>
                                                <th> <?php echo $sum_penarikan[0]->penarikan ?> </th>
                                                <th> <?php echo $sum_pajak[0]->pajak ?> </th>
                                                <th> <?php echo $sum_biayaAdm[0]->biaya_adm ?> </th>
                                                <th>  </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="bawah" style="height: 150px">
                                        <table width="100%">
                                            <tr>
                                                <td width="50%">
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
                                                </td>
                                                <td width="50%" style="text-align: right;">
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
                                                </td>
                                            </tr>
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