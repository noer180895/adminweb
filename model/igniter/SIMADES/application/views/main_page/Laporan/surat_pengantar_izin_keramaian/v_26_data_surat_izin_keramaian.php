<style type="text/css">
    .jaraktabel{
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
        padding-bottom: 5px;
    }
</style>         
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Laporan Surat Pengantar Izin Keramaian</h3>
            </div>
            <div class="module-body">
                <div class="module-body table">
                    <table cellpadding="0" id="example" class="display nowrap" 
                        width="100%">
                        <thead>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">Lampiran</th>
                                <th class="jaraktabel">Perihal</th>
                                <th class="jaraktabel">Kepada</th>
                                <th class="jaraktabel">Penyampai</th>
                                <th class="jaraktabel">Nama</th>
                                <th class="jaraktabel">Umur</th>
                                <th class="jaraktabel">Jenis Kelamin</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Pekerjaan</th>
                                <th class="jaraktabel">Acara</th>
                                <th class="jaraktabel">waktu Pelaksanaan Awal</th>
                                <th class="jaraktabel">waktu Pelaksanaan Akhir</th>
                                <th class="jaraktabel">Tempat</th>
                                <th class="jaraktabel">Tanggal Surat</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">Lampiran</th>
                                <th class="jaraktabel">Perihal</th>
                                <th class="jaraktabel">Kepada</th>
                                <th class="jaraktabel">Penyampai</th>
                                <th class="jaraktabel">Nama</th>
                                <th class="jaraktabel">Umur</th>
                                <th class="jaraktabel">Jenis Kelamin</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Pekerjaan</th>
                                <th class="jaraktabel">Acara</th>
                                <th class="jaraktabel">waktu Pelaksanaan Awal</th>
                                <th class="jaraktabel">waktu Pelaksanaan Akhir</th>
                                <th class="jaraktabel">Tempat</th>
                                <th class="jaraktabel">Tanggal Surat</th>
                            </tr>
                        </tfoot>
                        <tbody>
                                <?php
                                    $a=0;
                                     foreach ($ambildatasurat as $rowsurat) {
                                        $id=$rowsurat->id;
                                        $a++;
                                ?>

                                    <tr onClick="ambildata('<?php echo $a;?>')">
                                        <?php
                                            echo 
                                                "
                                                <td id='nomor".$a."' class='jaraktabel'>".$a."</td>
                                                <td class='jaraktabel'>".$rowsurat->nomor_surat."</td>
                                                <td class='jaraktabel'>".$rowsurat->lampiran."</td>
                                                <td class='jaraktabel'>".$rowsurat->perihal."</td>
                                                <td class='jaraktabel'>".$rowsurat->kepada."</td>
                                                <td class='jaraktabel'>".$rowsurat->penyampai."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama."</td>
                                                <td class='jaraktabel'>".$rowsurat->umur."</td>
                                                <td class='jaraktabel'>".$rowsurat->jenis_kelamin."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama."</td>
                                                <td class='jaraktabel'>".$rowsurat->pekerjaan."</td>
                                                <td class='jaraktabel'>".$rowsurat->acara."</td>
                                                <td class='jaraktabel'>".TanggalIndodua($rowsurat->waktu_pelaksanaan_awal)."</td>
                                                <td class='jaraktabel'>".TanggalIndodua($rowsurat->waktu_pelaksanaan_akhir)."</td>
                                                <td class='jaraktabel'>".$rowsurat->tempat."</td>
                                                <td class='jaraktabel'>".TanggalIndo($rowsurat->tanggal)."</td>
                                                ";
                                        ?>
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
</div>
<?php
    function TanggalIndo($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, -4);
        $bulan = substr($date, 3, 2);
        $tgl   = substr($date, 0, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }
?>
<?php
    function TanggalIndodua($date){
        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl   = substr($date, 8, 2);
        $result = $tgl." ".$BulanIndo[(int)$bulan-1]." ".$tahun;     
        return($result);
    }

?>
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
                           title: 'Export Data Surat Pengantar Izin Keramaian '+today,
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
                           title: 'Export Data Surat Pengantar Izin Keramaian '+today,
                             
                        },

                        {
                           extend: 'print',
                           text:      '<i class="fa fa-files-o"> Print </i>',
                           exportOptions: {
                              modifier: {
                                 page: 'current'
                              }
                           },
                           title: 'Export Data Surat Pengantar Izin Keramaian '+today,
                             
                        },
            ]
        } );
    } );

</script>