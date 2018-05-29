
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head" style="text-align: center;text-transform: capitalize;">
                                <h3>
                                    [Rencana] Anggaran Pembangunan dan Belanja Desa
                                 </h3> 
                                <h3> 
                                    TAHUN <?php echo date("Y") ?>
                                </h3>
                                <h3>
                                    Desa <?php echo $perdes[0]->nama_desa ?> Kecamatan <?php echo $perdes[0]->nama_kecamatan?> Kabupaten <?php echo $perdes[0]->nama_kabupaten ?>
                                </h3>
                                <div style="height: 2px;background: #000;width: 100%;border-radius: 20px;margin-bottom: 2%">
                                    
                                </div>
                            </div>
                            <div class="module-body">
                                    <br>
                                    <table border="1" style="width:100%;margin:0 2.5%;font-size: 13.5px">
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor PERDES</th>
                                            <th>Tahun</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                        </tr>
                                            <?php
                                                $no = 1;
                                                 foreach ($ambil as $row) {
                                                    echo 
                                                        "
                                                    <tr>
                                                        <td>".$no."</td>
                                                        <td>".$row->nomor_perdes."</td>
                                                        <td>".$row->tahun."</td>
                                                        <td>".$row->status."</td>
                                                        <td>";
                                                            $tahunSekarang = date("Y");
                                                            // jika tahun rapbdes sama dengan tahun sekarang dan grantnya == 0 maka tombol hapus akan dimunculkan
                                                            if ($row->tahun >= $tahunSekarang && $row->grant == 0 ) {
                                                                ?>
                                                                Belum dijadikan APBDes
                                                                <?php
                                                            }else{
                                                                echo "Sudah dijadikan APBDes";
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>   
                                                        <?php
                                                        $no++;
                                                }   // tutup foreach
                                                ?>

                                    </table>
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->