<script type="text/javascript">
    function hitung(str) {
        var pemerintah = document.getElementById('pemerintah').value;
        var swadaya = document.getElementById('swadaya').value;
        var hasil = parseInt(pemerintah)+parseInt(swadaya);
        document.getElementById('jumlah').value = hasil;
    }
</script>
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_D_2/Buku_Kegiatan_Pembangunan/c_26_buku_kegiatan_pembangunan/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Proyek Kegiatan</label>
                                    <div class="controls">
                                        : <input type="text" name="namaproyekkegiatan" maxlength="255"  autofocus value="<?php echo $row->nama_proyek?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Volume</label>
                                    <div class="controls">
                                        : <input type="text" name="volume" maxlength="200"  autofocus value="<?php echo $row->volume?>" class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Sumber Biaya(Rp)</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pemerintah</label>
                                    <div class="controls">
                                        : <div class="input-append" style="width: 615px">
                                        <span class="add-on">Rp</span><input type="number" name="pemerintah" maxlength="200" id="pemerintah" onkeyup="hitung('pemerintah')"  autofocus value="<?php echo $row->pemerintah?>" class="span8">
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Swadaya</label>
                                    <div class="controls">
                                        : <div class="input-append" style="width: 615px">
                                        <span class="add-on">Rp</span><input type="number" name="swadaya" maxlength="200" id="swadaya" onkeyup="hitung('swadaya')"  autofocus value="<?php echo $row->swadaya?>" class="span8">
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah</label>
                                    <div class="controls">
                                        : <div class="input-append" style="width: 615px">
                                        <span class="add-on">Rp</span><input type="number" name="jumlah" readonly maxlength="200" id="jumlah"  autofocus value="<?php echo $row->jumlah?>" class="span8">
                                        </div>
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Waktu Penyelesaian</label>
                                    <div class="controls">
                                        : <input type="date" name="waktupenyelesaian" maxlength="200"  autofocus value="<?php echo $row->waktu_penyelesaian?>" class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Sifat Proyek</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Baru</label>
                                    <div class="controls">
                                        : <select name="baru" required class="span8">
                                            <option value="<?php echo $row->sifat_proyek_baru?>" selected><?php echo $row->sifat_proyek_baru?></option>
                                            <option value="Ya">Ya</option>
                                            <option value="Tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Lanjutan</label>
                                    <div class="controls">
                                        : <select name="lanjutan" required class="span8">
                                            <option value="<?php echo $row->sifat_proyek_lanjutan?>" selected><?php echo $row->sifat_proyek_lanjutan?></option>
                                            <option value="Ya">Ya</option>
                                            <option value="Tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pelaksana Proyek</label>
                                    <div class="controls">
                                        : <input type="text" name="pelaksana" maxlength="200"  autofocus value="<?php echo $row->pelaksana_proyek?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan" ><?php echo $row->keterangan?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_D_2/Buku_Kegiatan_Pembangunan/c_26_buku_kegiatan_pembangunan/" class="tombolhapus" style="float: left;">Kembali</a>
                                    <div class="controls">
                                    <input type="submit" value="Ubah Data" name="ubahdata" class="tombolsimpanubah" onclick="return konfirmasiubahdata()"></input>
                                    </div>
                                </div>
                            </form>
                            <<?php 
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