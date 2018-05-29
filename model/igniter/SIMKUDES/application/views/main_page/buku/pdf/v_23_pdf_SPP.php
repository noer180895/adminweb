<?php
    $dataWhere = array(
        'tahun' => $_SESSION['tahunApbdes'] , 
        'kegiatan' => $_SESSION['kegiatan'] , 
        );
    $SPP = $this->m_23_SPP->selectWhere($dataWhere);
    if (isset($SPP[0])) {
        $SPP = $SPP[0];
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
                                    Surat Permintaan Pembayaran ( SPP )
                                </h3>
                                <div style="margin: 1% 0 0 0">
                                    
                                </div>
                            </div>
                            <div class="module-body">
                                <form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/simpanSPP" method="POST">
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
                                            <td>Waktu Pelaksanaan</td>
                                            <td>: <?php echo $SPP->waktu_pelaksanaan ?></td>
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
                                    
                                    <table border="1" class="datatable-1 table table-bordered table-striped display">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Uraian</th>
                                                <th>Pagu Anggaran</th>
                                                <th>Pencarian S.D yang lalu</th>
                                                <th>Permintaan Sekarang</th>
                                                <th>Jumlah Sampai Saat Ini</th>
                                                <th>Sisa Dana</th>
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
                                                            <td>".$row->uraian."</td>
                                                            <td>".$row->pagu_anggaran."</td>
                                                            <td>".$row->pencairan."</td>
                                                            <td>".$row->permintaan_sekarang."</td>
                                                            <td>".$row->jumlah_sampai_saat_ini."</td>
                                                            <td>".$row->sisa_dana."</td>
                                                        </tr>";
                                                    $no++;
                                            }
                                            ?>
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
                                                <td width="50%" style="text-align:right">
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tbody>
                                                                <tr>
                                                                    <td style="text-transform: capitalize;">
                                                                        <?php 
                                                                            echo $_SESSION['namaKabupaten'].", ";
                                                                            echo $SPP->tanggal_ttd ;
                                                                        ?>  
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pelaksana Kegiatan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="text-transform: uppercase;padding-top: 50px">
                                                                        <?php
                                                                           echo $SPP->pelaksana_kegiatan;
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
                                                <td width="50%" style="text-align:right">
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