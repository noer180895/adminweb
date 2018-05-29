    
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data Penduduk Desa Pembuat Surat</h3>
                            </div>
                            <div class="module-body">
                                
                                   

                                  <?php
                                  foreach ($ambildatapendudukberdasarkan as $row) {
                                  ?>
                                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpanskpindah" method="POST">
                                <?php
                                    
                                    foreach ($ambilsuratberdasarkan as $rowsurat) {
                                        foreach ($ambiljumlahsurat as $rowjumlah) {
                                     
                                ?>
                                <input type="hidden" name="jumlah" value="<?php echo $rowjumlah->jumlah_keluar?>"></input>
                                     <?php
                                        }
                                     ?>  
                                <input type="hidden" name="nomorsurat" value="<?php echo $rowsurat->nomor_surat;?>"></input>
                                <input type="hidden" name="namasurat" value="<?php echo $rowsurat->nama_surat;?>"></input>
                                <div style="border-bottom: solid;">
                                    
                                <table width="100%" border="0">
                                    <tr>
                                        <td>
                                            <h3 style="text-transform: capitalize;">Untuk Surat :    <?php echo $rowsurat->nama_surat;?></h3>
                                            
                                        </td>
                                        <td style="text-align: right;">
                                             <h3>Format No.Surat :    <?php echo $rowsurat->nomor_surat;?></h3>
                                            
                                        </td>
                                    </tr>
                                </table>
                                </div><br>
                                <table width="100%" border="0">
                                    <tr>
                                        <td>
                                            
                                            <table width="100%" border="0">
                                            <tr>
                                                <td>
                                                    <p class="span1">No KK </p>:  <input type="text" name="nokk" class="span3" readonly value="<?php echo $row->no_kk?>"></input>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="span1">No NIK </p>:  <input type="text" class="span3" name="nonik" readonly value="<?php echo $row->no_NIK?>"></input>
                                            
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Kecamatan </p>:   <input class="span2" type="text" name="namakecamatan" value="<?php echo $row->nama_kecamatan; ?>" readonly></input><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Kabupaten </p>:   <input class="span2"  type="text" name="namakabupaten" value="<?php echo $row->nama_kabupaten; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Desa </p>:   <input class="span2"  type="text" name="namadesa" value="<?php echo $row->nama_desa; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">RT </p>:   <input class="span2"  type="text" name="rt" value="<?php echo $row->RT; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">RW </p>:   <input class="span2"  type="text" name="rw" value="<?php echo $row->RW; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            </table>     
                                        </td>
                                        <td>
                                            <table width="100%" border="0">
                                            <tr>
                                                <td>
                                                <p class="span2">Nama </p>:   <input class="span2"  type="text" name="nama" value="<?php echo $row->nama; ?>" readonly></input> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Tempat Lahir</p>:   <input class="span2"  type="text" name="tmptlahir" value="<?php echo $row->tempat_lahir; ?>" readonly></input> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Tanggal Lahir </p>:   <input class="span2"  type="text" name="tgllahir" value="<?php echo $row->tanggal_lahir; ?>" readonly></input>   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Jenis Kelamin </p>:   <input class="span2"  type="text" name="jk" value="<?php echo $row->jenis_kelamin; ?>" readonly></input> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Alamat </p>:   <input  class="span2" type="text" name="alamat" value="<?php echo $row->Alamat; ?>" readonly></input>   
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Agama </p>:   <input class="span2"  type="text" name="agama" value="<?php echo $row->agama; ?>" readonly></input>  
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Kewarganegaraan </p>:   <input  class="span2" type="text" name="kewarganegaraan" value="<?php echo $row->kewarganegaraan; ?>" readonly></input>    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Status Perkawinan </p>:   <input  class="span2" type="text" name="statusperkawinan" value="<?php echo $row->status_perkawinan; ?>" readonly></input>    
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Pekerjaan </p>:   <input  class="span2" type="text" name="pekerjaan" value="<?php echo $row->pekerjaan; ?>" readonly></input>    
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <fieldset>
                                    <legend>Data Pindah</legend>
                                </fieldset>
                                <table>
                                <tr>
                                    <td>
                                    <p class="span2">Alamat Baru </p>:   <textarea  required class="span4" placeholder="Diisi Alamat Baru Pindahan .." name="alamatbaru"></textarea> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Nama Desa Baru </p>:   <input class="span4" required placeholder="Diisi Nama Desa Baru Pindahan .." type="text" name="desabaru" value=""></input> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Nama Kecamatan Baru </p>:   <input class="span4" required placeholder="Diisi Nama Kecamatan Baru Pindahan .." type="text" name="kecamatanbaru" value=""></input> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Nama Kabupaten Baru</p>:   <input class="span4" required type="text" placeholder="Diisi Nama Kabupaten Baru Pindahan" name="kabupatenbaru" value=""></input> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Alasan Pindah </p>:   <input class="span4" placeholder="Diisi Alasan Pindah karena apa .." required type="text" name="alasanpindah" value=""></input> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Jumlah Pengikut </p>:   <input class="span4" placeholder="Diisi Jumlah Orang atau Pengikut Ketika Pindah .." required type="number" name="jumlahpengikut" value=""></input> <br> 
                                    </td>
                                </tr>
                               
                                </table>
                                <legend></legend>
                                <center>
                                    <input type="submit" name="buatsurat" value="Simpan Surat" class="tombolsimpanubah"></input><br>
                                    
                                </center>
                                <?php
                                    }
                                ?>
                                </form>
                                
                                <?php
                                    
                                }
                                ?>
                            </div>        
                        </div>
                    </div>
               </div>
                            </div>
