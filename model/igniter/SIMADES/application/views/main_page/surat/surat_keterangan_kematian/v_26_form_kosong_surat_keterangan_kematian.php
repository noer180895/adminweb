
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data Penduduk Desa Pembuat Surat</h3>
                            </div>
                            <div class="module-body">
                                
                                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpanskkematian" method="POST">
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
                                                <h3 style="text-transform: capitalize;">Untuk Surat :    <?php echo $rowsurat->nama_surat;?></h3>
                                                
                                            </td>
                                            <td>
                                                <h3>Format No.Surat :    <?php echo $rowsurat->nomor_surat;?></h3>
                                                
                                            </td>
                                        </tr>
                                    </table>
                                </div><br>
                                <?php
                                    foreach ($ambilperangkatdesa as $rowperangkat) {
                                     
                                ?>
                                <fieldset>
                                    <legend>Data Penduduk Yang Meninggal :</legend>
                                <table width="100%">
                                <tr>
                                    <td>
                                    <p class="span2">Kecamatan </p>:   <input class="span4" required type="text" name="namakecamatan" value="<?php echo $rowperangkat->nama_kecamatan; ?>" ></input><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Kabupaten </p>:   <input class="span4" required  type="text" name="namakabupaten" value="<?php echo $rowperangkat->nama_kabupaten; ?>" ></input>  <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Desa </p>:   <input class="span4" required  type="text" name="namadesa" value="<?php echo $rowperangkat->nama_desa; ?>" ></input>  <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">RT </p>:   <input class="span4" required  type="number" name="rt" placeholder="Diisi RT yang bersangkutan .." ></input>  <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">RW </p>:   <input class="span4" required type="number" name="rw" placeholder="Diisi RW yang bersangkutan .." ></input>  <br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Nama </p>:   <input class="span4" required  type="text" name="nama" placeholder="Diisi nama orang yang meninggal .." ></input> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Tempat Lahir </p>:   <input class="span4" required  type="text" name="tmptlahir" placeholder="Diisi tempat lahir yang meninggal .." ></input> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Tanggal Lahir </p>:   <input class="span4" required type="date" name="tgllahir" placeholder="Diisi tanggal lahir yang meninggal" ></input> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Jenis Kelamin </p>:   <select name="jk" required class="span4">
                                                    <option value="Laki - Laki" selected>Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Alamat </p>:   <textarea name="alamat" class="span4" placeholder="Diisi alamat orang yang meninggal .." required></textarea>  <br>
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
                                                </select>      <br>
                                    </td>
                                </tr>
                                </table>
                                <fieldset>
                                    <legend>Data Kejadian :</legend>
                                <table width="100%">
                                <tr>
                                    <td>
                                    <p class="span2">Hari / Tgl </p>:   
                                    <select name="haritgl" required class="span2">
                                        <option value="senin">Senin</option>
                                        <option value="selasa">Selasa</option>
                                        <option value="rabu">Rabu</option>
                                        <option value="kamis">Kamis</option>
                                        <option value="jumat">Jum'at</option>
                                        <option value="sabtu">Sabtu</option>
                                        <option value="minggu">Minggu</option>
                                    </select>
                                    <input type="date" style="height: 30px" class="span2" required name="tgl"></input>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Jam </p>:   <input class="span4" required placeholder="Diisi Jam ketika penduduk meninggal .." type="time" name="jam" style="height: 30px"></input> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Pada Usia </p>:   <input class="span4" required placeholder="Diisi Usia Penduduk saat meninggal" type="number" name="usia"></input> <br> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <p class="span2">Dikarenakan </p>:   <input class="span4" required placeholder="Diisi Penyebab Penduduk Meninggal .." type="text" name="dikarenakan"></input> <br> 
                                    </td>
                                </tr>
                                </table>
                                </fieldset>
                                <br>
                                <legend></legend>
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