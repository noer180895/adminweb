
                           
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
                                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpanskpimb" method="POST">
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
                                                <p class="span2">Pekerjaan </p>:   <input  class="span2" type="text" name="pekerjaan" value="<?php echo $row->pekerjaan; ?>" readonly></input>  <br>
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
                                    <legend>Data Kades</legend>
                                    <?php
                                        foreach ($ambilpenandatangan as $penanda) {
                                         
                                    ?>
                                    <table width="100%">
                                        <tr>
                                            <td>
                                                <p class="span2">Nama Kades </p>:   <input class="span4" required type="text" name="namakades" value="<?php echo $penanda->nama_kades?>" readonly></input>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p class="span2">Jabatan Kades </p>:   <input class="span4" required type="text" name="jabatankades" value="Kepala Desa" readonly></input>
                                            </td>
                                        </tr>
                                    </table>
                                    <?php
                                }
                                ?>
                                </fieldset>
                                <br>
                                <fieldset>
                                    <legend>Data Tanah</legend>

                                            <table width="100%">
                                            <tr>
                                                <td>
                                                <p class="span2">Persil nomor </p>:   <input class="span4" required type="number" name="persilnomor" placeholder="Diisi nomor persil .."></input> <br> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Persil Nama Pemilik </p>:   <input  class="span4" required type="text" name="persilnamapemilik" placeholder="Diisi nama pemilik tanah .."></input>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Persil Alamat Bidang </p>:   <textarea name="persilalamatbidang" required class="span4" placeholder="Diisi alamat letak bidang tanah .."></textarea>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Persil Penggunaan Tanah </p>:   <select name="persilpenggunaantanah" required class="span4">
                                                    <option value="Tanah Perumahan" selected>Tanah Perumahan</option>
                                                    <option value="Tanah Sawah">Tanah Sawah</option>
                                                    <option value="Tanah Gedung">Tanah Gedung</option>
                                                    <option value="Tanah Kosong">Tanah Kosong</option>
                                                </select>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Persil Pemanfaatan tanah </p>:   <select name="pemanfaatantanah" class="span4" required>
                                                    <option value="Perumahan Teratur" selected>Perumahan Teratur</option>
                                                    <option value="Perumahan Tidak Teratur">Perumahan Tidak Teratur</option>
                                                    <option value="Sawah Kosong">Sawah Kosong</option>
                                                    <option value="Sawah Isi">Sawah Isi</option>
                                                    <option value="Gedung Pakai">Gedung Pakai</option>
                                                    <option value="Lapangan">Lapangan</option>
                                                    <option value="Taman">Taman</option>
                                                </select>  <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                <p class="span2">Status Tanah </p>:   <select name="statustanah" class="span4" required>
                                                    <option value="Hak Individual" selected>Hak Individual</option>
                                                    <option value="Hak Pengelolaan" selected>Hak Pengelolaan</option>
                                                    <option value="Tanah Wakaf" selected>Tanah Wakaf</option>
                                                </select>  <br>
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
