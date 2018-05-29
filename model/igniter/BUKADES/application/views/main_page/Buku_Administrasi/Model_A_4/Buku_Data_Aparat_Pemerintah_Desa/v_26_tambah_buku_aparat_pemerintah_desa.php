
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Tambah Buku</h3></center>
                            </div>
                            <div class="module-body">
                            
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_4/Buku_Data_Aparat_Pemerintah_Desa/c_26_buku_aparat_pemerintah_desa/simpan" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" required maxlength="4" autofocus class="span8" value="<?php echo date('Y')?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Lengkap</label>
                                    <div class="controls">
                                        : <input type="text" name="namalengkap" required autofocus placeholder="Masukan nama lengkap..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">NIAP</label>
                                    <div class="controls">
                                        : <input type="number" name="niap" required autofocus class="span8" placeholder="Masukan nomor induk aparat pemerintah">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">NIP / NRP</label>
                                    <div class="controls">
                                        : <input type="number" name="nipnrp" required autofocus class="span8" placeholder="Masukan nip atau nrp">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                    <div class="controls">
                                        : <select name="jeniskelamin" required>
                                            <option value="Laki - Laki" selected="">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tempat Lahir</label>
                                    <div class="controls">
                                        : <input type="text" name="tmptlahir" required autofocus class="span8" placeholder="diisi tempat lahir">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                    <div class="controls">
                                        : <input type="date" name="tgllahir" required autofocus class="span8" placeholder="diisi tanggal lahir">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Agama</label>
                                    <div class="controls">
                                        : <select name="agama" required>
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
                                    <label class="control-label" for="basicinput">Pangkat/Golongan</label>
                                    <div class="controls">
                                        : <select name="pangkatgolongan" required>
                                            <option value="Juru Muda, I/a" selected="">Juru Muda, I/a</option>
                                            <option value="Juru Muda Tingkat 1, I/b">Juru Muda Tingkat 1, I/b</option>
                                            <option value="Juru, I/c">Juru, I/c</option>
                                            <option value="Juru Tingkat 1, I/d">Juru Tingkat 1, I/d</option>
                                            <option value="Pengatur Muda, II/a">Pengatur Muda, II/a</option>
                                            <option value="Pengatur Muda Tingkat 1, II/b">Pengatur Muda Tingkat 1, II/b</option>
                                            <option value="Pengatur, II/c">Pengatur, II/c</option>
                                            <option value="Pengatur Tingkat 1, II/d">Pengatur Tingkat 1, II/d</option>
                                            <option value="Penata Muda, III/a">Penata Muda, III/a</option>
                                            <option value="Penata Muda Tingkat 1, III/b">Penata Muda Tingkat 1, III/b</option>
                                            <option value="Penata, III/c">Penata, III/c</option>
                                            <option value="Penata Tingkat 1, III/d">Penata Tingkat 1, III/d</option>
                                            <option value="Pembina, IV/a">Pembina, IV/a</option>
                                            <option value="Pembina Tingkat 1, IV/b">Pembina Tingkat 1, IV/b</option>
                                            <option value="Pembina Utama Muda, IV/c">Pembina Utama Muda, IV/c</option>
                                            <option value="Pembina Utama Madya, IV/d">Pembina Utama Madya, IV/d</option>
                                            <option value="Pembina Utama, IV/e">Pembina Utama, IV/e</option>
                                        </select>    
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jabatan</label>
                                    <div class="controls">
                                        : <select name="jabatan" required>
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
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pendidikan Terakhir</label>
                                    <div class="controls">
                                        : <select name="pendidikanterakhir" required>
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
                                    <label class="control-label" for="basicinput">No & Tanggal Keputusan Pengangkatan</label>
                                    <div class="controls">
                                        : <input type="text" name="nokeputusanpengangkatan" required autofocus class="span4" placeholder="diisi no pengangkatan">
                                        <input type="date" name="tglkeputusanpengangkatan" required autofocus class="span4" placeholder="diisi tanggal pengangkatan">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No & Tanggal Keputusan Pemberhentian</label>
                                    <div class="controls">
                                        : <input type="text" name="nokeputusanpemberhentian" required autofocus class="span4" placeholder="diisi no  pemberhentian">
                                        <input type="date" name="tglkeputusanpemberhentian" required autofocus class="span4" placeholder="diisi pemberhentian">
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_4/Buku_Data_Aparat_Pemerintah_Desa/c_26_buku_aparat_pemerintah_desa/" class="tombolhapus" style="float: left;">Kembali</a>
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