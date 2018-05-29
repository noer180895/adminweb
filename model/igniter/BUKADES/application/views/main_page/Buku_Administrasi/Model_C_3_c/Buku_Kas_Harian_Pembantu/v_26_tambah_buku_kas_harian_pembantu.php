<script type="text/javascript">
    function hitung(str) {
        var pengeluaran = document.getElementById('pengeluaran').value;
        var penerimaan = document.getElementById('penerimaan').value;
        var hasil = parseInt(penerimaan)-parseInt(pengeluaran);
        var cek = document.getElementById('jumlah').value = hasil;
        if(cek<0){
            alert('Pengeluaran Melebihi Penerimaan');
            document.getElementById(str).value = "";
            document.getElementById('jumlah').value = "";
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
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggal" maxlength="255" required autofocus placeholder="Masukan Nama proyek yang direncanakan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Uraian</label>
                                    <div class="controls">
                                        : <textarea name="uraian" class="span8" required placeholder="masukan uraian seputar penerimaan atau pengeluaran"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Penerimaan (Rp)</label>
                                    <div class="controls">
                                        : <input type="number" name="penerimaan" maxlength="255" required id="penerimaan" value="0" onkeyup="hitung('penerimaan')" autofocus placeholder="Masukan Jumlah Rupiah Penerimaan Kas..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pengeluaran (Rp)</label>
                                    <div class="controls">
                                        : <input type="number" name="pengeluaran" maxlength="255" required id="pengeluaran" value="0" onkeyup="hitung('pengeluaran')" autofocus placeholder="Masukan Jumlah Rupiah Pengeluaran Kas..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah (Rp)</label>
                                    <div class="controls">
                                        : <input type="text" name="jumlah" maxlength="255" readonly autofocus id="jumlah" placeholder="Diisi Saldo buku kas bendahara..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/" class="tombolhapus" style="float: left;">Kembali</a>
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