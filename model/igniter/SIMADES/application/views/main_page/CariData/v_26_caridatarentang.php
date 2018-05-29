<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                <p>Data Pencarian</p>
            </div>
        <div class="module-body">
            <select name="caridata" onchange="ambildata()">
                <option value="Seluruh" id="seluruh">Seluruh</option>
                <option value="Rentang Tanggal" id="rentangtanggal" selected>Rentang Tanggal</option>
            </select>
            <form action="<?php echo base_url()?>CariData/c_26_caridata/rentangtanggal" method="POST">
              <h3><input type="date" name="tanggalawal" style="height: 45px" class="span2"></input> s/d <input type="date" style="height: 45px" name="tanggalakhir" class="span2">
                <input type="submit" value="Cari Data" class="span2 tombolsimpanubah"></input></input></h3>
            </form>
            <br>
            <table id="example" class="display nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Surat</th>
                            <th>Jenis Surat</th>
                            <th>Nomor NIK</th>
                            <th>Nama Pemohon</th>
                            <th>Alamat Pemohon</th>
                            <th>Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $a=0;
                                foreach ($ambildataasalusul as $rowasalusul) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowasalusul->nomor_surat."</td>
                                        <td>Surat Keterangan Asal Usul</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowasalusul->nama."</td>
                                        <td class='cursor'>".$rowasalusul->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowasalusul->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   

                            <?php                     
                                }
                                 
                                foreach ($ambildatabelummenikah as $rowbelummenikah) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowbelummenikah->nomor_surat."</td>
                                        <td>Surat Keterangan Belum Menikah</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowbelummenikah->nama."</td>
                                        <td class='cursor'>".$rowbelummenikah->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowbelummenikah->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   

                            <?php                            
                                }
                                
                                foreach ($ambildatadomisili as $rowdomisili) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowdomisili->nomor_surat."</td>
                                        <td>Surat Keterangan Domisili</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowdomisili->nama."</td>
                                        <td class='cursor'>".$rowdomisili->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowdomisili->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                         
                            <?php    
                                }
                                
                                foreach ($ambildatadomisiliperusahaan as $rowdomisiliperusahaan) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowdomisiliperusahaan->nomor_surat."</td>
                                        <td>Surat Keterangan Domisili Perusahaan</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowdomisiliperusahaan->nama."</td>
                                        <td class='cursor'>".$rowdomisiliperusahaan->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowdomisiliperusahaan->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
 
                            <?php                            
                                }
                            
                                foreach ($ambildatakelahiran as $rowkelahiran) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowkelahiran->nomor_surat."</td>
                                        <td>Surat Keterangan Kelahiran</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowkelahiran->nama_ibu_kandung."</td>
                                        <td class='cursor'>".$rowkelahiran->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowkelahiran->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php
                                }
                            
                                foreach ($ambildatakematian as $rowkematian) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowkematian->nomor_surat."</td>
                                        <td>Surat Keterangan Kematian</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowkematian->nama."</td>
                                        <td class='cursor'>".$rowkematian->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowkematian->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                             
                                }
                                
                                foreach ($ambildatapembuatanskck as $rowpembuatanskck) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowpembuatanskck->nomor_surat."</td>
                                        <td>Surat Keterangan Pembuatan SKCK</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowpembuatanskck->nama."</td>
                                        <td class='cursor'>".$rowpembuatanskck->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowpembuatanskck->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                           
                                }
                                 
                                foreach ($ambildatapermohonanimb as $rowpermohonanimb) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowpermohonanimb->nomor_surat."</td>
                                        <td>Surat Permohonan Izin Mendirikan Bangunan</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowpermohonanimb->nama."</td>
                                        <td class='cursor'>".$rowpermohonanimb->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowpermohonanimb->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php               
                                }
                                
                                foreach ($ambildatapindah as $rowpindah) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowpindah->nomor_surat."</td>
                                        <td>Surat Keterangan Pindah</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowpindah->nama_lengkap."</td>
                                        <td class='cursor'>".$rowpindah->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowpindah->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                 
                                foreach ($ambildatatentangorangtua as $rowtentangorangtua) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowtentangorangtua->nomor_surat."</td>
                                        <td>Surat Keterangan Tentang Orang Tua</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowtentangorangtua->nama."</td>
                                        <td class='cursor'>".$rowtentangorangtua->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowtentangorangtua->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                
                                foreach ($ambildatatidakmampu as $rowtidakmampu) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowtidakmampu->nomor_surat."</td>
                                        <td>Surat Keterangan Tidak Mampu</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowtidakmampu->nama."</td>
                                        <td class='cursor'>".$rowtidakmampu->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowtidakmampu->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php             
                                }
                                
                                foreach ($ambildatauntuknikah as $rowuntuknikah) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowuntuknikah->nomor_surat."</td>
                                        <td>Surat Keterangan Untuk Nikah</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowuntuknikah->nama."</td>
                                        <td class='cursor'>".$rowuntuknikah->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowuntuknikah->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                
                                foreach ($ambildatawali as $rowwali) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowwali->nomor_surat."</td>
                                        <td>Surat Keterangan Wali</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowwali->nama."</td>
                                        <td class='cursor'>".$rowwali->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowwali->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                
                                foreach ($ambildatawarga as $rowwarga) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowwarga->nomor_surat."</td>
                                        <td>Surat Keterangan Warga</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowwarga->nama."</td>
                                        <td class='cursor'>".$rowwarga->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowwarga->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                 
                                foreach ($ambildataizinkeramaian as $rowizinkeramaian) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowizinkeramaian->nomor_surat."</td>
                                        <td>Surat Permohonan Izin Keramaian</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowizinkeramaian->nama."</td>
                                        <td class='cursor'>-</td>
                                        <td class='cursor'>".TanggalIndo($rowizinkeramaian->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                
                                foreach ($ambildatapengantarpembuatankk as $rowpengantarpembuatankk) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowpengantarpembuatankk->nomor_surat."</td>
                                        <td>Surat Pengantar Pembuatan KK</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowpengantarpembuatankk->nama."</td>
                                        <td class='cursor'>".$rowpengantarpembuatankk->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowpengantarpembuatankk->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                
                                foreach ($ambildatapengantarpembuatanktp as $rowpengantarpembuatanktp) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowpengantarpembuatanktp->nomor_surat."</td>
                                        <td>Surat Pengantar Pembuatan KTP</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowpengantarpembuatanktp->nama."</td>
                                        <td class='cursor'>".$rowpengantarpembuatanktp->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowpengantarpembuatanktp->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                 
                                foreach ($ambildatapermohonanaktakelahiran as $rowpermohonanaktakelahiran) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowpermohonanaktakelahiran->nomor_surat."</td>
                                        <td>Surat Permohonan Akta Kelahiran</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowpermohonanaktakelahiran->nama_ayah."</td>
                                        <td class='cursor'>".$rowpermohonanaktakelahiran->alamat_ayah."</td>
                                        <td class='cursor'>".TanggalIndo($rowpermohonanaktakelahiran->tanggal_surat)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                
                                foreach ($ambildatapermohonankkdinas as $rowpermohonankkdinas) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowpermohonankkdinas->nomor_surat."</td>
                                        <td>Surat Permohonan KK Dinas</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowpermohonankkdinas->nama."</td>
                                        <td class='cursor'>".$rowpermohonankkdinas->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowpermohonankkdinas->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                
                                foreach ($ambildatapermohonanktpdinas as $rowpermohonanktpdinas) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowpermohonanktpdinas->nomor_surat."</td>
                                        <td>Surat Permohonan KTP Dinas</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowpermohonanktpdinas->nama."</td>
                                        <td class='cursor'>".$rowpermohonanktpdinas->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowpermohonanktpdinas->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                
                                foreach ($ambildatapersetujuanmempelai as $rowpersetujuanmempelai) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowpersetujuanmempelai->nomor_surat."</td>
                                        <td>Surat Persetujuan Mempelai</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowpersetujuanmempelai->nama_suami."</td>
                                        <td class='cursor'>".$rowpersetujuanmempelai->alamat_suami."</td>
                                        <td class='cursor'>".TanggalIndo($rowpersetujuanmempelai->tanggal)."</td>
                                        ";
                                ?>
                            </tr>   
                            <?php                     
                                }
                                
                                foreach ($ambildatatugasdesa as $rowtugasdesa) {
                                    $a++;
                            ?>
                            <tr>
                                <?php
                                    echo 
                                        "
                                        <td id='nomor".$a."' class='cursor'>".$a."</td>
                                        <td class='cursor'>".$rowtugasdesa->nomor_surat."</td>
                                        <td>Surat Perintah Tugas</td>
                                        <td>-</td>
                                        <td class='cursor'>".$rowtugasdesa->nama."</td>
                                        <td class='cursor'>".$rowtugasdesa->alamat."</td>
                                        <td class='cursor'>".TanggalIndo($rowtugasdesa->tanggal)."</td>
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

<script>
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
                           title: 'Export Data Tanggal '+today,
                           orientation: 'landscape',
                           customize: function(doc) {
                              doc.defaultStyle.fontSize = 10; //<-- set fontsize to 16 instead of 10 
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
                           title: 'Export Data Tanggal '+today,
                             
                        },

                        {
                           extend: 'print',
                           text:      '<i class="fa fa-files-o"> Print </i>',
                           exportOptions: {
                              modifier: {
                                 page: 'current'
                              }
                           },
                           title: 'Export Data Tanggal '+today,
                             
                        },
            ]
        } );
    } );
    

    function ambildata () {
        var seluruh = document.getElementById('seluruh').value;
        var rentang = document.getElementById('rentangtanggal').value;
        if(seluruh = "seluruh"){
         window.location="<?php echo base_url()?>CariData/c_26_caridata/";
        }else if(rentang = "rentangtanggal"){
         window.location="<?php echo base_url()?>CariData/c_26_caridata/rentang";
        }
    }
</script>
