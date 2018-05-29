            <div class="span9">
                <div class="content">
                    <div class="module">
                            <div class="module-head">
                                <h3>Data rekening </h3>
                            </div>
                            <?php
                                if($_SESSION['level'] == 1){

                            ?>
                                <a href="<?php echo base_url()?>rekening/c_23_rekening/viewTambah">
                                    <button class="btn btn-success" style="margin:10 10px">Tambah Data</button>
                                </a>    
                            <?php
                                }else{

                                }
                            ?>


                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nomor Rekening</th>
                                            <th>Uraian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody width="100%">
                                            
                                                <?php
                                                 foreach ($ambil as $row) {
                                                    echo 
                                                        "
                                                    <tr>
                                                        <td>".$row->nomor_rekening."</td>
                                                        <td>".$row->uraian."</td>
                                                        <td>";
                                                            if($_SESSION['level']==2){
                                                            
                                                            ?>
                                                                <a href="<?php echo base_url()?>rekening/c_23_rekening/viewLihat?id=<?php echo $row->nomor_rekening?>"><button style='' class='btn btn-primary'>lihat</button></a>
                                                            <?php

                                                                }else{
                                                            ?>
                                                            <a href="<?php echo base_url()?>rekening/c_23_rekening/viewLihat?id=<?php echo $row->nomor_rekening?>"><button style=';margin-bottom:5px' class='btn btn-info'>lihat</button></a>
                                                            <a href="<?php echo base_url()?>rekening/c_23_rekening/viewUbah?id=<?php echo $row->nomor_rekening?>"><button style=';margin-bottom:5px' class='btn btn-primary'>ubah</button></a>
                                                            <a href="<?php echo base_url()?>rekening/c_23_rekening/hapus?id=<?php echo $row->nomor_rekening?>"><button onclick="return hapus()" style=';margin-bottom:5px' class='btn btn-danger'>hapus</button></a>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                    </tr>   
                                                        <?php
                                                }   
                                                ?>
<script type="text/javascript">
  function hapus () {
    return confirm("Anda yakin akan menghapus data ?");
  }
  function ubah () {
    return confirm("Anda yakin akan mengubah data ?");
  }
  function simpan () {
    return confirm("Anda yakin akan menyimpan data ?");
  }
</script>                                               
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nomor Rekening</th>
                                            <th>Uraian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div><!--/.module-->
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>