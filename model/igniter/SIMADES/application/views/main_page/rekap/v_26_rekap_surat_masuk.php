<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <h3>Surat Masuk</h3>
            </div>
            <div class="module-body">
                <style type="text/css">
                #example th{
                    padding: 5px;
                }
                #example td{
                    padding: 5px;
                }
                </style>
                <table id="example" cellpadding="0" class="display nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengirim</th>
                            <th>Nomor surat</th>
                            <th>Tanggal surat</th>
                            <th>Nama Surat</th>
                            <th>Nama File Surat</th>
                            <th>Tanggal Pemasukan Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengirim</th>
                            <th>Nomor surat</th>
                            <th>Tanggal surat</th>
                            <th>Nama Surat</th>
                            <th>Nama File Surat</th>
                            <th>Tanggal Pemasukan Surat</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <?php 
                                foreach ($ambildata as $row) {

                                    echo "
                                        <td>".$row->id."</td>
                                        <td>".$row->dari_surat_masuk."</td>
                                        <td>".$row->nomor_surat."</td>
                                        <td>".TanggalIndodua($row->tanggal_surat)."</td>
                                        <td>".$row->nama_surat."</td>
                                        <td>".substr($row->file_surat_masuk, 18)."</td>
                                        <td>".TanggalIndo($row->tanggal)."</td>
                                        ";
                            ?>
                                <td style="padding: 15px">
                                    <a href='<?php echo base_url().$row->file_surat_masuk;?>' target="_blank" class="tombolexport">
                                        Download
                                    </a>
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
</script>