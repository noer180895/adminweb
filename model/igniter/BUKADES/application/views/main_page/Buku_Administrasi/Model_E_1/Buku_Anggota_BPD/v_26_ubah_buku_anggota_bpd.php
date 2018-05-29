
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_E_1/Buku_Anggota_BPD/c_26_buku_anggota_bpd/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Lengkap</label>
                                    <div class="controls">
                                        : <input type="text" name="namalengkap" maxlength="255"  autofocus  value="<?php echo $row->nama_lengkap?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                    <div class="controls">
                                        : <select name="jeniskelamin"  class="span8">
                                            <option value="<?php echo $row->jenis_kelamin?>" selected><?php echo $row->jenis_kelamin?></option>
                                            <option value="Laki - Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Tempat dan Tanggal Lahir</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tempat Lahir</label>
                                    <div class="controls">
                                        : <input type="text" name="tempatlahir" maxlength="200"  autofocus  value="<?php echo $row->tempat_lahir?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggallahir" maxlength="255"  autofocus  value="<?php echo $row->tanggal_lahir?>" class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Agama</label>
                                    <div class="controls">
                                        : <select name="agama"  class="span8">
                                            <option value="<?php echo $row->agama?>" selected><?php echo $row->agama?></option>
                                            <option value="Islam" name="islam" >Islam</option>
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
                                    <label class="control-label" for="basicinput">Jabatan</label>
                                    <div class="controls">
                                        : <input type="text" name="jabatan" maxlength="200"  autofocus  value="<?php echo $row->jabatan?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pendidikan Terakhir</label>
                                    <div class="controls">
                                        : <select name="pendidikanterakhir"  class="span8">
                                            <option value="<?php echo $row->pendidikan_terakhir?>" selected><?php echo $row->pendidikan_terakhir?></option>
                                            <option value="Belum / Tidak Sekolah">Belum / Tidak Sekolah</option>
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
                                <br><br>
                                <fieldset>
                                    <legend>Keputusan Pengangakatan</legend>
                                    <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Pengangkatan</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpengangkatan" maxlength="200"  autofocus  value="<?php echo $row->keputusan_pengangkatan_tanggal?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Pengangkatan</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorpengangkatan" maxlength="200"  autofocus  value="<?php echo $row->keputusan_pengangkatan_nomor?>" class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Keputusan Pemberhentian</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal pemberhentian</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpemberhentian" maxlength="200"  autofocus  value="<?php echo $row->keputusan_pemberhentian_tanggal?>"class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Pemberhentian</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorpemberhentian" maxlength="200"  autofocus  value="<?php echo $row->keputusan_pemberhentian_nomor?>" class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan" =""><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_E_1/Buku_Anggota_BPD/c_26_buku_anggota_bpd/" class="tombolhapus" style="float: left;">Kembali</a>
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