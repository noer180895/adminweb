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
                                <center><h3>Lihat Buku</h3></center>
                            </div>
                            <div class="module-body">
                            <?php
                                foreach ($ambildata as $row) {
                                
                            ?>
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_C_3_c/Buku_Kas_Harian_Pembantu/c_26_buku_kas_harian_pembantu/" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" readonly autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggal" maxlength="255" readonly autofocus value="<?php echo $row->tanggal?>" placeholder="Masukan Nama proyek yang direncanakan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Uraian</label>
                                    <div class="controls">
                                        : <textarea name="uraian" class="span8" readonly placeholder="masukan uraian seputar penerimaan atau pengeluaran"><?php echo $row->uraian?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Penerimaan (Rp)</label>
                                    <div class="controls">
                                        : <input type="number" name="penerimaan" maxlength="255" readonly id="penerimaan" onkeyup="hitung('penerimaan')" autofocus placeholder="Masukan Jumlah Rupiah Penerimaan Kas..." value="<?php echo $row->penerimaan?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pengeluaran (Rp)</label>
                                    <div class="controls">
                                        : <input type="number" name="pengeluaran" maxlength="255" readonly id="pengeluaran" onkeyup="hitung('pengeluaran')" autofocus placeholder="Masukan Jumlah Rupiah Pengeluaran Kas..." value="<?php echo $row->pengeluaran?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah (Rp)</label>
                                    <div class="controls">
                                        : <input type="text" name="jumlah" maxlength="255" readonly autofocus id="jumlah" value="<?php echo $row->jumlah?>" placeholder="Diisi Saldo buku kas bendahara..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                    <input type="submit" value="kembali" name="kembali" class="tombolhapus"></input>
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