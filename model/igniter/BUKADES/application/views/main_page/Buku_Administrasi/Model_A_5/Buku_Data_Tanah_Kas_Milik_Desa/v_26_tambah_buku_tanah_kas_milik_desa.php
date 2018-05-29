                <script type="text/javascript">
                    function hitungperolehan(str) {
                        var awal = document.getElementById('luas').value;
                        
                         var aslimilikdesa = document.getElementById('aslimilikdesa').value;
                         var pusat = document.getElementById('pusat').value;
                         var provinsi = document.getElementById('provinsi').value;
                         var kabupatenkota = document.getElementById('kabupatenkota').value;
                         var lainlain = document.getElementById('lainlain').value;
                         
                        
                        var hitungg = parseInt(aslimilikdesa)+parseInt(pusat)+parseInt(provinsi)+parseInt(kabupatenkota)+parseInt(lainlain);
                        
                        if(hitungg>awal){
                            alert('jumlah luas tanah perolehan desa '+hitungg+' m2 tidak boleh melebihi atau kurang dari jumlah seluruh luas tanah yakni '+awal+' m2');
                            document.getElementById(str).value='0';
                        }else{

                        }
                    }
                    function hitungjenis(str) {
                        var awal = document.getElementById('luas').value;
                        
                         var sawah = document.getElementById('sawah').value;
                         var tegal = document.getElementById('tegal').value;
                         var kebun = document.getElementById('kebun').value;
                         var tambakkolam = document.getElementById('tambakkolam').value;
                         var tanahdaratan = document.getElementById('tanahdaratan').value;
                         
                        
                        var hitungg = parseInt(sawah)+parseInt(tegal)+parseInt(kebun)+parseInt(tambakkolam)+parseInt(tanahdaratan);
                        
                        if(hitungg>awal){
                            alert('jumlah luas jenis '+hitungg+' m2 tidak boleh melebihi atau kurang dari jumlah seluruh yakni '+awal+' m2');
                            document.getElementById(str).value='0';
                        }else{

                        }
                    }
                    function hitungpatok(str) {
                        var awal = document.getElementById('luas').value;
                        
                         var patokada = document.getElementById('patokada').value;
                         var patoktidak = document.getElementById('patoktidak').value;
                        var hitungg = parseInt(patokada)+parseInt(patoktidak);
                        
                        if(hitungg>awal){
                            alert('jumlah luas patok '+hitungg+' m2 tidak boleh melebihi atau kurang dari jumlah seluruh yakni '+awal+' m2');
                            document.getElementById(str).value='0';
                        }else{

                        }
                    }
                    function hitungpapan(str) {
                        var awal = document.getElementById('luas').value;
                        
                         var papanada = document.getElementById('papanada').value;
                         var papantidakada = document.getElementById('papantidakada').value;
                        var hitungg = parseInt(papanada)+parseInt(papantidakada);
                        
                        if(hitungg>awal){
                            alert('jumlah luas papan '+hitungg+' m2 tidak boleh melebihi atau kurang dari jumlah seluruh yakni '+awal+' m2');
                            document.getElementById(str).value='0';
                        }else{

                        }
                    }
                </script>
                
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Asal Tanah Kas Milik Desa / Tanah Kas Desa</label>
                                    <div class="controls">
                                        : <input type="text" name="namaasal" required autofocus placeholder="Masukan nama desa asal tanah..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Sertifikat Buku Letter C / Persil</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorsertifikat" required autofocus class="span8" placeholder="Masukan nomor sertifikat / persil    ">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Luas (Ha)</label>
                                    <div class="controls">
                                        : <input type="number" name="luas" id="luas" onkeyup="hitung('luas')" value="0" required autofocus class="span8" placeholder="Masukan luas tanah">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">klas</label>
                                    <div class="controls">
                                        : <select name="klas" required class="span8">
                                            <option value="I" selected>I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                        </select>
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                <legend>Perolehan Tanah Kas Desa</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Asli Milik Desa</label>
                                    <div class="controls">
                                        : <input type="number" name="aslimilikdesa" id="aslimilikdesa" onkeyup="hitungperolehan('aslimilikdesa')" value="0" required autofocus class="span8" placeholder="diisi jumlah tanah asli milik desa">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Bantuan Pusat</label>
                                    <div class="controls">
                                        : <input type="number" name="pusat" id="pusat" onkeyup="hitungperolehan('pusat')" value="0" required autofocus class="span8" placeholder="diisi jumlah tanah dari pusat">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Bantuan Provinsi</label>
                                    <div class="controls">
                                        : <input type="number" name="provinsi" id="provinsi" onkeyup="hitungperolehan('provinsi')" value="0" required autofocus class="span8" placeholder="diisi jumlah tanah dari provinsi">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Bantuan Kabupaten / Kota</label>
                                    <div class="controls">
                                        : <input type="number" name="kabupatenkota" id="kabupatenkota" onkeyup="hitungperolehan('kabupatenkota')" value="0" required autofocus class="span8" placeholder="diisi jumlah tanah kabupaten kota">
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Lain - Lain</label>
                                    <div class="controls">
                                        : <input type="number" name="lainlain" id="lainlain" onkeyup="hitungperolehan('lainlain')" value="0" required autofocus class="span8" placeholder="diisi jumlah tanah lain lain">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Perolehan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalperolehan" required autofocus class="span8" placeholder="diisi tanggal perolehan">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                <legend>Jenis Tanah Kas Desa</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Sawah</label>
                                    <div class="controls">
                                        : <input type="number" name="sawah" id="sawah" onkeyup="hitungjenis('sawah')" value="0" required autofocus class="span8" placeholder="diisi luas tanah untuk jenis sawah">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tegal</label>
                                    <div class="controls">
                                        : <input type="number" name="tegal" id="tegal" onkeyup="hitungjenis('tegal')" value="0" required autofocus class="span8" placeholder="diisi luas tanah untuk jenis tegal">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Kebun</label>
                                    <div class="controls">
                                        : <input type="number" name="kebun" id="kebun" onkeyup="hitungjenis('kebun')" value="0" required autofocus class="span8" placeholder="diisi luas tanah untuk jenis kebun">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tambak / Kolam</label>
                                    <div class="controls">
                                        : <input type="number" name="tambakkolam" id="tambakkolam" onkeyup="hitungjenis('tambakkolam')" value="0" required autofocus class="span8" placeholder="diisi luas tanah untuk jenis tambak kolam">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanah Kering / Daratan</label>
                                    <div class="controls">
                                        : <input type="number" name="tanahdaratan" id="tanahdaratan" onkeyup="hitungjenis('tanahdaratan')" value="0" required autofocus class="span8" placeholder="diisi luas tanah untuk jenis tanah daratan">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                <legend>Patok Tanda Batas</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="patokada" id="patokada" onkeyup="hitungpatok('patokada')" value="0" required autofocus class="span8" placeholder="diisi luas tanah yang sudah memiliki patok">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tidak Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="patoktidak" id="patoktidak" onkeyup="hitungpatok('patoktidak')" value="0" required autofocus class="span8" placeholder="diisi luas tanah yang belum memiliki patok">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                <legend>Papan Nama</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="papanada" id="papanada" onkeyup="hitungpapan('papanada')" value="0" required autofocus class="span8" placeholder="diisi luas tanah yang sudah ada papan nama">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tidak Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="papantidakada" id="papantidakada" onkeyup="hitungpapan('papantidakada')" value="0" required autofocus class="span8" placeholder="diisi luas tanah yang belum ada papan nama">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Lokasi</label>
                                    <div class="controls">
                                        : <input type="text" name="lokasi" required autofocus class="span8" placeholder="diisi dengan nama lokasi tanah milik desa">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Peruntukan</label>
                                    <div class="controls">
                                        : <input type="text" name="peruntukan" required autofocus class="span8" placeholder="diisi peruntukan / pemanfaatan tanah">
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url() ?>Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/" class="tombolhapus" style="float: left;">Kembali</a>
                                    <div class="controls">
                                    <input type="submit" value="simpan" name="simpan" class="tombolsimpanubah span2" onclick="return konfirmasisimpan()"></input>
                                    <input type="reset" value="Batal" name="reset" class="tombolsimpanubah span2"></input>
                                    </div>
                                </div>
                            </form>
                            </div>
                            </div>
                            
                        </div>
                </div>
<script type="text/javascript">
    function konfirmasisimpan () {
         return confirm('Apakah Anda Akan Menyimpan Data ?');
    }
    function konfirmasiubahdata () {
         return confirm('Apakah Anda Akan Mengubah Data ?');
    }
</script>