
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_C_3_a/Buku_Kas_Pembantu_Penerimaan/c_26_buku_kas_pembantu_penerimaan/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor BKU Penerimaan</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorbkupenerimaan" maxlength="255" required autofocus placeholder="Diisi dengan nomor bku penerimaan    ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Setor</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalsetor" maxlength="255" required autofocus placeholder="Diisi Tanggal Penerimaan STS / Bukti Penerimaan lainnya..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor STS / Bukti Penerimaan Lainnya</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorsts" maxlength="255" required id="pengeluaran" onkeyup="hitung('pengeluaran')" autofocus placeholder="Diisi nomor sts atau bukti penerimaan lainnya..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah (Rp)</label>
                                    <div class="controls">
                                        : <input type="number" name="jumlah" maxlength="255" value="0" autofocus placeholder="Diisi Saldo buku kas bendahara..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_C_3_a/Buku_Kas_Pembantu_Penerimaan/c_26_buku_kas_pembantu_penerimaan/" class="tombolhapus" style="float: left;">Kembali</a>
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