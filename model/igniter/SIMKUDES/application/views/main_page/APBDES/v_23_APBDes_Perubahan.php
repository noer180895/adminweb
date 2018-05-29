                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>[Rencana] Anggaran Pembangunan dan Belanja Desa</h3>
                                <!-- <div style="margin: 1% 0 0 0">
                                    <a class="btn btn-default" href="<?php echo base_url()?>RAPBDes/c_26_RAPBDes/pdf">Export PDF</a>
                                </div> -->
                            </div>
                            <div class="module-body">
                                    <form action="<?php echo base_url()?>RAPBDes/c_26_RAPBDes/tambah" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <!-- <center>
                                                <input type="submit" value="Tambah Data" class="btn btn-primary"></input>
                                            </center> -->
                                            <div class="controls">
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <table border="0" class="datatable-1 table table-bordered table-striped     display">
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor PERDES</th>
                                            <th>Tahun</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
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
                                                                <a href="<?php echo base_url()?>beranda/c_26_beranda/masukTahunGETPerubahan?tahun=<?php echo $row->tahun ?>"><button style='margin-bottom:5px' class='btn btn-primary'>Buat</button></a>
                                                                <a href="<?php echo base_url()?>APBDEs/c_26_APBDes/hapusPerubahan?id=<?php echo $row->nomor_perdes?>&tahun=<?php echo $row->tahun ?>"><button style='margin-bottom:5px' onClick='return hapus()' class='btn btn-primary'>Hapus</button></a>
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
<script type="text/javascript">
    function simpan() {
        return confirm("Apakah anda benar akan menyimpan data ?");
    }


</script>