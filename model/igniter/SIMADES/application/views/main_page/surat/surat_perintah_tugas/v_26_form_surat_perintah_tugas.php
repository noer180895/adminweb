
                           
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
                                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpansptugas" method="POST">
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
                                                <h4 style="text-transform: capitalize;">Untuk Surat :    <?php echo $rowsurat->nama_surat;?></h4>
                                                
                                            </td>
                                            <td>
                                                <h4>Format No.Surat :    <?php echo $rowsurat->nomor_surat;?></h4>
                                                
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
                                                <p class="span2">Nama</p>:   <input class="span2"  type="text" name="nama" value="<?php echo $row->nama; ?>" readonly></input> <br> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Tempat Lahir </p>:   <input  class="span2" type="text" name="tempatlahir" value="<?php echo $row->tempat_lahir; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Tanggal Lahir </p>:   <input  class="span2" type="text" name="tanggallahir" value="<?php echo $row->tanggal_lahir; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Kewarganegaraan </p>:   <input  class="span2" type="text" name="kewarganegaraan" value="<?php echo $row->kewarganegaraan; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Agama </p>:   <input  class="span2" type="text" name="agama" value="<?php echo $row->agama; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Pendidikan Terakhir </p>:   <input  class="span2" type="text" name="pendidikan" value="<?php echo $row->pendidikan_terakhir; ?>" readonly></input>  <br>
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
                                </fieldset>
                                
                                <br>
                                <fieldset>
                                    <legend>Data Perintah Tugas</legend>

                                            <table width="100%">
                                            <tr>
                                                <td>
                                                <p class="span2">Untuk </p>:   <textarea class="span4" required name="untuk" placeholder="Diisi untuk apa penugasan ini .."></textarea> <br> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Tanggal awal / Sampai </p>:   <input  class="span2" required type="date" name="tanggalawal" placeholder="Diisi nama pemilik tanah .."></input> / <input  class="span2" required type="date" name="tanggalakhir" placeholder="Diisi nama pemilik tanah .."></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Tempat </p>:   <input type="text" name="tempat" class="span4" placeholder="Diisi tempat dilaksanakannya tugas ini .."></input>  <br>
                                                </td>
                                            </tr>
                                            </table>
                                    <legend></legend>
                                </fieldset>
                                <br><br>
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
