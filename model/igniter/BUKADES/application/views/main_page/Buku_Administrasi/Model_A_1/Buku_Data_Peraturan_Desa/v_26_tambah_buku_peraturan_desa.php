
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_1/Buku_Data_Peraturan_Desa/c_26_buku_peraturan_desa/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No Peraturan Desa</label>
                                    <div class="controls">
                                        : <input type="text" name="noperaturandesa" required autofocus placeholder="Masukan No peraturan desa..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Peraturan Desa</label>
                                    <div class="controls">
                                        : <input type="date" name="tglperaturandesa" maxlength="20" required autofocus class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tentang</label>
                                    <div class="controls">
                                        : <textarea name="tentang" class="span8" placeholder="Diisi Tentang judul/penamaan Perdes"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Uraian Singkat</label>
                                    <div class="controls">
                                        : <textarea name="uraiansingkat" class="span8" placeholder="Diisi secara jelas dan singkat tentang materi pokok pada Perdes yang telah ditetapkan"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No dan Tanggal Persetujuan BPD</label>
                                    <div class="controls">
                                        : <input type="text" name="nopersetujuanbpd" maxlength="50" required autofocus placeholder="Diisi no dari Keputusan BPD" class="span4">
                                        <input type="date" name="tglpersetujuanbpd" maxlength="50" required autofocus placeholder="Diisi tanggal, bulan dan tahun dari Keputusan BPD" class="span4">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No dan tanggal Dilaporkan Kepada Bupati</label>
                                    <div class="controls">
                                        : <input type="text" name="nodilaporkan" maxlength="50" required autofocus placeholder="Diisi no surat pengantar pelaporan" class="span4">
                                        <input type="date" name="tgldilaporkan" maxlength="50" required autofocus placeholder="Diisi tanggal pelaporan" class="span4">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="Diisi tentang keterangan dari nomor dan tanggal peraturan desa apabila di perlukan"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_1/Buku_Data_Peraturan_Desa/c_26_buku_peraturan_desa/" class="tombolhapus" style="float: left;">Kembali</a>
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