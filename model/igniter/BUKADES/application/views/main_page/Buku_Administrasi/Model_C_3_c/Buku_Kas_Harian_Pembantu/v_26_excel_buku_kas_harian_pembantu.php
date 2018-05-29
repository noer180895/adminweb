<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Kas Harian Pembantu.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="6">
                                <center><h3>Daftar Buku Kas Harian Pembantu Tahun <?php echo date('Y')?></h3></center>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <p>Model C 3 c</p>
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
                                            	<th id="tengah">Tanggal</th>
                                            	<th id="tengah">Uraian</th>
                                                <th id="tengah">Penerimaan (Rp)</th>
                                                <th id="tengah">Pengeluaran (Rp)</th>
                                                <th id="tengah">Jumlah</th>
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
                                                        <td id='tengah'>".$row->tanggal."</td>
                                                        <td id='tengah'>".$row->uraian."</td>
                                                        <td id='tengah'>".$row->penerimaan."</td>
                                                        <td id='tengah'>".$row->pengeluaran."</td>
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
                                                        $jumlahpenerimaan = $this->m_26_buku_kas_harian_pembantu->jumlah('penerimaan');
                                                        $jumlahpengeluaran = $this->m_26_buku_kas_harian_pembantu->jumlah('pengeluaran');
                                                        $jumlah = $this->m_26_buku_kas_harian_pembantu->jumlah('jumlah');
                                                    ?>
                                                    <th style="text-align: right;vertical-align: middle;" colspan="3">Jumlah</th>
                                                    <th id="tengah"><?php echo $jumlahpenerimaan[0]->penerimaan?></th>
                                                    <th id="tengah"><?php echo $jumlahpengeluaran[0]->pengeluaran?></th>
                                                    <th id="tengah"><?php echo $jumlah[0]->jumlah?></th>
                                                </tfoot>
                                        </table>
                                        </div>
                                    </div>
                                    <table>
                                    <?php
                                        foreach ($ambilperangkatdesa as $rowperangkat) {
                                            foreach ($ambilpenandatangan as $rowpenanda) {
                                             
                                    ?>
                                        <tr>
                                            <td colspan="6">
                                                <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                                
                                                <p style="text-align: right;"><?php echo $rowperangkat->nama_kabupaten?> , <?php echo date ('d-M-Y')?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="6">
                                            </td>
                                        </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <center>
                                                        <p>Mengetahui</p>
                                                    </center>
                                                </td>
                                                <td colspan="3" rowspan="2">
                                                    <center>
                                                        <p>BENDAHARA DESA</p>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <center>
                                                        <p>KEPALA DESA,</p>
                                                    </center>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6">
                                                    <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6">
                                                    <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <center>
                                                        <p><?php echo $rowpenanda->nama_kades?></p>
                                                    </center>
                                                </td>
                                                <td colspan="3">
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