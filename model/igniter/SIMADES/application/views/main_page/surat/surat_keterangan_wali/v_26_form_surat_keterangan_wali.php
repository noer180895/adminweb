
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data Penduduk Desa</h3>
                            </div>
                            <div class="module-body">
                                
                                   

                                  <?php
                                  include('include/v_26_modal.php');
                                  foreach ($ambildatapendudukberdasarkan as $row) {
                                  ?>
                                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpanskwali" method="POST">
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
                                            <td style="text-align: right;">
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
                                                <p class="span2">Nama</p>:   <input class="span2"  type="text" name="nama" value="<?php echo $row->nama; ?>" readonly></input> <br> 
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
                                            <?php $a=$row->tanggal_lahir;
                                            
                                            $umur = date('Y')-$a;
                                            
                                            ?>
                                            <tr>
                                                <td>
                                                <p class="span2">Umur </p>:   <input  class="span2" type="text" name="umur" value="<?php echo $umur; ?>" readonly></input>  <br>
                                                </td>
                                            </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                                <fieldset>
                                    <legend>Data Calon Laki Laki</legend>
                                <table>
                                <tr>
                                    <td>
                                    <br>
                                    <p class="span3">Nama calon laki laki</p>:   <input class="span4" placeholder="Diisi Nama Nalon Laki - Laki" required type="text"  id="namacalonlakilaki" name="namacalonlakilaki"></input> <br> 
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span3">Alamat calon laki laki</p>:   <textarea name="alamatcalonlakilaki" placeholder="Diisi Alamat Calon Laki - Laki" required class="span4"></textarea>  <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span3">Agama calon laki laki</p>:   <select  required name="agamacalonlakilaki" class="span4">
                                                    <option value="Islam" name="islam" selected="">Islam</option>
                                                    <option value="Protestan" name="protestan">Protestan</option>
                                                    <option value="Khatolik" name="khatolik">Khatolik</option>
                                                    <option value="Hindu" name="hindu">Hindu</option>
                                                    <option value="Buddha" name="buddha">Buddha</option>
                                                    <option value="Khonghucu" name="konghucu">Khonghucu</option>
                                                    <option value="Tidak Beragama" name="tidakberagama">Tidak Beragama</option>
                                                    <option value="Lainnya" name="lainnya">Lainnya</option>
                                                </select>  <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span3">Umur calon laki laki</p>:   <input required class="span4" placeholder="Diisi Umur Laki - Laki dengan angka" type="number" name="umurcalonlakilaki"></input>  <br>
                                    </td>
                                </tr>
                                </table>
                                <legend></legend>
                                </fieldset>
                                <fieldset>
                                    <legend>Data Calon Perempuan</legend>
                                <table>
                                <tr>
                                    <td>
                                    <br>
                                    <p class="span3">Nama calon perempuan</p>:   <input class="span4" required placeholder="Diisi Nama Calon Perempuan" type="text" name="namacalonperempuan"></input> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span3">Alamat calon perempuan</p>:   <textarea required name="alamatcalonperempuan" placeholder="Diisi Alamat Calon Perempuan" class="span4"></textarea>  <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span3">Agama calon perempuan</p>:   <select  required name="agamacalonperempuan" class="span4">
                                                    <option value="Islam" name="islam" selected="">Islam</option>
                                                    <option value="Protestan" name="protestan">Protestan</option>
                                                    <option value="Khatolik" name="khatolik">Khatolik</option>
                                                    <option value="Hindu" name="hindu">Hindu</option>
                                                    <option value="Buddha" name="buddha">Buddha</option>
                                                    <option value="Khonghucu" name="konghucu">Khonghucu</option>
                                                    <option value="Tidak Beragama" name="tidakberagama">Tidak Beragama</option>
                                                    <option value="Lainnya" name="lainnya">Lainnya</option>
                                                </select>  <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span3">Umur calon perempuan</p>:   <input required placeholder="Diisi Umur Calon Perempuan" class="span4" type="number" name="umurcalonperempuan"></input>  <br>
                                    </td>
                                </tr>
                                </table>
                                </fieldset>
                                <br>
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
