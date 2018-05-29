<style>
#example th{
    padding: 15px;
}
#example td{
    padding: 5px;
    text-transform: uppercase;
}
</style>
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data Penduduk Desa</h3>
                            </div>
                            <div class="module-body">
                                    
                           
                            
                                
                            
                                    <form action="<?php echo base_url()?>Data_Penduduk/c_26_data_Penduduk/tambahdata" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <center>
                                                <input type="submit" value="Tambah Data" class="tombolsimpanubah"></input>
                                            </center>
                                            <div class="controls">
                                            </div>
                                        </div>
                                    </form>
                                    <br>
                                    
                                    <table id='example' class="display nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nomor KK</th>
                                                <th>Nomor NIK</th>
                                                <th>Nama</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Golongan Darah</th>
                                                <th>Alamat</th>
                                                <th>RT</th>
                                                <th>RW</th>
                                                <th>Agama</th>
                                                <th>Status Perkawinan</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Pekerjaan</th>
                                                <th>Hubungan Keluarga</th>
                                                <th>Kewarganegaraan</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama Ibu</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $a=0;
                                                 foreach ($ambildatapenduduk as $rowpenduduk) {
                                                    $a++;
                                                    $rowpenduduk->id;
                                                    ?>            
                                                    <tr>
                                                    <?php
                                                    echo 
                                                        "
                                                        <td>".$a."</td>
                                                        <td>".$rowpenduduk->no_kk."</td>
                                                        <td>".$rowpenduduk->no_NIK."</td>
                                                        <td>".$rowpenduduk->nama."</td>
                                                        <td>".$rowpenduduk->tempat_lahir."</td>
                                                        <td>".$rowpenduduk->tanggal_lahir."</td>
                                                        <td>".$rowpenduduk->jenis_kelamin."</td>
                                                        <td>".$rowpenduduk->golongan_darah."</td>
                                                        <td>".$rowpenduduk->Alamat."</td>
                                                        <td>".$rowpenduduk->RT."</td>
                                                        <td>".$rowpenduduk->RW."</td>
                                                        <td>".$rowpenduduk->agama."</td>
                                                        <td>".$rowpenduduk->status_perkawinan."</td>
                                                        <td>".$rowpenduduk->pendidikan_terakhir."</td>
                                                        <td>".$rowpenduduk->pekerjaan."</td>
                                                        <td>".$rowpenduduk->hubungan_keluarga."</td>
                                                        <td>".$rowpenduduk->kewarganegaraan."</td>
                                                        <td>".$rowpenduduk->nama_ayah."</td>
                                                        <td>".$rowpenduduk->nama_ibu."</td>
                                                        <td>";
                                                        if($_SESSION['level']==2){
                                                            
                                                            ?>
                                                                <a href="<?php echo base_url()?>Data_Penduduk/c_26_data_penduduk/lihat?id=<?php echo $rowpenduduk->id?>"><button  class='tombollihat'>Lihat</button></a>
                                                            <?php

                                                                }else{
                                                            ?>
                                                            <a href="<?php echo base_url()?>Data_Penduduk/c_26_data_penduduk/lihat?id=<?php echo $rowpenduduk->id?>"><button style='margin-bottom:5px' class='tombollihat span2'>Lihat</button></a>
                                                            <a href="<?php echo base_url()?>Data_Penduduk/c_26_data_penduduk/ubah?id=<?php echo $rowpenduduk->id?>"><button style='margin-bottom:5px' class='tombolsimpanubah span2'>Ubah</button></a>
                                                            <a href="<?php echo base_url()?>Data_Penduduk/c_26_data_penduduk/hapus?id=<?php echo $rowpenduduk->id?>"><button style='margin-bottom:5px' onClick='return hapus()' class='tombolhapus span2'>Hapus</button></a>
                                                            <?php
                                                               }
                                                            ?>
                                                        </td>
                                                        </tr>   
                                                        <?php
                                                }   
                                                ?>
                                                </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            </div>
<script type="text/javascript">
       $(document).ready(function() {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth(); //January is 0!
        var yyyy = today.getFullYear();

        if(dd<10) {
            dd='0'+dd
        } 

        if(mm<10) {
            mm='0'+mm
        } 
        var bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
        var cek = bulan[parseInt(mm)];
        today = dd+' / '+cek+' / '+yyyy;


        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                        {
                           extend: 'pdfHtml5',
                           text:      '<i class="fa fa-file-pdf-o"> PDF </i>',
                           exportOptions: {
                              modifier: {
                                 page: 'current'
                              }
                           },
                           header: true,
                           title: 'Data Penduduk '+today,
                           orientation: 'landscape',
                           customize: function(doc) {
                              doc.defaultStyle.fontSize = 5; //<-- set fontsize to 16 instead of 10 
                           }  
                        },
                        {
                           extend: 'excel',
                           text:      '<i class="fa fa-file-excel-o"> Excel </i>',
                           exportOptions: {
                              modifier: {
                                 page: 'current'
                              }
                           },
                           title: 'Data Penduduk '+today,
                             
                        },

                        {
                           extend: 'print',
                           text:      '<i class="fa fa-files-o"> Print </i>',
                           exportOptions: {
                              modifier: {
                                 page: 'current'
                              }
                           },
                           title: 'Data Penduduk '+today,
                             
                        },
            ]
        } );
    } );

    function simpan() {
        return confirm("Apakah anda benar akan menyimpan data ?");
    }
    function hapus() {
        return confirm("Apakah anda benar akan menghapus data ?");
    }

</script>
