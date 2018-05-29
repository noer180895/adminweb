
<style type="text/css">
.cursor:hover{
    cursor: pointer;
}
#example th{
    text-transform: uppercase;
}
#example td{
    text-transform: uppercase;
    text-align: center;
}
.jarak{
    margin-bottom: 3; 
    font-weight: bold;
    font-size: 20;
}
</style>
<div class="span9">
    <div class="content">
        <center>
        <div class="span9">
            <div class="module" style="padding: 10px">
                <?php 
                    foreach ($ambildata as $row) {
                ?>
                <div style="border-bottom: solid; ">
                    <table border="0">
                        <tr>
                            <td rowspan="6">
                                <img style="margin-top: -20px;" src="<?php echo base_url().$row->logo_desa?>" width="78px" height="78px">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <p class="jarak">Pemerintah Kabupaten <?php echo $row->nama_kabupaten?></p>
                                    <p class="jarak">Kecamatan <?php echo $row->nama_kecamatan?></p>
                                    <p class="jarak" style="margin-bottom: -10px">Desa \ Kelurahan <?php echo $row->nama_desa?></p>
                                </center>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <p style="padding-top: 10px;padding-right: 5px;padding-left: 5px; font-size: 13px;"><?php echo $row->alamat_desa?></p><br>
                                </center>
                            </td>
                        </tr>
                    </table>
                </div>
            <?php
                }
            ?>
            
            <div><br>
                <h4 style="text-align: left;padding-left: 12px">
                    <u>Pilih Data</u>
                </h4>
            </div>

            <div class="module-body table">
                <table id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor KK</th>
                            <th>Nomor NIK/KTP</th>
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
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $a=0;
                                 foreach ($ambildatapenduduk as $rowpenduduk) {
                                    $a++;
                            ?>
                            <tr onClick="ambildata('<?php echo $rowpenduduk->id;?>')">
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$rowpenduduk->id."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowpenduduk->no_kk."</td>
                                        <td class='cursor'>".$rowpenduduk->no_NIK."</td>
                                        <td class='cursor'>".$rowpenduduk->nama."</td>
                                        <td class='cursor'>".$rowpenduduk->tempat_lahir."</td>
                                        <td class='cursor'>".$rowpenduduk->tanggal_lahir."</td>
                                        <td class='cursor'>".$rowpenduduk->jenis_kelamin."</td>
                                        <td class='cursor'>".$rowpenduduk->golongan_darah."</td>
                                        <td class='cursor'>".$rowpenduduk->Alamat."</td>
                                        <td class='cursor'>".$rowpenduduk->RT."</td>
                                        <td class='cursor'>".$rowpenduduk->RW."</td>
                                        <td class='cursor'>".$rowpenduduk->agama."</td>
                                        <td class='cursor'>".$rowpenduduk->status_perkawinan."</td>
                                        <td class='cursor'>".$rowpenduduk->pendidikan_terakhir."</td>
                                        <td class='cursor'>".$rowpenduduk->pekerjaan."</td>
                                        <td class='cursor'>".$rowpenduduk->hubungan_keluarga."</td>
                                        <td class='cursor'>".$rowpenduduk->kewarganegaraan."</td>
                                        <td class='cursor'>".$rowpenduduk->nama_ayah."</td>
                                        <td class='cursor'>".$rowpenduduk->nama_ibu."</td>";
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
        </center>
    </div>
    <!--/.content-->
</div>
<!--/.span9-->
<script>

    $(document).ready(function() {
    $('#example').DataTable();
    } );
    
    function ambildata (str) {
        var nomor = document.getElementById('nomor'+str).innerHTML;
        window.location="<?php echo base_url()?>surat/c_26_data_surat/pilihjenissurat?id="+str;
    }
</script>
