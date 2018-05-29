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
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis Barang Bangunan</label>
                                    <div class="controls">
                                        : <input type="text" name="jenisbarangbangunan" required autofocus placeholder="Masukan nama barang/bangunan inventaris desa..." class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                <legend>Asal Barang</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Dibeli Sendiri</label>
                                    <div class="controls">
                                        : <input type="number" name="dibelisendiri" required autofocus class="span8" id="belisendiri" onkeyup="asalbarang('belisendiri')" placeholder="Masukan jumlah barang/bangunan yang dibeli desa" value="0">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Bantuan Pemerintah</label>
                                    <div class="controls">
                                        : <input type="number" name="bantuanpemerintah" required autofocus class="span8" id="bantuanpemerintah" onkeyup="asalbarang('bantuanpemerintah')" placeholder="Masukan jumlah barang/bangunan yang dari bantuan pemerintah" value="0">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Sumbangan</label>
                                    <div class="controls">
                                        : <input type="number" name="sumbangan" required autofocus class="span8" id="sumbangan" onkeyup="asalbarang('sumbangan')" placeholder="Masukan jumlah barang/bangunan yang diperoleh dari sumbangan" value="0">
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
                                        : <input type="number" name="keadaanawalbaik" id="awalbaik" onkeyup="hitungkeadaanawal('awalbaik')" required autofocus class="span8" placeholder="diisi jumlah barang/bangunan  keadaan awal tahun keadaan baik" value="0">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Rusak</label>
                                    <div class="controls">
                                        : <input type="number" name="keadaanawalrusak" id="awalrusak" onkeyup="hitungkeadaanawal('awalrusak')" required autofocus class="span8" placeholder="diisi jumlah barang/bangunan keadaan awal tahun keadaan rusak" value="0">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>

                                <fieldset>
                                <legend>Penghapusan</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Rusak</label>
                                    <div class="controls">
                                        : <input type="number" name="penghapusanrusak" required autofocus id="hapusrusak" value="0" onkeyup="hitungpenghapusan('hapusrusak')" class="span8" placeholder="diisi jumlah barang/bangunan dihapus karena rusak">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Dijual</label>
                                    <div class="controls">
                                        : <input type="number" name="penghapusandijual" required autofocus id="hapusjual" value="0" onkeyup="hitungpenghapusan('hapusjual')" class="span8" placeholder="diisi jumlah barang/bangunan karena dijual">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Disumbangkan</label>
                                    <div class="controls">
                                        : <input type="number" name="penghapusandisumbangkan" required autofocus id="hapusdisumbangkan" onkeyup="hitungpenghapusan('hapusdisumbangkan')" value="0" class="span8" placeholder="diisi jumlah barang/bangunan karena disumbangkan">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Penghapusan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpenghapusan" required autofocus class="span8" placeholder="diisi tanggal penghapusan barang tersebut">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                <legend>Keadaan Barang Akhir Tahun</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Baik</label>
                                    <div class="controls">
                                        : <input type="number" name="keadaanakhirbaik" required autofocus class="span8" value="0" id="akhirbaik" onkeyup="hitungkeadaanakhir('akhirbaik')" placeholder="diisi jumlah barang/bangunan keadaan akhir tahun keadaan baik">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Rusak</label>
                                    <div class="controls">
                                        : <input type="number" name="keadaanakhirrusak" required autofocus class="span8" value="0" id="akhirrusak" onkeyup="hitungkeadaanakhir('akhirrusak')" placeholder="diisi jumlah barang/bangunan keadaan akhir tahun keadaan rusak">
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
                                    <a href="<?php echo base_urL()?>Buku_Administrasi/Model_A_3/Buku_Data_Inventaris_Desa/c_26_buku_inventaris_desa/" class="tombolhapus" style="float: left;">Kembali</a>
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