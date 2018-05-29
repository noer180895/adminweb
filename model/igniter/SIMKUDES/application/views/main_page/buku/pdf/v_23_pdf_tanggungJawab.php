<?php
    $dataWhere = array(
        'tahun' => $_SESSION['tahunApbdes'] , 
        'kegiatan' => $_SESSION['kegiatan'] , 
        );
    $tanggungJawab = $this->m_23_tanggungJawab->selectWhere($dataWhere);
    if (isset($tanggungJawab[0])) {
        $tanggungJawab = $tanggungJawab[0];
    }
?>

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
                                    Laporan Pernyataan Tanggung Jawab
                                </h3>
                                <div style="margin: 1% 0 0 0">
                                    
                                </div>
                            </div>
                            <div class="module-body">
                                <form>
                                    <table>
                                        <tr>
                                            <td>Bidang</td>
                                            <td>: <?php echo $_SESSION['bidang'] ?></td>
                                        </tr>

                                        <tr>
                                            <td>Kegiatan</td>
                                            <td>: <?php echo $_SESSION['kegiatan'] ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </table>
                                        <br>
                                    <table border="1" style="width: 100%">
                                        <tr>
                                            <th>No</th>
                                            <th>Penerima</th>
                                            <th>Uraian</th>
                                            <th>Jumlah</th>
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
                                                            <td class='kanan'>".$row->jumlah."</td>
                                                        </tr>
                                                                ";
                                                    $no++;
                                            }
                                        ?>
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
                                        </tr>
                                    </table>

                                    <div class="bawah" style="height: auto;margin-top: 3%">
                                        Bukti-bukti pengeluaran atau belanja di atas tersebut sebagai terlampir, untuk kelengkapan administrasi dan pemeriksaan sesuai peraturan perundang undangan.
                                        <br>
                                        <br>
                                        Demikian surat pernyataan ini dibuat denan sebenarnya.
                                        <div style="width: 100%; text-align: center;">
                                                <table width="100%">
                                                    <tr>
                                                        <td style="text-align: center;">
                                                            <table style="text-align: center;margin-top: 25px">
                                                                <tr>
                                                                    <td style="text-transform: capitalize;">
                                                                        <?php echo $_SESSION['namaDesa'] ?>, tanggal 
                                                                        <?php
                                                                            if (isset($tanggungJawab->tanggal)) {
                                                                                ?>
                                                                                   <?php echo $tanggungJawab->tanggal?>
                                                                                <?php
                                                                            }else{
                                                                                ?>
                                                                                    <input type="text" name="txtWaktuPelaksanaan" onfocusout ="waktuPelaksanaan(this.value)">
                                                                                <?php
                                                                            }
                                                                        ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pelaksana Kegiatan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td  style="text-transform: uppercase;text-align:center;padding-top: 50px">
                                                                        <?php echo $tanggungJawab->pelaksana_kegiatan?>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div> <!-- #bawah-tengah -->
                                                            
                                                        </td>
                                                    </tr>
                                                </table>
                                    </div> <!-- #bawah -->  
                                </form>
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->