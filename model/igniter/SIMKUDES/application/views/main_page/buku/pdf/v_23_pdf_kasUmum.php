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
            text-decoration: underline;
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
                                <h3>
                                    Laporan Buku Kas Umum 
                                </h3>
                                <div style="margin: 1% 0 0 0">
                                    
                                </div>
                            </div>
                            <div class="module-body">
                                <form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/simpanKasUmum" method="POST">
                                        <br>
                                    <table border="1" class="datatable-1 table table-bordered table-striped display" style="text-align: center;">
                                        <thead>
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
                                            </tr>
                                            <tr>
                                                <th>k1</th>
                                                <th>k2</th>
                                                <th>k3</th>
                                                <th>k4</th>
                                                <th>k5</th>

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