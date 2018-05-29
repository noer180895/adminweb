
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data Penduduk Desa</h3>
                            </div>
                            <div class="module-body">

                            <?php
                                $ambil = $ambilsuratberdasarkan[0]->nama_surat;
                            ?>
                            <input type="hidden" value="<?php echo $ambil;?>" id="surat"></input>
                                    <center>
                                    <h2>Pembuatan Surat <br> = <u><?php echo $ambil ?></u> = </h2>
                                    
                            <form action="<?php echo base_url()?>surat/c_26_data_surat/databuat?id=<?php echo $_GET['id'];?>" method="POST">
                                <div class="control-group">
                                    <label style="font-size: 20px">Cari <input type="text" placeholder="Cari data .." name="nama" style="font-size: 20px;height: 20px"></input>
                                    <input type="submit" class="tombolsimpanubah" name="cari" value="Cari Data"></input></label>
                                </div>
                            </form>

                                    </center>
                                     <div style="overflow: scroll;height: 400px" >
                                    <table border="0" class="datatable-1 table table-bordered table-striped     display">
                                        
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
                                            </tr>
                                        <tbody>
                                        <style type="text/css">
                                                .cursor:hover{
                                                    cursor: pointer;

                                                }
                                                </style>
                                            
                                            
                                                <?php
                                                if(isset($ambildatapenduduk)){
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
                                                    }else{
                                                        if(isset($ambildatapendudukberdasarkan)){
                                                    ?>

                                                    <?php

                                                $a=0;
                                                     foreach ($ambildatapendudukberdasarkan as $rowpendudukberdasarkan) {
                                                        
                                               
                                                        $a++;
                                                        ?>

                                                            <tr onClick="ambildataberdasarkan('<?php echo $rowpendudukberdasarkan->id;?>')">
                                                        <?php
                                                        echo 
                                                            "
                                                            <td id='id".$rowpendudukberdasarkan->id."' class='cursor'>".$a."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->no_kk."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->no_NIK."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->nama."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->tempat_lahir."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->tanggal_lahir."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->jenis_kelamin."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->golongan_darah."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->Alamat."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->RT."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->RW."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->agama."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->status_perkawinan."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->pendidikan_terakhir."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->pekerjaan."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->hubungan_keluarga."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->kewarganegaraan."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->nama_ayah."</td>
                                                            <td class='cursor'>".$rowpendudukberdasarkan->nama_ibu."</td>";
                                                            ?>
                                                            </tr>   
                                                            <?php
                                                            
                                                    }
                                                    }
                                                    }   
                                                    ?>
                                                
                                                </tbody>
                                    </table>
                                    </div>
                                        
                                    
                                            </div>
                                </div>
                            </div>
                            </div>
                            <script>
       
        function ambildata (str) {
            var nomor = document.getElementById('nomor'+str).innerHTML;
            var surat = document.getElementById('surat').value;
                     window.location="<?php echo base_url()?>surat/c_26_data_surat/tampilpilihandata?iddata="+str+"&surat="+surat;
                }
        function ambildataberdasarkan (strr) {
            var surat = document.getElementById('surat').value;
                     window.location="<?php echo base_url()?>surat/c_26_data_surat/tampilpilihandata?iddata="+strr+"&surat="+surat;
                }
    </script>
