
                <script type="text/javascript">
                    function hitung(str) {
                        var awal = document.getElementById('jumlah').value;
                        
                         var hakmilik = document.getElementById('hakmilik').value;
                         var hakgunabangunan = document.getElementById('hakgunabangunan').value;
                         var hakpakai = document.getElementById('hakpakai').value;
                         var hakgunausaha = document.getElementById('hakgunausaha').value;
                         var hakpengelolaan = document.getElementById('hakpengelolaan').value;
                         var hakmilikadat = document.getElementById('hakmilikadat').value;
                         var verpondingindonesie = document.getElementById('verpondingindonesie').value;
                         var tanahnegara = document.getElementById('tanahnegara').value;
                        
                        var hitungg = parseInt(hakmilik)+parseInt(hakgunabangunan)+parseInt(hakpakai)+parseInt(hakgunausaha)+parseInt(hakpengelolaan)+parseInt(hakmilikadat)+parseInt(verpondingindonesie)+parseInt(tanahnegara);
                        
                        if(hitungg>awal){
                            alert('jumlah luas status hak tanah '+hitungg+' m2 tidak boleh melebihi atau kurang dari jumlah seluruh luas tanah yakni '+awal+' m2');
                            document.getElementById(str).value='0';
                        }else{

                        }
                    }
                    function penggunaan (str) {
                        var awal = document.getElementById('jumlah').value;
                        var perumahan = document.getElementById('perumahan').value;
                        var perdaganganjasa = document.getElementById('perdaganganjasa').value;
                        var perkantoran = document.getElementById('perkantoran').value;
                        var industri = document.getElementById('industri').value;
                        var fasilitasumum = document.getElementById('fasilitasumum').value;
                        var sawah = document.getElementById('sawah').value;
                        var tegalan = document.getElementById('tegalan').value;
                        var perkebunan = document.getElementById('perkebunan').value;
                        var peternakanperikanan = document.getElementById('peternakanperikanan').value;
                        var hutanbelukar = document.getElementById('hutanbelukar').value;
                        var hutanlebatlindung = document.getElementById('hutanlebatlindung').value;
                        var tanahkosong = document.getElementById('tanahkosong').value;
                        var cek = parseInt(perumahan)+parseInt(perdaganganjasa)+parseInt(perkantoran)+parseInt(industri)+parseInt(fasilitasumum)+parseInt(sawah)+parseInt(tegalan)+parseInt(perkebunan)+parseInt(peternakanperikanan)+parseInt(hutanbelukar)+parseInt(hutanlebatlindung)+parseInt(tanahkosong);
                        
                        if(cek>awal){
                            alert('jumlah luas penggunaan tanah '+cek+' m2 tidak boleh melebihi atau kurang dari jumlah seluruh luas tanah yakni '+awal+' m2');
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
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Perorangan</label>
                                    <div class="controls">
                                        : <input type="text" name="namaperorangan" required autofocus placeholder="Masukan nama pemilik/pemegang hak atas tanah..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah</label>
                                    <div class="controls">
                                        : <input type="number" name="jumlah" value="0" id="jumlah" required autofocus class="span8" placeholder="Masukan luas tanah dalam meter persegi (m2) ">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                <legend>Sudah Bersertifikat</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Milik</label>
                                    <div class="controls">
                                        : <input type="number" name="hakmilik" id="hakmilik" required onkeyup="hitung('hakmilik')" value="0" autofocus class="span8" placeholder="diisi luas tanah yang bersertifikat dengan status hak milik (ha)">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Guna Bangunan</label>
                                    <div class="controls">
                                        : <input type="number" name="hakgunabangunan" id="hakgunabangunan" onkeyup="hitung('hakgunabangunan')" value="0" required autofocus class="span8" placeholder="diisi luas tanah yang bersertifikat dengan status hak guna bangunan (ha)">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Pakai</label>
                                    <div class="controls">
                                        : <input type="number" name="hakpakai" id="hakpakai" onkeyup="hitung('hakpakai')" value="0" required autofocus class="span8" placeholder="diisi luas tanah yang bersertifikat dengan status hak pakai (ha)">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Guna Usaha</label>
                                    <div class="controls">
                                        : <input type="number" name="hakgunausaha" id="hakgunausaha" onkeyup="hitung('hakgunausaha')" value="0" required autofocus class="span8" placeholder="diisi luas tanah yang bersertifikat dengan status hak guna usaha (ha)">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Pengelolaan</label>
                                    <div class="controls">
                                        : <input type="number" name="hakpengelolaan" id="hakpengelolaan" onkeyup="hitung('hakpengelolaan')" value="0" required autofocus class="span8" placeholder="diisi luas tanah yang bersertifikat dengan status hak pengelolaan (ha)">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Belum Bersertifikat</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Milik Adat</label>
                                    <div class="controls">
                                        : <input type="number" name="hakmilikadat" id="hakmilikadat" onkeyup="hitung('hakmilikadat')" value="0" required autofocus class="span8" placeholder="diisi luas tanah yang bersertifikat dengan status hak milik adat (ha)">
                                    </div>
                                    </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Verponding Indonesie</label>
                                    <div class="controls">
                                        : <input type="number" name="verpondingindonesie" id="verpondingindonesie" value="0" onkeyup="hitung('verpondingindonesie')" required autofocus class="span8" placeholder="diisi luas tanah yang bersertifikat dengan status milik pribumi (ha)">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanah Nagara</label>
                                    <div class="controls">
                                        : <input type="number" name="tanahnegara" id="tanahnegara" onkeyup="hitung('tanahnegara')" value="0" required autofocus class="span8" placeholder="diisi luas tanah yang bersertifikat dengan status tanah negara (ha)">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Non Pertanian</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perumahan</label>
                                        <div class="controls">
                                            : <input type="number" name="perumahan" id="perumahan" onkeyup="penggunaan('perumahan')" value="0" required autofocus class="span8" placeholder="diisi luas tanah non pertanian untuk perumahan">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perdagangan & Jasa</label>
                                        <div class="controls">
                                            : <input type="number" name="perdaganganjasa" id="perdaganganjasa" onkeyup="penggunaan('perdaganganjasa')" value="0" required autofocus class="span8" placeholder="diisi luas tanah non pertanian untuk perdagangan & jasa">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perkantoran</label>
                                        <div class="controls">
                                            : <input type="number" name="perkantoran" id="perkantoran" onkeyup="penggunaan('perkantoran')" value="0" required autofocus class="span8" placeholder="diisi luas tanah non pertanian untuk perkantoran">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Industri</label>
                                        <div class="controls">
                                            : <input type="number" name="industri" id="industri" onkeyup="penggunaan('industri')" value="0" required autofocus class="span8" placeholder="diisi luas tanah non pertanian untuk industri">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Fasilitas Umum</label>
                                        <div class="controls">
                                            : <input type="number" name="fasilitasumum" id="fasilitasumum" onkeyup="penggunaan('fasilitasumum')" value="0" required autofocus class="span8" placeholder="diisi luas tanah non pertanian untuk fasilitas umum">
                                        </div>
                                    </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pertanian</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Sawah</label>
                                        <div class="controls">
                                            : <input type="number" name="sawah" id="sawah" onkeyup="penggunaan('sawah')" value="0" required autofocus class="span8" placeholder="diisi luas tanah pertanian untuk sawah irigasi non irigasi">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Tegalan</label>
                                        <div class="controls">
                                            : <input type="number" name="tegalan" id="tegalan" onkeyup="penggunaan('tegalan')" value="0" required autofocus class="span8" placeholder="diisi luas tanah pertanian untuk tegalan">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perkebunan</label>
                                        <div class="controls">
                                            : <input type="number" name="perkebunan" id="perkebunan" onkeyup="penggunaan('perkebunan')" value="0" required autofocus class="span8" placeholder="diisi luas tanah pertanian untuk perkebunan">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Peternakan / Perikanan</label>
                                        <div class="controls">
                                            : <input type="number" name="peternakanperikanan"  id="peternakanperikanan" value="0" onkeyup="penggunaan('peternakanperikanan')" required autofocus class="span8" placeholder="diisi luas tanah pertanian untuk peternakan atau perikanan">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hutan Belukar</label>
                                        <div class="controls">
                                            : <input type="number" name="hutanbelukar" id="hutanbelukar" onkeyup="penggunaan('hutanbelukar')" value="0" required autofocus class="span8" placeholder="diisi luas tanah pertanian untuk hutan belukar">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hutan Lebat / Lindung</label>
                                        <div class="controls">
                                            : <input type="number" name="hutanlebatlindung" id="hutanlebatlindung" value="0" onkeyup="penggunaan('hutanlebatlindung')" required autofocus class="span8" placeholder="diisi luas tanah pertanian untuk hutan lebat atau lindung">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Tanah Kosong</label>
                                        <div class="controls">
                                            : <input type="number" name="tanahkosong" id="tanahkosong" onkeyup="penggunaan('tanahkosong')" value="0" required autofocus class="span8" placeholder="diisi luas tanah pertanian untuk tanah kosong">
                                        </div>
                                    </div>
                                </fieldset>
                                <br><br>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/" class="tombolhapus" style="float: left;">Kembali</a>
                                    <div class="controls">
                                    <input type="submit" value="simpan" name="simpan" onmouseover=" return hitung()" onclick="return konfirmasisimpan()" class="tombolsimpanubah span2"></input>
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