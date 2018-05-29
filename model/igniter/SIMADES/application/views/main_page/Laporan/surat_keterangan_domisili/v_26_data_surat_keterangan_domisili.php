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
                <h3>Laporan Surat Keterangan Domisili</h3>
            </div>
            <div class="module-body">
                <div class="module-body table" style="height: 480px">
                    <table cellpadding="0" id='example' class="display nowrap" 
                        width="100%">
                        <thead>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">RT</th>
                                <th class="jaraktabel">RW</th>
                                <th class="jaraktabel">Nama</th>
                                <th class="jaraktabel">Tempat/Tgl Lahir</th>
                                <th class="jaraktabel">Jenis Kelamin</th>
                                <th class="jaraktabel">Pekerjaan</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Status Perkawinan</th>
                                <th class="jaraktabel">Kewarganegaraan</th>
                                <th class="jaraktabel">Alamat</th>
                                <th class="jaraktabel">Tujuan</th>
                                <th class="jaraktabel">Tanggal Surat</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">RT</th>
                                <th class="jaraktabel">RW</th>
                                <th class="jaraktabel">Nama</th>
                                <th class="jaraktabel">Tempat/Tgl Lahir</th>
                                <th class="jaraktabel">Jenis Kelamin</th>
                                <th class="jaraktabel">Pekerjaan</th>
                                <th class="jaraktabel">Agama</th>
                                <th class="jaraktabel">Status Perkawinan</th>
                                <th class="jaraktabel">Kewarganegaraan</th>
                                <th class="jaraktabel">Alamat</th>
                                <th class="jaraktabel">Tujuan</th>
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
                                                <td class='jaraktabel'>".$rowsurat->rt."</td>
                                                <td class='jaraktabel'>".$rowsurat->rw."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama."</td>
                                                <td class='jaraktabel'>".$rowsurat->tempat_lahir." / ".$rowsurat->tanggal_lahir."</td>
                                                <td class='jaraktabel'>".$rowsurat->jenis_kelamin."</td>
                                                <td class='jaraktabel'>".$rowsurat->pekerjaan."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama."</td>
                                                <td class='jaraktabel'>".$rowsurat->status_perkawinan."</td>
                                                <td class='jaraktabel'>".$rowsurat->kewarganegaraan."</td>
                                                <td class='jaraktabel'>".$rowsurat->alamat."</td>
                                                <td class='jaraktabel'>".$rowsurat->tujuan."</td>
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
                           title: 'Export Data Surat Keterangan Domisili '+today,
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
                           title: 'Export Data Surat Keterangan Domisili '+today,
                             
                        },

                        {
                           extend: 'print',
                           text:      '<i class="fa fa-files-o"> Print </i>',
                           exportOptions: {
                              modifier: {
                                 page: 'current'
                              }
                           },
                           title: 'Export Data Surat Keterangan Domisili '+today,
                             
                        },
            ]
        } );
    } );
</script>