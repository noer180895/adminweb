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
                            alert('jumlah luas tanah '+hitungg+' m2 tidak boleh melebihi atau kurang dari jumlah seluruh yakni '+awal+' m2');
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
                                <center><h3>Ubah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            <?php
                                foreach ($ambildata as $row) {
                                 
                            ?>
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Asal Tanah Kas Milik Desa / Tanah Kas Desa</label>
                                    <div class="controls">
                                        : <input type="text" name="namaasal"  autofocus value="<?php echo $row->asal_tanah?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Sertifikat Buku Letter C / Persil</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorsertifikat"  autofocus class="span8" value="<?php echo $row->nomor_sertifikat?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Luas (Ha)</label>
                                    <div class="controls">
                                        : <input type="number" name="luas" id="luas" autofocus class="span8"  value="<?php echo $row->luas?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">klas</label>
                                    <div class="controls">
                                        : <select name="klas" required class="span8">
                                            <option value="<?php echo $row->klas?>" selected><?php echo $row->klas?></option>
                                            <option value="I">I</option>
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
                                    <legend>Perolehan tanah Kas Desa</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Asli Milik Desa</label>
                                    <div class="controls">
                                        : <input type="number" name="aslimilikdesa"  autofocus class="span8" id="aslimilikdesa" onkeyup="hitungperolehan('aslimilikdesa')" value="<?php echo $row->asli_milik_desa?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pusat</label>
                                    <div class="controls">
                                        : <input type="number" name="pusat"  autofocus class="span8" id="pusat" onkeyup="hitungperolehan('pusat')" value="<?php echo $row->pusat?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Provinsi</label>
                                    <div class="controls">
                                        : <input type="number" name="provinsi"  autofocus class="span8" id="provinsi" onkeyup="hitungperolehan('provinsi')" value="<?php echo $row->provinsi?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Kabupaten / Kota</label>
                                    <div class="controls">
                                        : <input type="number" name="kabupatenkota"  autofocus class="span8" id="kabupatenkota" onkeyup="hitungperolehan('kabupatenkota')" value="<?php echo $row->kabupaten?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Lain - Lain</label>
                                    <div class="controls">
                                        : <input type="number" name="lainlain"  autofocus class="span8" id="lainlain" onkeyup="hitungperolehan('lainlain')" value="<?php echo $row->lain_lain?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Perolehan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalperolehan"  autofocus class="span8"  value="<?php echo $row->tanggal_perolehan?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Jenis Tanah Kas Desa</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Sawah</label>
                                    <div class="controls">
                                        : <input type="number" name="sawah"  autofocus class="span8" id="sawah" onkeyup="hitungjenis('sawah')" value="<?php echo $row->sawah?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tegal</label>
                                    <div class="controls">
                                        : <input type="number" name="tegal"  autofocus class="span8"  id="tegal" onkeyup="hitungjenis('tegal')" value="<?php echo $row->tegal?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Kebun</label>
                                    <div class="controls">
                                        : <input type="number" name="kebun"  autofocus class="span8"  id="kebun" onkeyup="hitungjenis('kebun')" value="<?php echo $row->kebun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tambak / Kolam</label>
                                    <div class="controls">
                                        : <input type="number" name="tambakkolam"  autofocus class="span8"  id="tambakkolam" onkeyup="hitungjenis('tambakkolam')" value="<?php echo $row->tambak_kolam?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanah Kering / Daratan</label>
                                    <div class="controls">
                                        : <input type="number" name="tanahdaratan"  autofocus class="span8"  id="tanahdaratan" onkeyup="hitungjenis('tanahdaratan')" value="<?php echo $row->tanah_kering_daratan?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Patok Tanda Batas</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="patokada"  autofocus class="span8"  id="patokada" onkeyup="hitungpatok('patokada')" value="<?php echo $row->patok_ada?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tidak Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="patoktidak"  autofocus class="span8"  id="patoktidak" onkeyup="hitungpatok('patoktidak')" value="<?php echo $row->patok_tidak_ada?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Papan Nama</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="papanada"  autofocus class="span8"  id="papanada" onkeyup="hitungpapan('papanada')" value="<?php echo $row->papan_ada?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tidak Ada</label>
                                    <div class="controls">
                                        : <input type="number" name="papantidakada"  autofocus class="span8"  id="papantidakada" onkeyup="hitungpapan('papantidakada')" value="<?php echo $row->papan_tidak_ada?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Lokasi</label>
                                    <div class="controls">
                                        : <input type="text" name="lokasi"  autofocus class="span8"  value="<?php echo $row->lokasi?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Peruntukan</label>
                                    <div class="controls">
                                        : <input type="text" name="peruntukan"  autofocus class="span8"  value="<?php echo $row->peruntukan?>">
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" =""><?php echo $row->ket?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url() ?>Buku_Administrasi/Model_A_5/Buku_Data_Tanah_Kas_Milik_Desa/c_26_buku_tanah_kas_milik_desa/" class="tombolhapus" style="float: left;">Kembali</a>
                                    <div class="controls">
                                    <input type="submit" value="Ubah Data" name="ubahdata" class="tombolsimpanubah" onclick="return konfirmasiubahdata()"></input>
                                    </div>
                                </div>
                            </form>
                            <?php
                        }
                        ?>
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