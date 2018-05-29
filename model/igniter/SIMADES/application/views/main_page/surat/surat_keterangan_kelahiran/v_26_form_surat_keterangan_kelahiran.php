
                           
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
                                  <?php
                                    
                                    foreach ($ambilsuratberdasarkan as $rowsurat) {
                                     $a = 0;


                                ?>
                                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpanskketerangankelahiran"  method="POST">
                                <?php
                                foreach ($ambiljumlahsurat as $rowjumlah) {
                                     
                                ?>
                                <input type="hidden" name="jumlah" value="<?php echo $rowjumlah->jumlah_keluar?>"></input>
                                     <?php
                                        }
                                     ?>                           
                                <input type="hidden" name="nokk" value="<?php echo $row->no_kk?>"></input>
                                <input type="hidden" name="nonik" value="<?php echo $row->no_NIK?>"></input>
                                <input type="hidden" name="namasurat" value="<?php echo $rowsurat->nama_surat;?>"></input>
                                <input type="hidden" name="nomorsurat" style="width: 700px" value="<?php echo $rowsurat->nomor_surat;?>">
                                <div style="border-bottom: solid;">
                                    
                                    <table width="100%">
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
                                            <table>
                                            <tr>
                                                <td>
                                                <p class="span2">Kecamatan </p>:   <input class="span2" type="text" name="namakecamatan" value="<?php echo $row->nama_kecamatan; ?>" readonly></input>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Kabupaten </p>:   <input class="span2"  type="text" name="namakabupaten" value="<?php echo $row->nama_kabupaten; ?>" readonly></input>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Desa </p>:   <input class="span2"  type="text" name="namadesa" value="<?php echo $row->nama_desa; ?>" readonly></input>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">RT </p>:   <input class="span2"  type="text" name="rt" value="<?php echo $row->RT; ?>" readonly></input>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">RW </p>:   <input class="span2"  type="text" name="rw" value="<?php echo $row->RW; ?>" readonly></input> 
                                                </td>
                                            </tr>
                                           </table> 
                                        </td>
                                        <td style="text-align: right;">
                                            <table>
                                                <tr>
                                                    <td>
                                                    <p class="span2">Nama Ibu Kandung </p>:   <input class="span2"  type="text" name="namaibu" value="<?php echo $row->nama; ?>" readonly></input> <br> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <p class="span2">Alamat </p>:   <input  class="span2" type="text" name="alamat" value="<?php echo $row->Alamat; ?>" readonly></input>  <br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <p class="span2">Agama </p>:   <input class="span2"  type="text" name="agama" value="<?php echo $row->agama; ?>" readonly></input>  <br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <p class="span2">Pekerjaan </p>:   <input  class="span2" type="text" name="pekerjaan" value="<?php echo $row->pekerjaan; ?>" readonly></input>  <br>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>

                                <fieldset>
                                    <legend>Data Anak yang Lahir :</legend>
                                <table>
                                <tr>
                                    <td>
                                    <p class="span2">Diberi nama </p>:   <input class="span4" placeholder="Diisi Nama Anak yang dilahirkan" required type="text" name="namaanak" value="" style="height: 30px"></input> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Jenis Kelamin </p>:    
                                    <select name="jk" required class="span2">
                                            <option value="Laki - Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                    </select> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Lahir Hari / Tgl </p>:   
                                    <select name="harilahir" required class="span2">
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jum'at</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>

                                    <input type="date" required style="height: 30px" class="span2" name="tgl"></input>
                                    </td>
                                </tr>
                                <tr>
                                    <td>  
                                    <p class="span2">Panjang / Berat Badan </p>:    <input type="number" placeholder="Panjang .." required style="width:80px;height: 30px" name="panjang"> cm <input type="number" placeholder="Berat .." required style="width: 80px;height: 30px" name="berat"> gram</input>  <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Anak ke </p>:   <input type="number" placeholder="Anak Ke berapa .." required class="span2" style="height: 30px" name="anakke"></input>  <br>
                                    </td>
                                </tr>
                                </table>
                                <legend></legend>
                                </fieldset>
                                
                                </table>
                                <center>
                                    <input type="submit" name="buatsurat" value="Simpan Surat" class="tombolsimpanubah span2"></input><br>
                                    
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
