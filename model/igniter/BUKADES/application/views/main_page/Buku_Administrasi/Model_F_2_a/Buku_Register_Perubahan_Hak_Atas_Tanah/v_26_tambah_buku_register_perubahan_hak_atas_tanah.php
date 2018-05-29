
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/c_26_buku_register_perubahan_hak_atas_tanah/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Perubahan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalperubahan" maxlength="200" required autofocus placeholder="Diisi tanggal perubahan hak atas tanah..." class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Perubahan Hak Atas Tanah</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Yang Melepaskan Hak</label>
                                    <div class="controls">
                                        : <input type="text" name="namayangmelepaskan" maxlength="200" required autofocus placeholder="Diisi Nama Lembaga atau Orang yang melepaskan hak ..." class="span8">
                                    </div>
                                </div>
                                
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama yang Menerima</label>
                                    <div class="controls">
                                        : <input type="text" name="namayangmenerima" maxlength="200" required autofocus placeholder="Diisi Nama Lembaga atau Orang yang menerima hak..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis dan Kelas Tanah</label>
                                    <div class="controls">
                                        : <select name="jeniskelas" required class="span8">
                                            <option value="Sawah" selected>Sawah</option>
                                            <option value="Daratan" >Daratan</option>
                                        </select>
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pengurus</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Persil</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorpersil" maxlength="200" required autofocus placeholder="Diisi nomor persil ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Letak Blok</label>
                                    <div class="controls">
                                        : <input type="text" name="letakblok" maxlength="200" required autofocus placeholder="Diisi dengan lokasi tanah (Blok) ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Luas Tanah</label>
                                    <div class="controls">
                                        : <input type="number" name="luastanah" value="0" maxlength="200" required autofocus placeholder="Diisi dengan luas tanah ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Batas Keliling</label>
                                    <div class="controls">
                                        : <input type="text" name="bataskeliling" maxlength="200" required autofocus placeholder="Diisi dengan batas batas keliling tanah ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Harga (Rp)</label>
                                    <div class="controls">
                                        : <input type="number" name="harga" maxlength="200" value="0" required autofocus placeholder="Diisi dengan harga tanah ..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Akte Perubahan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalakteperubahan" maxlength="200" required autofocus placeholder="Diisi tanggal akte perubahan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Akte Perubahan</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorakteperubahan" maxlength="200" required autofocus placeholder="Diisi dengan nomor akte perubahan..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Proses Perubahan Hak</label>
                                    <div class="controls">
                                        : <select name="prosesperubahan" required class="span8">
                                            <option value="Jual Beli" selected>Jual Beli</option>
                                            <option value="Hibah">Hibah</option>
                                            <option value="Wakaf">Wakaf</option>
                                            <option value="Tukar Menukar">Tukar Menukar</option>
                                            <option value="Waris">Waris</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_a/Buku_Register_Perubahan_Hak_Atas_Tanah/c_26_buku_register_perubahan_hak_atas_tanah/" class="tombolhapus" style="float: left;">Kembali</a>
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