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
                <h3>Laporan Surat Persetujuan Mempelai</h3>
            </div>
            <div class="module-body">
                <div class="module-body table">
                    <table cellpadding="0" id="example" class="display nowrap" 
                        width="100%">
                        <thead>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">Nama Suami</th>
                                <th class="jaraktabel">Bin</th>
                                <th class="jaraktabel">Tempat/Tgl Lahir Suami</th>
                                <th class="jaraktabel">Kewarganegaraan Suami</th>
                                <th class="jaraktabel">Agama Suami</th>
                                <th class="jaraktabel">Pekerjaan Suami</th>
                                <th class="jaraktabel">Alamat Suami</th>
                                <th class="jaraktabel">Nama Istri</th>
                                <th class="jaraktabel">Binti</th>
                                <th class="jaraktabel">Tempat/Tgl Lahir Istri</th>
                                <th class="jaraktabel">Kewarganegaraan Istri</th>
                                <th class="jaraktabel">Agama Istri</th>
                                <th class="jaraktabel">Pekerjaan Istri</th>
                                <th class="jaraktabel">Alamat Istri</th>
                                <th class="jaraktabel">Tanggal Surat</th>
                                <th class="jaraktabel">Penanda Tangan Suami</th>
                                <th class="jaraktabel">Penanda Tangan Istri</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="jaraktabel">No</th>
                                <th class="jaraktabel">Nomor Surat</th>
                                <th class="jaraktabel">Nama Suami</th>
                                <th class="jaraktabel">Bin</th>
                                <th class="jaraktabel">Tempat/Tgl Lahir Suami</th>
                                <th class="jaraktabel">Kewarganegaraan Suami</th>
                                <th class="jaraktabel">Agama Suami</th>
                                <th class="jaraktabel">Pekerjaan Suami</th>
                                <th class="jaraktabel">Alamat Suami</th>
                                <th class="jaraktabel">Nama Istri</th>
                                <th class="jaraktabel">Binti</th>
                                <th class="jaraktabel">Tempat/Tgl Lahir Istri</th>
                                <th class="jaraktabel">Kewarganegaraan Istri</th>
                                <th class="jaraktabel">Agama Istri</th>
                                <th class="jaraktabel">Pekerjaan Istri</th>
                                <th class="jaraktabel">Alamat Istri</th>
                                <th class="jaraktabel">Tanggal Surat</th>
                                <th class="jaraktabel">Penanda Tangan Suami</th>
                                <th class="jaraktabel">Penanda Tangan Istri</th>
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
                                                <td class='jaraktabel'>".$rowsurat->nama_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->bin."</td>
                                                <td class='jaraktabel'>".$rowsurat->tempat_lahir_suami." / ".$rowsurat->tanggal_lahir_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->kewarganegaraan_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->pekerjaan_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->alamat_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->nama_istri."</td>
                                                <td class='jaraktabel'>".$rowsurat->binti."</td>
                                                <td class='jaraktabel'>".$rowsurat->tempat_lahir_istri." / ".$rowsurat->tanggal_lahir_istri."</td>
                                                <td class='jaraktabel'>".$rowsurat->kewarganegaraan_istri."</td>
                                                <td class='jaraktabel'>".$rowsurat->agama_istri."</td>
                                                <td class='jaraktabel'>".$rowsurat->pekerjaan_istri."</td>
                                                <td class='jaraktabel'>".$rowsurat->alamat_istri."</td>
                                                <td class='jaraktabel'>".TanggalIndo($rowsurat->tanggal)."</td>
                                                <td class='jaraktabel'>".$rowsurat->penanda_tangan_suami."</td>
                                                <td class='jaraktabel'>".$rowsurat->penanda_tangan_istri."</td>
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
                           title: 'Export Data Surat Persetujuan Mempelai '+today,
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
                           title: 'Export Data Surat Persetujuan Mempelai '+today,
                             
                        },

                        {
                           extend: 'print',
                           text:      '<i class="fa fa-files-o"> Print </i>',
                           exportOptions: {
                              modifier: {
                                 page: 'current'
                              }
                           },
                           title: 'Export Data Surat Persetujuan Mempelai '+today,
                             
                        },
            ]
        } );
    } );

</script>