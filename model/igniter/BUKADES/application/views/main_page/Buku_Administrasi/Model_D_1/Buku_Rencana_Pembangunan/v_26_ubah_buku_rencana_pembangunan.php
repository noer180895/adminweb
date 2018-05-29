
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_D_1/Buku_Rencana_Pembangunan/c_26_buku_rencana_pembangunan/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun"  autofocus class="span8" value="<?php echo $row->tahun;?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Proyek Kegiatan</label>
                                    <div class="controls">
                                        : <input type="text" name="namaproyekkegiatan" maxlength="255"  autofocus value="<?php echo $row->nama_proyek;?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Lokasi</label>
                                    <div class="controls">
                                        : <input type="text" name="lokasi" maxlength="200"  autofocus value="<?php echo $row->lokasi;?>" class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Sumber Biaya(Rp)</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pemerintah</label>
                                    <div class="controls">
                                        : <div class="input-append" style="width: 615px">
                                        <span class="add-on">Rp</span><input type="number" name="pemerintah" maxlength="200" id="pemerintah" onkeyup="hitung('pemerintah')"  autofocus value="<?php echo $row->pemerintah;?>" class="span8">
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Swadaya</label>
                                    <div class="controls">
                                        : <div class="input-append" style="width: 615px">
                                        <span class="add-on">Rp</span><input type="number" name="swadaya" maxlength="200" id="swadaya" onkeyup="hitung('swadaya')"  autofocus value="<?php echo $row->swadaya;?>" class="span8">
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah</label>
                                    <div class="controls">
                                        : <div class="input-append" style="width: 615px">
                                        <span class="add-on">Rp</span><input type="number" name="jumlah" maxlength="200" id="jumlah"  autofocus value="<?php echo $row->jumlah;?>" class="span8">
                                        </div>
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Pelaksana</label>
                                    <div class="controls">
                                        : <input type="text" name="pelaksana" maxlength="200"  autofocus value="<?php echo $row->pelaksana;?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Manfaat</label>
                                    <div class="controls">
                                        : <input type="text" name="manfaat" maxlength="200"  autofocus value="<?php echo $row->manfaat;?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" placeholder="penjelasan atau catatan lain apabila diperlukan" ><?php echo $row->keterangan;?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_D_1/Buku_Rencana_Pembangunan/c_26_buku_rencana_pembangunan/" class="tombolhapus" style="float: left;">Kembali</a>
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