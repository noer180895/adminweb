<style>
#example th{
    padding: 15px
}
#example td{
    padding: 15px
    text-transform: uppercase;
}
</style>
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data Perusahaan yang sudah berdomisili di daerah ini</h3>
                            </div>
                            <div class="module-body">
                                
                                    <form action="<?php echo base_url()?>Data_Penduduk/c_26_data_perusahaan/tambahdata" class="form-horizontal row-fluid" method="POST">
                                        
                                    </form>
                                    <br>
                                    
                                    <table id="example" class="display nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Alamat Perusahaan</th>
                                                <th>Nomor Telepon</th>
                                                <th>Bidang Perusaahan</th>
                                                <th>Notaris Pendiran</th>
                                                <th>Nomor Pendiran</th>
                                                <th>Tanggal Pendirian</th>
                                                <th>Jam Kerja</th>
                                                <th>Jumlah Karyawan</th>
                                                <th>Luas Tanah</th>
                                                <th>Luas Bangunan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $a=0;
                                                 foreach ($ambildataperusahaan as $rowperusahaan) {
                                                    $a++;
                                                    $rowperusahaan->id;
                                                    ?>            
                                                    <tr>
                                                    <?php
                                                    echo 
                                                        "
                                                        <td>".$a."</td>
                                                        <td>".$rowperusahaan->nama_perusahaan."</td>
                                                        <td>".$rowperusahaan->alamat_perusahaan."</td>
                                                        <td>".$rowperusahaan->nomor_telepon."</td>
                                                        <td>".$rowperusahaan->bidang."</td>
                                                        <td>".$rowperusahaan->notaris_pendirian."</td>
                                                        <td>".$rowperusahaan->nomor_pendirian."</td>
                                                        <td>".$rowperusahaan->tanggal_pendirian."</td>
                                                        <td>".$rowperusahaan->jam_kerja." s/d ".$rowperusahaan->jam_kerja_sampai."</td>
                                                        <td>".$rowperusahaan->jumlah_karyawan."</td>
                                                        <td>".$rowperusahaan->luas_tanah."</td>
                                                        <td>".$rowperusahaan->luas_bangunan."</td>
                                                        <td>";
                                                        if($_SESSION['level']==2){
                                                            
                                                            ?>
                                                                <a href="<?php echo base_url()?>Data_Perusahaan/c_26_data_perusahaan/lihat?id=<?php echo $rowperusahaan->id?>"><button  class='tombollihat'>Lihat</button></a>
                                                            <?php

                                                                }else{
                                                            ?>
                                                            <a href="<?php echo base_url()?>Data_Perusahaan/c_26_data_perusahaan/lihat?id=<?php echo $rowperusahaan->id?>"><button style='margin-bottom:5px' class='tombollihat span2'>Lihat</button></a>
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
                           title: 'Data Perusahaan '+today,
                           verticalAlign: 'middle',
                           orientation: 'landscape',
                           customize: function(doc) {
                              doc.defaultStyle.fontSize = 10; //<-- set fontsize to 16 instead of 10 
                           }  
                        },
                        {
                           extend: 'excelHtml5',
                           text:      '<i class="fa fa-file-excel-o"> Excel </i>',
                           exportOptions: {
                              modifier: {
                                 page: 'current'
                              }
                           },
                           title: 'Data Perusahaan '+today,
                             
                        },

                        {
                           extend: 'print',
                           text:      '<i class="fa fa-files-o"> Print </i>',
                           exportOptions: {
                              modifier: {
                                 page: 'current'
                              }
                           },
                           title: 'Data Perusahaan '+today,
                             
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
