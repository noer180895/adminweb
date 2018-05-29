<?php
    $dataWhere = array(
        'tahun' => $_SESSION['tahunApbdes'] , 
        'kegiatan' => $_SESSION['kegiatan'] , 
        );
    $bantuKegiatan = $this->m_23_bantuKegiatan->selectWhere($dataWhere);
    if (isset($bantuKegiatan[0])) {
        $bantuKegiatan = $bantuKegiatan[0];
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
                                    Laporan Buku Kas Bantu Kegiatan
                                </h3>
                                <div style="margin: 1% 0 0 0">
                                    
                                </div>
                            </div>
                            <div class="module-body">
                                <form action="<?php echo base_url() ?>APBDes/c_23_generateAPBDes/simpanBantuKegiatan" method="POST">
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
                                    
                                    <table border="1" class="datatable-1 table table-bordered table-striped display">
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
                                                        </tr>";
                                                    $no++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    <div class="bawah" style="height: 150px">
                                            <table width="100%">
                                                <tr>
                                                    <td width="50%">
                                                       
                                                    </td>
                                                    <td width="50%" style="text-align: right;">
                                                        <table style="text-align: center;margin-top: 25px">
                                                            <tr>
                                                                <td style="text-transform: capitalize;">
                                                                    Desa <?php echo $_SESSION['namaDesa'] ?> <br>
                                                                    <?php echo $_SESSION['namaKabupaten'] ?>, 
                                                                    <?php
                                                                       echo  $bantuKegiatan->tanggal_ttd;
                                                                    ?>
                                                                    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pelaksana Kegiatan</td>
                                                            </tr>
                                                            <tr>
                                                                <td  style="text-transform: uppercase;padding-top: 50px">
                                                                <?php
                                                                   echo $bantuKegiatan->pelaksana_kegiatan;
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