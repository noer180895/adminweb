 <head>
     <style type="text/css">
        .tr-kanan th{
            text-align: right;
        }
        .kanan{
            text-align: right;
        }
        .module-head h3{
            text-align: center;
            text-transform: uppercase;
        }
        .module-head{
            border-bottom: 1px solid #000;
            margin-bottom: 1%;
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
                                <h3>
                                	ADMINISTRASI KEUANGAN DESA <br>
                                	MODEL C. 2 : ANGGARAN PENDAPATAN DAN BELANJA DESA<br>
                                	DESA <?php echo $perdes->nama_desa ?> KECAMATAN <?php echo $perdes->nama_kecamatan ?> <br>
                                    TAHUN ANGGARAN <?php echo date("Y") ?>
                                </h3>
                            </div>
                            <div class="module-body">
                                        <br>
                                    <table border="1" class="datatable-1 table table-bordered table-striped display" style="text-align: center;width: 100%">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Tanggal</th>
                                                <th colspan="4">Kode Rekening</th>
                                                <th>Uraian</th>
                                                <th>Penerimaan</th>
                                                <th>Pengeluaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <!-- table body -->
    										<?php
                                                $no = 1;
                                                foreach ($bukamu as $row) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no ?></td>
                                                                <td><?php echo TanggalIndodua($row->tanggal) ?></td>
                                                                <td><?php echo $row->k1 ?></td>
                                                                <td><?php echo $row->k2 ?></td>
                                                                <td><?php echo $row->k3 ?></td>
                                                                <td><?php echo $row->k4 ?></td>
                                                                <td><?php echo $row->uraian ?></td>
                                                                <td class="kanan"><?php echo $row->penerimaan ?></td>
                                                                <td class="kanan"><?php echo $row->pengeluaran ?></td>
                                                        </tr>
                                                    <?php
                                                    $no++;
                                                }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th colspan="4">JUMLAH</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            <?php 
                                                if (empty($jumlahPenerimaanBulanIni[0]->penerimaan)) {
                                                    $jumlahPenerimaanBulanIni = "0";
                                                }else{
                                                    $jumlahPenerimaanBulanIni = $jumlahPenerimaanBulanIni[0]->penerimaan ;
                                                }
                                                if (empty($jumlahPenerimaanBulanLalu[0]->penerimaan)) {
                                                    $jumlahPenerimaanBulanLalu = "0";
                                                }else{
                                                    $jumlahPenerimaanBulanLalu = $jumlahPenerimaanBulanLalu[0]->penerimaan ;
                                                }
                                                if (empty($jumlahPenerimaanSemuaBulan[0]->penerimaan)) {
                                                    $jumlahPenerimaanSemuaBulan = "0";
                                                }else{
                                                    $jumlahPenerimaanSemuaBulan = $jumlahPenerimaanSemuaBulan[0]->penerimaan ;
                                                }

                                                if (empty($jumlahPengeluaranBulanIni[0]->pengeluaran)) {
                                                    $jumlahPengeluaranBulanIni = "0";
                                                }else{
                                                    $jumlahPengeluaranBulanIni = $jumlahPengeluaranBulanIni[0]->pengeluaran ;
                                                }
                                                if (empty($jumlahPengeluaranBulanLalu[0]->pengeluaran)) {
                                                    $jumlahPengeluaranBulanLalu = "0";
                                                }else{
                                                    $jumlahPengeluaranBulanLalu = $jumlahPengeluaranBulanLalu[0]->pengeluaran ;
                                                }
                                                if (empty($jumlahPengeluaranSemuaBulan[0]->pengeluaran)) {
                                                    $jumlahPengeluaranSemuaBulan = "0";
                                                }else{
                                                    $jumlahPengeluaranSemuaBulan = $jumlahPengeluaranSemuaBulan[0]->pengeluaran ;
                                                }
                                             ?>
                                            <tr>
                                                <th class="kanan" colspan="7">Jumlah bulan/ tanggal</th>
                                                <th class="kanan" >Rp. <?php echo $jumlahPenerimaanBulanIni; ?> </th>
                                                <th class="kanan" >Rp. <?php echo $jumlahPengeluaranBulanIni; ?> </th>
                                            </tr>
                                            <tr>
                                                <th class="kanan" colspan="7">Jumlah sampai bulan lalu/ Tanggal</th>
                                                <th class="kanan" >Rp. <?php echo $jumlahPenerimaanBulanLalu; ?></th>
                                                <th class="kanan" >Rp. <?php echo $jumlahPengeluaranBulanLalu; ?></th>
                                            </tr>
                                            <tr>
                                                <th class="kanan" colspan="7">Jumlah semua s/d bulan/ tanggal</th>
                                                <th class="kanan" >Rp. <?php echo $jumlahPenerimaanSemuaBulan; ?></th>
                                                <th class="kanan" >Rp. <?php echo $jumlahPengeluaranSemuaBulan; ?></th>
                                            </tr>
                                            <tr>
                                                <th class="kanan" colspan="7">Sisa Kas</th>
                                                <th colspan="2" class="kanan" >Rp. <?php echo $sisaKas ?> </th>
                                            </tr>


                                        </tfoot>
                                    </table>
                                    <?php
                                        foreach ($ambilpenandatangan as $rowpenanda) {
                                         
                                    ?>
                                    <div class="bawah" style="height: 150px">
                                        <div style="margin: 2% 0%">
                                            Pada hari ini tanggal <?php echo TanggalIndo(date("d-m, Y")); ?><br>
                                            Oleh kami di dapat dalam kas Rp. ............
                                            Terdiri dari :
                                            <div style="margin-left: 20px">
                                                <table>
                                                    <tr>
                                                        <td>Tunai</td>
                                                        <td>Rp ....</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Saldo Bank</td>
                                                        <td>Rp ....</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Surat Berharga</td>
                                                        <td>Rp ....</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <table width="100%">
                                            <tr>
                                                <td width="50%">
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                                Mengetahui
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kepala Desa</td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="text-transform: uppercase;padding-top: 50px">
                                                            <?php
                                                               echo $perdes->nama_kepala_desa."<br>NIP. ".$rowpenanda->nip_kades;
                                                            ?>
                                                                
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td width="50%" style="text-align: right;">
                                                    <table style="text-align: center;margin-top: 25px">
                                                        <tr>
                                                            <td style="text-transform: capitalize;">
                                                                <?php echo $perdes->nama_kabupaten ?>, 
                                                                <?php
                                                                   echo TanggalIndo(date("d-m-Y"));
                                                                ?>
                                                                
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Bendahara Desa</td>
                                                        </tr>
                                                        <tr>
                                                            <td  style="text-transform: uppercase;padding-top: 50px">
                                                            <?php
                                                               echo $perdes->nama_bendahara_desa."<br>NIP. ".$rowpenanda->nip_bendes;
                                                            ?>
                                                                
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </div> <!-- #bawah -->
                                    <?php
                                }
                                ?>
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
                <?php
    function TanggalIndo($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, -4);
        $bulan = substr($date, 3, 2);
        $tgl   = substr($date, 0, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }

    function TanggalIndodua($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 3);
        $tgl   = substr($date, 8, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }
?>