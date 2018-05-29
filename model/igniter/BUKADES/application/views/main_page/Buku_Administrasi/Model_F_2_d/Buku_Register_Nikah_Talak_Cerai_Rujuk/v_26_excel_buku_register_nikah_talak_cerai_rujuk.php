<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Register Nikah Talak Cerai Rujuk.xls");
?>

                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                            <table>
                                <tr>
                                    <td colspan="16">
                                <center><h3>Daftar Buku Register Nikah Talak Cerai Rujuk Tahun <?php echo date('Y')?></h3></center>
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="16">
                                        <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="16">
                                        <p>Model F 2 d</p>
                                    </td>
                                </tr>
                            </table>
                            </div>
                            <div class="module-body">
                            
                            <style type="text/css">
                            #tengah{
                                vertical-align: middle;
                                text-align: center;
                            }
                            </style>
                                <div style="height: 410px; overflow: scroll;">
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th id="tengah" rowspan="2">Nomor</th>
                                                <th id="tengah" >Tanggal</th>
                                                <th id="tengah" colspan="6">Suami</th>
                                                <th id="tengah" colspan="6">Istri</th>
                                                <th id="tengah" rowspan="2">Wali</th>
                                                <th id="tengah" rowspan="2">Keterangan</th>
                                            </tr>
                                            <tr>
                                                <th id="tengah">Menikah Talak Cerai Rujuk</th>
                                                <th id="tengah">Nama</th>
                                                <th id="tengah">Alamat</th>
                                                <th id="tengah">Nomor KTP</th>
                                                <th id="tengah">Status</th>
                                                <th id="tengah">Tanggal Lahir</th>
                                                <th id="tengah">Pekerjaan</th>
                                                <th id="tengah">Nama</th>
                                                <th id="tengah">Alamat</th>
                                                <th id="tengah">Nomor KTP</th>
                                                <th id="tengah">Status</th>
                                                <th id="tengah">Tanggal Lahir</th>
                                                <th id="tengah">Pekerjaan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <?php
                                                $a=0;
                                                    foreach ($ambildata as $row) {
                                                        $a++;
                                                        $id = $row->id;
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$a."</td>
                                                        <td id='tengah'>".$row->tanggal_register."</td>
                                                        <td id='tengah'>".$row->nama_suami."</td>
                                                        <td id='tengah'>".$row->alamat_suami."</td>
                                                        <td id='tengah'>".$row->no_ktp_suami."</td>
                                                        <td id='tengah'>".$row->status_suami."</td>
                                                        <td id='tengah'>".$row->tanggal_lahir_suami."</td>
                                                        <td id='tengah'>".$row->pekerjaan_suami."</td>
                                                        <td id='tengah'>".$row->nama_istri."</td>
                                                        <td id='tengah'>".$row->alamat_istri."</td>
                                                        <td id='tengah'>".$row->no_ktp_istri."</td>
                                                        <td id='tengah'>".$row->status_istri."</td>
                                                        <td id='tengah'>".$row->tanggal_lahir_istri."</td>
                                                        <td id='tengah'>".$row->pekerjaan_istri."</td>
                                                        <td id='tengah'>".$row->wali."</td>
                                                        <td id='tengah'>".$row->keterangan."</td>
                                                        ";
                                                        ?>
                                                    </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                                </tbody>
                                                <tfoot>
                                                    
                                                </tfoot>
                                        </table>
                                        </div>
                                    </div>

                            </div>
                            </div>
                            </div>
                            </div>
