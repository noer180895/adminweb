
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/ubahdata" method="POST"  class="form-horizontal row-fluid">
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
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Kewarganegaraan</label>
                                    <div class="controls">
                                        : <input type="text" name="kewarganegaraan" maxlength="255"  autofocus  value="<?php echo $row->kewarganegaraan?>" class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Penduduk yang baru Datang</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Asal Daerah</label>
                                    <div class="controls">
                                        : <input type="text" name="asaldaerah" maxlength="255"  autofocus  value="<?php echo $row->datang_asal_daerah?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Datang</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggaldatang" maxlength="255"  autofocus  value="<?php echo $row->datang_tanggal_kedatangan?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tempat Lahir</label>
                                    <div class="controls">
                                        : <input type="text" name="datangtempatlahir" maxlength="255"  autofocus  value="<?php echo $row->datang_tempat_lahir?>"class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Lahir</label>
                                    <div class="controls">
                                        : <input type="date" name="datangtanggallahir" maxlength="255"  autofocus  value="<?php echo $row->datang_tanggal_lahir?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pengurangan Penduduk</label>
                                    <div class="controls">
                                        : <input type="text" name="penguranganpenduduk" maxlength="255"  autofocus  value="<?php echo $row->datang_pengurangan_penduduk?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Pindah</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpindah" maxlength="255"  autofocus  value="<?php echo $row->datang_tanggal_pindah?>" class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pendudung yang Meninggal</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tempat Meninggal</label>
                                    <div class="controls">
                                        : <input type="text" name="tempatmeninggal" maxlength="255"  autofocus  value="<?php echo $row->meninggal_tempat_meninggal?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Meninggal</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalmeninggal" maxlength="255" autofocus  value="<?php echo $row->meninggal_tanggal_meninggal?>" class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan" ><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_urL()?>Buku_Administrasi/Model_B_2/Buku_Mutasi_Penduduk/c_26_buku_mutasi_penduduk/" class="tombolhapus" style="float: left;">Kembali</a>
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