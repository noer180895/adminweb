<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Kas Pembantu Pengeluaran.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="5">
                                <center><h3>Daftar Buku Kas Pembantu Perincian Obyek Pengeluaran Tahun <?php echo date('Y')?></h3></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <p>Model C 3 b</p>
                                    </td>
                                </tr>
                            </table>
                            </div>
                            <div class="module-body">
                            
                            <style type="text/css">
                            #tengah{
                                vertical-align: middle;
                                text-align: center;
                            }
                            </style>
                                <div style="height: 410px; overflow: scroll;">
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                            	<th id="tengah">Nomor</th>
                                            	<th id="tengah">Nomor BKU Pengeluaran</th>
                                            	<th id="tengah">Tanggal Pengeluaran</th>
                                                <th id="tengah">Nomor SPP & Bukti Pengeluaran Lainnya</th>
                                                <th id="tengah">Jumlah (Rp)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <?php
                                                $a=0;
                                                    foreach ($ambildata as $row) {
                                                        $a++;
                                                        $id = $row->id;
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$a."</td>
                                                        <td id='tengah'>".$row->nomor_bku_pengeluaran."</td>
                                                        <td id='tengah'>".$row->tanggal_pengeluaran."</td>
                                                        <td id='tengah'>".$row->nomor_spp."</td>
                                                        <td id='tengah'>".$row->jumlah."</td>
                                                        ";
                                                        ?>
                                                    </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                                </tbody>
                                                <tfoot>
                                                <?php
                                                        $jumlah = $this->m_26_buku_kas_pembantu_pengeluaran->jumlah('jumlah');
                                                ?>
                                                    <th colspan="3">Jumlah</th>
                                                    <th><?php echo $hitungnomorspp?></th>
                                                    <th><?php echo $jumlah[0]->jumlah?></th>
                                                </tfoot>
                                        </table>
                                        <table border="1">
                                            <tr>
                                                <td colspan="4">
                                                    <p>Jumlah bulan ini</p>
                                                </td>
                                                <td>
                                                    <p>Rp. <?php echo $jumlahBulanIni ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <p>Jumlah s/d bulan lalu</p>
                                                </td>
                                                <td>
                                                    <p>Rp. <?php echo $jumlahBulanLalu ?> </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <p>Jumlah s/d bulan ini</p>
                                                </td>
                                                <td>
                                                    <p>Rp. <?php echo $jumlahSemuaBulan ?> </p>
                                                </td>
                                            </tr>
                                        </table>
                                        </div>
                                    </div>
                                    <table>
                                    <?php
                                        foreach ($ambilperangkatdesa as $rowperangkat) {
                                            foreach ($ambilpenandatangan as $rowpenanda) {
                                             
                                    ?>
                                        <tr>
                                            <td colspan="5">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                
                                                <p style="text-align: right;"><?php echo $rowperangkat->nama_kabupaten?> , <?php echo date ('d-M-Y')?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                            </td>
                                        </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <center>
                                                        <p>Mengetahui</p>
                                                    </center>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td colspan="2" rowspan="2">
                                                    <center>
                                                        <p>BENDAHARA DESA</p>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <center>
                                                        <p>KEPALA DESA,</p>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="5">
                                                    <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6">
                                                    <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <center>
                                                        <p><?php echo $rowpenanda->nama_kades?></p>
                                                    </center>
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td colspan="2">
                                                    <center>
                                                        <p><?php echo $rowpenanda->nama_bendes?></p>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php
                                    }
                                }
                                ?>  
                                
                                        </table>
                            </div>
                            </div>
                            </div>
                            </div>
<script type="text/javascript">
    function konfirmasihapus () {
         return confirm('Apakah Anda Akan Menghapus Data ?');
    }
</script>