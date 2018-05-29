
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data Penduduk Desa Pembuat Surat</h3>
                            </div>
                            <div class="module-body">
                                
                                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpansptugas" method="POST">
                                <?php
                                    
                                    foreach ($ambilsuratberdasarkan as $rowsurat) {
                                        foreach ($ambiljumlahsurat as $rowjumlah) {
                                     
                                ?>
                                <input type="hidden" name="jumlah" value="<?php echo $rowjumlah->jumlah_keluar?>"></input>
                                     <?php
                                        }
                                     ?>  
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
                                <?php 
                                    foreach ($ambilperangkatdesa as $rowperangkat) {
                                    
                                ?>
                                <fieldset>
                                    <legend>Data yang bersangkutan :</legend>
                                    <table width="100%">
                                        <tr>
                                            <td>
                                            <p class="span2">Kecamatan </p>:   <input class="span4" type="text" name="namakecamatan" value="<?php echo $rowperangkat->nama_kecamatan; ?>" required></input><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <p class="span2">Kabupaten </p>:   <input class="span4"  type="text" name="namakabupaten" value="<?php echo $rowperangkat->nama_kabupaten; ?>" required></input>  <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <p class="span2">Desa </p>:   <input class="span4"  type="text" name="namadesa" value="<?php echo $rowperangkat->nama_desa; ?>" required></input>  <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <p class="span2">RT </p>:   <input class="span4"  type="number" name="rt" placeholder="Diisi RT yang bersangkutan" required></input>  <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <p class="span2">RW </p>:   <input class="span4"  type="number" name="rw" placeholder="Diisi RW yang bersangkutan" required></input>  <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <p class="span2">Nama</p>:   <input class="span4"  type="text" name="nama" placeholder="Diisi nama orang yang ditugaskan .." required></input> <br> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <p class="span2">Tempat Lahir </p>:   <input  class="span4" type="text" name="tempatlahir" placeholder="Diisi tempat lahir yang ditugaskan .." required></input>  <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <p class="span2">Tanggal Lahir </p>:   <input  class="span4" type="date" name="tanggallahir" placeholder="Diisi tanggal lahir yang ditugaskan .." required></input>  <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <p class="span2">Kewarganegaraan </p>:   <input  class="span4" type="text" name="kewarganegaraan" placeholder="Diisi kewarganegaraan yang ditugaskan .." required></input>  <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <p class="span2">Agama </p>:   <select name="agama" required class="span4">
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
                                            <p class="span2">Pendidikan Terakhir </p>:   <select name="pendidikan" required class="span4">
                                                    <option value="Belum / Tidak Sekolah" selected>Belum / Tidak Sekolah</option>
                                                    <option value="Belum Tamat SD / Sederajat">Belum Tamat SD / Sederajat</option>
                                                    <option value="Tamat SD / Sederajat">Tamat SD / Sederajat</option>
                                                    <option value="SLTP / Sederajat">SLTP/Sederajat</option>
                                                    <option value="SLTA / Sederajat">SLTA/Sederajat</option>
                                                    <option value="DIPLOMA I / II">DIPLOMA I/II</option>
                                                    <option value="Akademi / DIPLOMA III / S.MUDA">Akademi / DIPLOMA III / S.Muda</option>
                                                    <option value="DIPLOMA IV / STRATA I">DIPLOMA IV / STRATA I</option>
                                                    <option value="STRATA II">STRATA II</option>
                                                    <option value="STRATA III">STRATA III</option>
                                                </select>  <br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <p class="span2">Alamat </p>:   <textarea name="alamat" class="span4" required placeholder="Diisi alamat tinggal orang yang ditugaskan .."></textarea>  <br>
                                            </td>
                                        </tr>
                                    </table>
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
                                    <input type="submit" name="buatsurat" value="Simpan Surat" class="tombolsimpanubah" onclick="return simpan()"></input><br>
                                    
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
<script type="text/javascript">
function simpan () {
return confirm('Apakah data ini benar ?');
}
</script>