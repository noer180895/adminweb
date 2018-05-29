
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>[Rencana] Anggaran Pembangunan dan Belanja Desa</h3>
                            </div>
                            <div class="module-body">
                                    <form action="<?php echo base_url()?>RAPBDes/c_26_RAPBDes/tambah" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <center>
                                                <input type="submit" value="Tambah Data" class="btn btn-primary"></input>
                                            </center>
                                            <div class="controls">
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    <table border="0" class="datatable-1 table table-bordered table-striped     display">
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor PERDES</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <tr>
                                            <?php
                                                 foreach ($ambil as $row) {
                                                    echo 
                                                        "
                                                        <td>".$row->id."</td>
                                                        <td>".$row->nomor_perdes."</td>
                                                        <td>".$row->status."</td>
                                                        <td>";
                                                        if($_SESSION['level']==2){
                                                            
                                                            ?>
                                                                <a href="<?php echo base_url()?>APBDes/c_26_APBDes/?id=<?php echo $row->id?>"><button  class='btn btn-primary'>Buat</button></a>
                                                            <?php

                                                                }else{
                                                            ?>
                                                            <a href="<?php echo base_url()?>?id=<?php echo $row->id?>"><button style='margin-bottom:5px' class='btn btn-primary'>Buat</button></a>
                                                            <a href="<?php echo base_url()?>APBDes/c_26_APBDes/ubah?id=<?php echo $row->id?>"><button style='margin-bottom:5px' class='btn btn-primary'>Ubah</button></a>
                                                            <a href="<?php echo base_url()?>APBDes/c_26_APBDes/hapus?id=<?php echo $row->id?>"><button style='margin-bottom:5px' onClick='return hapus()' class='btn btn-primary'>Hapus</button></a>
                                                            <?php
                                                               }
                                                            ?>
                                                        </td>
                                                        </tr>   
                                                        <?php
                                                }   
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