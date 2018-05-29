<script type="text/javascript">
    function asalbarang (str) {
        var beli = document.getElementById('belisendiri').value;
        var bantuanpemerintah = document.getElementById('bantuanpemerintah').value;
        var sumbangan = document.getElementById('sumbangan').value;
        var hitungasal = parseInt(beli)+parseInt(bantuanpemerintah)+parseInt(sumbangan);
        document.getElementById('hitungasalbarang').value = hitungasal;
    }
    function hitungkeadaanawal(str) {

        var awal = document.getElementById('hitungasalbarang').value;
        var awalbaik = document.getElementById('awalbaik').value;
        var awalrusak = document.getElementById('awalrusak').value;
        var hitung = parseInt(awalbaik)+parseInt(awalrusak);
        if(hitung>awal){
            alert('jumlah keadaan seluruh barang awal tahun '+hitung+' tidak boleh melebihi atau kurang dari jumlah asal barang yakni '+awal);
            document.getElementById(str).value='0';
        }else{

        }
        
    }
    function hitungpenghapusan (str) {
         var awal = document.getElementById('hitungasalbarang').value;
         var rusak = document.getElementById('hapusrusak').value;
         var jual = document.getElementById('hapusjual').value;
         var sumbangkan = document.getElementById('hapusdisumbangkan').value;
         var hitungpenghapusan = parseInt(rusak)+parseInt(jual)+parseInt(sumbangkan);
         if(hitungpenghapusan>awal){
            alert('jumlah penghapusan barang '+hitungpenghapusan+' tidak boleh melebihi dari jumlah awal barang yakni '+awal);
            document.getElementById(str).value='0';
        }else{

        }
    }
    function hitungkeadaanakhir (str) {
        var awal = document.getElementById('hitungasalbarang').value;
        var akhirbaik = document.getElementById('akhirbaik').value;
        var akhirrusak = document.getElementById('akhirrusak').value;
        var hitungakhir = parseInt(akhirbaik)+parseInt(akhirrusak);
        
        if(hitungakhir>awal){
            alert('jumlah keadaan seluruh barang akhir tahun '+hitungakhir+' tidak boleh melebihi atau kurang dari jumlah asal barang yakni '+awal);
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun"  autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis Barang Bangunan</label>
                                    <div class="controls">
                                        : <input type="text" name="jenisbarangbangunan"  autofocus placeholder="Masukan Nama Barang..." class="span8" value="<?php echo $row->jenis_barang_bangunan?>">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                <legend>Asal Barang</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Dibeli Sendiri</label>
                                    <div class="controls">
                                        : <input type="number" name="dibelisendiri"  autofocus class="span8"  id="belisendiri" onkeyup="asalbarang('belisendiri')" value="<?php echo $row->asal_dibeli_sendiri?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Bantuan Pemerintah</label>
                                    <div class="controls">
                                        : <input type="number" name="bantuanpemerintah"  autofocus class="span8"  id="bantuanpemerintah" onkeyup="asalbarang('bantuanpemerintah')" value="<?php echo $row->asal_bantuan_pemerintah?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Sumbangan</label>
                                    <div class="controls">
                                        : <input type="number" name="sumbangan"  autofocus class="span8" id="sumbangan" onkeyup="asalbarang('sumbangan')" value="<?php echo $row->asal_sumbangan?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <input type="hidden" id="hitungasalbarang" value="0"></input>
                                <fieldset>
                                <legend>Keadaan Barang Awal Tahun</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Baik</label>
                                    <div class="controls">
                                        : <input type="number" name="keadaanawalbaik"  id="awalbaik" onkeyup="hitungkeadaanawal('awalbaik')"  autofocus class="span8" value="<?php echo $row->keadaan_baik?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Rusak</label>
                                    <div class="controls">
                                        : <input type="number" name="keadaanawalrusak"  id="awalrusak" onkeyup="hitungkeadaanawal('awalrusak')" autofocus class="span8" value="<?php echo $row->keadaan_rusak?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>

                                <fieldset>
                                <legend>Penghapusan</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Rusak</label>
                                    <div class="controls">
                                        : <input type="number" name="penghapusanrusak"  autofocus class="span8" id="hapusrusak"  onkeyup="hitungpenghapusan('hapusrusak')" value="<?php echo $row->penghapusan_rusak?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Dijual</label>
                                    <div class="controls">
                                        : <input type="number" name="penghapusandijual"  autofocus class="span8" id="hapusjual"  onkeyup="hitungpenghapusan('hapusjual')"  value="<?php echo $row->penghapusan_dijual?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Disumbangkan</label>
                                    <div class="controls">
                                        : <input type="number" name="penghapusandisumbangkan"  id="hapusdisumbangkan" onkeyup="hitungpenghapusan('hapusdisumbangkan')"  autofocus class="span8" value="<?php echo $row->penghapusan_disumbangkan?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Penghapusan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpenghapusan"  autofocus class="span8" value="<?php echo $row->tanggal_penghapusan?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                <legend>Keadaan Barang Akhir Tahun</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Baik</label>
                                    <div class="controls">
                                        : <input type="number" name="keadaanakhirbaik"  id="akhirbaik" onkeyup="hitungkeadaanakhir('akhirbaik')"  autofocus class="span8" value="<?php echo $row->keadaan_akhir_tahun_baik?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Rusak</label>
                                    <div class="controls">
                                        : <input type="number" name="keadaanakhirrusak"  id="akhirrusak" onkeyup="hitungkeadaanakhir('akhirrusak')"  autofocus class="span8" value="<?php echo $row->keadaan_akhir_tahun_rusak?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" ><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_urL()?>Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/" class="tombolhapus" style="float: left;">Kembali</a>
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