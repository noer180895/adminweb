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
                                <center><h3>Ubah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            <?php
                                foreach ($ambildata as $row) {
                                 
                            ?>
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Perorangan</label>
                                    <div class="controls">
                                        : <input type="text" name="namaperorangan"  autofocus value="<?php echo $row->nama_perorangan?>"class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah</label>
                                    <div class="controls">
                                        : <input type="number" name="jumlah" id="jumlah" onkeyup="hitung('hakmilik')" autofocus class="span8" value="<?php echo $row->jumlah?>">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                <legend>Sudah Bersertifikat</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Milik</label>
                                    <div class="controls">
                                        : <input type="number" name="hakmilik"  id="hakmilik" onkeyup="hitung('hakmilik')" autofocus class="span8"value="<?php echo $row->hak_milik?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Guna Bangunan</label>
                                    <div class="controls">
                                        : <input type="number" name="hakgunabangunan"  id="hakgunabangunan" onkeyup="hitung('hakgunabangunan')" autofocus class="span8" value="<?php echo $row->hak_guna_bangunan?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Pakai</label>
                                    <div class="controls">
                                        : <input type="number" name="hakpakai"  id="hakpakai" onkeyup="hitung('hakpakai')" autofocus class="span8" value="<?php echo $row->hak_pakai?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Guna Usaha</label>
                                    <div class="controls">
                                        : <input type="number" name="hakgunausaha"  id="hakgunausaha" onkeyup="hitung('hakgunausaha')" autofocus class="span8" value="<?php echo $row->Hak_guna_usaha?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Pengelolaan</label>
                                    <div class="controls">
                                        : <input type="number" name="hakpengelolaan"  id="hakpengelolaan" onkeyup="hitung('hakpengelolaan')" autofocus class="span8" value="<?php echo $row->hak_pengelolaan?>">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Belum Bersertifikat</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Hak Milik Adat</label>
                                    <div class="controls">
                                        : <input type="number" name="hakmilikadat"  id="hakmilikadat" onkeyup="hitung('hakmilikadat')" autofocus class="span8" value="<?php echo $row->hak_milik_adat?>">
                                    </div>
                                    </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Verponding Indonesie</label>
                                    <div class="controls">
                                        : <input type="number" name="verpondingindonesie"  id="verpondingindonesie" onkeyup="hitung('verpondingindonesie')" autofocus class="span8" value="<?php echo $row->verponding_indonesie?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanah Nagara</label>
                                    <div class="controls">
                                        : <input type="number" name="tanahnegara"  id="tanahnegara" onkeyup="hitung('tanahnegara')" autofocus class="span8" value="<?php echo $row->tanah_negara?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Non Pertanian</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perumahan</label>
                                        <div class="controls">
                                            : <input type="number" name="perumahan"  id="perumahan" onkeyup="penggunaan('perumahan')" autofocus class="span8" value="<?php echo $row->perumahan?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perdagangan & Jasa</label>
                                        <div class="controls">
                                            : <input type="number" name="perdaganganjasa"  id="perdaganganjasa" onkeyup="penggunaan('perdaganganjasa')" autofocus class="span8" value="<?php echo $row->perdagangan_jasa?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perkantoran</label>
                                        <div class="controls">
                                            : <input type="number" name="perkantoran"  id="perkantoran" onkeyup="penggunaan('perkantoran')" autofocus class="span8" value="<?php echo $row->perkantoran?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Industri</label>
                                        <div class="controls">
                                            : <input type="number" name="industri"  id="industri" onkeyup="penggunaan('industri')" autofocus class="span8" value="<?php echo $row->industri?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Fasilitas Umum</label>
                                        <div class="controls">
                                            : <input type="number" name="fasilitasumum"  id="fasilitasumum" onkeyup="penggunaan('fasilitasumum')" autofocus class="span8" value="<?php echo $row->fasilitas_umum?>">
                                        </div>
                                    </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pertanian</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Sawah</label>
                                        <div class="controls">
                                            : <input type="number" name="sawah"  id="sawah" onkeyup="penggunaan('sawah')" autofocus class="span8" value="<?php echo $row->sawah?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Tegalan</label>
                                        <div class="controls">
                                            : <input type="number" name="tegalan"  id="tegalan" onkeyup="penggunaan('tegalan')" autofocus class="span8" value="<?php echo $row->tegalan?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Perkebunan</label>
                                        <div class="controls">
                                            : <input type="number" name="perkebunan"  id="perkebunan" onkeyup="penggunaan('perkebunan')" autofocus class="span8" value="<?php echo $row->perkebunan?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Peternakan / Perikanan</label>
                                        <div class="controls">
                                            : <input type="number" name="peternakanperikanan"  id="peternakanperikanan" onkeyup="penggunaan('peternakanperikanan')" autofocus class="span8" value="<?php echo $row->peternakan_perikanan?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hutan Belukar</label>
                                        <div class="controls">
                                            : <input type="number" name="hutanbelukar"  id="hutanbelukar" onkeyup="penggunaan('hutanbelukar')" autofocus class="span8" value="<?php echo $row->hutan_belukar?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Hutan Lebat / Lindung</label>
                                        <div class="controls">
                                            : <input type="number" name="hutanlebatlindung"  id="hutanlebatlindung" onkeyup="penggunaan('hutanlebatlindung')" autofocus class="span8" value="<?php echo $row->hutan_lebat_lindung?>">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Tanah Kosong</label>
                                        <div class="controls">
                                            : <input type="number" name="tanahkosong"  id="tanahkosong" onkeyup="penggunaan('tanahkosong')" autofocus class="span8" value="<?php echo $row->tanah_kosong?>">
                                        </div>
                                    </div>
                                </fieldset>
                                <br><br>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan" ><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_6/Buku_Data_Tanah_Desa/c_26_buku_tanah_desa/" class="tombolhapus" style="float: left;">Kembali</a>
                                    <div class="controls">
                                    <input type="submit" value="Ubah Data" name="ubahdata" class="tombolsimpanubah" onmouseover="return hitung()" onclick="return konfirmasiubahdata()"></input>
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