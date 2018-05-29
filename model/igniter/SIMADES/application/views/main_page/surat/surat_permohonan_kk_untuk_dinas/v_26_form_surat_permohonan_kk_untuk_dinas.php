
                           
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
                                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpanspermohonankkdinas" method="POST">
                                <?php
                                    
                                    foreach ($ambilsuratberdasarkan as $rowsurat) {
                                        foreach ($ambiljumlahsurat as $rowjumlah) {
                                     
                                ?>
                                <input type="hidden" name="jumlah" value="<?php echo $rowjumlah->jumlah_keluar?>"></input>
                                     <?php
                                        }
                                     ?>  
                                <input type="hidden" name="nokk" value="<?php echo $row->no_kk?>"></input>
                                <input type="hidden" name="nonik" value="<?php echo $row->no_NIK?>"></input>
                                <input type="hidden" name="namasurat" value="<?php echo $rowsurat->nama_surat?>"></input>
                                <input type="hidden" name="nomorsurat" value="<?php echo $rowsurat->nomor_surat?>"></input>
                                <div style="border-bottom: solid;">
                                    <table width="100%">
                                        <tr>
                                            <td>
                                                <h3 style="text-transform: capitalize;">Untuk Surat :    <?php echo $rowsurat->nama_surat;?></h3>
                                                
                                            </td>
                                            <td>
                                                <h3>Format No.Surat :    <?php echo $rowsurat->nomor_surat;?></h3>
                                                
                                            </td>
                                        </tr>
                                    </table>
                                </div><br>
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <table width="100%" border="0">
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
                                            <table width="100%">
                                            <tr>
                                                <td>
                                                <p class="span2">Nama </p>:   <input class="span2"  type="text" name="nama" value="<?php echo $row->nama; ?>" readonly></input> <br> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Tempat Lahir </p>:   <input class="span2"  type="text" name="tempatlahir" value="<?php echo $row->tempat_lahir; ?>" readonly></input> <br> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Tanggal Lahir </p>:   <input class="span2"  type="text" name="tanggallahir" value="<?php echo $row->tanggal_lahir; ?>" readonly></input> <br> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Jenis Kelamin </p>:   <input class="span2"  type="text" name="jeniskelamin" value="<?php echo $row->jenis_kelamin; ?>" readonly></input> <br> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Agama </p>:   <input class="span2"  type="text" name="agama" value="<?php echo $row->agama; ?>" readonly></input> <br> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Pekerjaan </p>:   <input  class="span2" type="text" name="pekerjaan" value="<?php echo $row->pekerjaan; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Status Perkawinan </p>:   <input class="span2"  type="text" name="statusperkawinan" value="<?php echo $row->status_perkawinan; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Nomor KTP </p>:   <input  class="span2" type="text" name="noktp" value="<?php echo $row->no_NIK; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Alamat </p>:   <input  class="span2" type="text" name="alamat" value="<?php echo $row->Alamat; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <legend></legend>
                                <fieldset>
                                    <legend>Data Surat</legend>
                                <table>
                                    <tr>
                                        <td>
                                        <p class="span2">Lampiran </p>:   <input type="text" required class="span4" placeholder="Diisi Jumlah Lampiran yang akan dilampirkan .." name="lampiran"></input> <br> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <p class="span2">Kepada Yth </p>:   <input type="text" required class="span4" placeholder="Diisi nama daerah kepala desa tempat tujuan surat .." name="kepada"></input> <br> 
                                        </td>
                                    </tr>
                                </table>
                                </fieldset>
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
