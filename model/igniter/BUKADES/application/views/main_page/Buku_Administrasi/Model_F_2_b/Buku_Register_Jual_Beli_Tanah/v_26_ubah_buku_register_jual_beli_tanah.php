
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Surat Perjanjian</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalsuratperjanjian" maxlength="200"  autofocus value="<?php echo $row->tanggal_surat_perjanjian?>" placeholder="Diisi tanggal surat perjanjian hak atas tanah..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Surat Perjanjian / Sertifikat Hak Atas Tanah</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorsuratperjanjian" maxlength="200"  autofocus value="<?php echo $row->nomor_surat_perjanjian?>" placeholder="Diisi nomor surat perjanjian / sertifikat hak atas tanah..." class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Penjual</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Penjual</label>
                                    <div class="controls">
                                        : <input type="text" name="namapenjual" maxlength="200"  autofocus value="<?php echo $row->nama_penjual?>" placeholder="Diisi Nama Lembaga atau Orang yang menjual tanah..." class="span8">
                                    </div>
                                </div>
                                
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Alamat Penjual</label>
                                    <div class="controls">
                                        : <textarea name="alamatpenjual"  value="" placeholder="Diisi alamat lembaga atau orang yang menjual tanah" class="span8"><?php echo $row->alamat_penjual?></textarea>
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Pembeli</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Pembeli</label>
                                    <div class="controls">
                                        : <input type="text" name="namapembeli" maxlength="200"  autofocus value="<?php echo $row->nama_pembeli?>" placeholder="Diisi Nama Lembaga atau Orang yang membeli tanah..." class="span8">
                                    </div>
                                </div>
                                
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Alamat Pembeli</label>
                                    <div class="controls">
                                        : <textarea name="alamatpembeli"  placeholder="Diisi alamat lembaga atau orang yang membeli tanah" value="" class="span8"><?php echo $row->alamat_pembeli?></textarea>
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Tanah yang Dijual</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No Kitir / Girik</label>
                                    <div class="controls">
                                        : <input type="text" name="nokitirgirik" maxlength="200"  autofocus value="<?php echo $row->nomor_kitir_girik_tanah?>" placeholder="Diisi Nomor tanah..." class="span8">
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Persil</label>
                                    <div class="controls">
                                        : <input type="text" name="nopersil" maxlength="200"  autofocus value="<?php echo $row->nomor_persil_tanah?>" placeholder="Diisi Nomor persil dari tanah..." class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jenis Tanah</label>
                                    <div class="controls">
                                        : <select name="jenistanah" class="span8">
                                            <option value="<?php echo $row->jenis_tanah?>" selected><?php echo $row->jenis_tanah?></option>
                                            <option value="Sawah">Sawah</option>
                                            <option value="Daratan">Daratan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Luas Tanah</label>
                                    <div class="controls">
                                        : <input type="number" name="luastanah" maxlength="200"  autofocus value="<?php echo $row->luas_tanah?>" placeholder="Diisi luas tanah..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Batas Batas Keliling Tanah</label>
                                    <div class="controls">
                                        : <input type="text" name="bataskeliling" maxlength="200"  autofocus value="<?php echo $row->batas_tanah?>" placeholder="Diisi batas keliling tanah..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Harga</label>
                                    <div class="controls">
                                        : <input type="number" name="harga" maxlength="200"  autofocus value="<?php echo $row->harga?>" placeholder="Diisi harga tanah..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Syarat Lain</label>
                                    <div class="controls">
                                        : <input type="text" name="syaratlain" maxlength="200"  autofocus value="<?php echo $row->syarat_lain?>" placeholder="Diisi syarat lain apabila ada..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan" ><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_F_2_b/Buku_Register_Jual_Beli_Tanah/c_26_buku_register_jual_beli_tanah/" class="tombolhapus" style="float: left;">Kembali</a>
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