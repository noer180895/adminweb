
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/c_26_buku_pengurus_anggota_kemasyarakatan/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" required autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Lembaga</label>
                                    <div class="controls">
                                        : <input type="text" name="namalembaga" maxlength="200" required autofocus placeholder="Diisi Nama Lembaga Kemasyarakatan..." class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Peraturan Desa</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Peraturan Desa</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalperaturandesa" maxlength="200" required autofocus placeholder="Diisi tanggal Peraturan Desa ..." class="span8">
                                    </div>
                                </div>
                                
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Peraturan Desa</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorperaturandesa" maxlength="200" required autofocus placeholder="Diisi nomor Peraturan Desa..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pengurus</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Pengurus</label>
                                    <div class="controls">
                                        : <input type="text" name="namapengurus" maxlength="200" required autofocus placeholder="Diisi nama pengurus ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Lahir Pengurus</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggallahirpengurus" maxlength="200" required autofocus placeholder="Diisi Tanggal Lahir Pengurus ..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Agama Pengurus</label>
                                    <div class="controls">
                                        : <select name="agamapengurus" required class="span8">
                                            <option value="Islam" name="islam" selected="">Islam</option>
                                            <option value="Protestan" name="protestan">Protestan</option>
                                            <option value="Khatolik" name="khatolik">Khatolik</option>
                                            <option value="Hindu" name="hindu">Hindu</option>
                                            <option value="Buddha" name="buddha">Buddha</option>
                                            <option value="Khonghucu" name="konghucu">Khonghucu</option>
                                            <option value="Tidak Beragama" name="tidakberagama">Tidak Beragama</option>
                                            <option value="Lainnya" name="lainnya">Lainnya</option>
                                        </select>    
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pendidikan Pengurus</label>
                                    <div class="controls">
                                        : <select name="pendidikanpengurus" required class="span8">
                                            <option value="Belum / Tidak Sekolah" selected>Belum / Tidak Sekolah</option>
                                            <option value="Belum Tamat DS / Sederajat">Belum Tamat SD / Sederajat</option>
                                            <option value="Tamat SD / Sederajat">Tamat SD / Sederajat</option>
                                            <option value="SLTP / Sederajat">SLTP/Sederajat</option>
                                            <option value="SLTP / Sederajat">SLTA/Sederajat</option>
                                            <option value="DIPLOMA I / II">DIPLOMA I/II</option>
                                            <option value="Akademi / DIPLOMA III / S.MUDA">Akademi / DIPLOMA III / S.Muda</option>
                                            <option value="DIPLOMA IV / STRATA I">DIPLOMA IV / STRATA I</option>
                                            <option value="STRATA II">STRATA II</option>
                                            <option value="STRATA III">STRATA III</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jabatan Pengurus</label>
                                    <div class="controls">
                                        : <select name="jabatanpengurus" required class="span8">
                                            <option value="Staff" selected>Staff</option>
                                            <option value="Sekretaris">Sekretaris</option>
                                            <option value="Asisten">Asisten</option>
                                            <option value="Kepala Bagian">Kepala Bagian</option>
                                            <option value="Kepala Bidang">Kepala Bidang</option>
                                            <option value="Kepala Urusan">Kepala Urusan</option>
                                            <option value="Direktur">Direktur</option>
                                        </select>    
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
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_1/Buku_Pengurus_Anggota_Kemasyarakatan/c_26_buku_pengurus_anggota_kemasyarakatan/" class="tombolhapus" style="float: left;">Kembali</a>
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