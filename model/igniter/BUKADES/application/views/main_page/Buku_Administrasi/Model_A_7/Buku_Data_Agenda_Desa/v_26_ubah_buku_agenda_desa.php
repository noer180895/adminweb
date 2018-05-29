
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/c_26_buku_Agenda_desa/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggal"  autofocus value="<?php echo $row->tanggal?>" class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Surat</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Surat</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorsurat"  autofocus class="span8" value="<?php echo $row->nomor_surat?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Surat</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalsurat"  autofocus class="span8" value="<?php echo $row->tanggal_surat?>">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                <legend>Surat Masuk</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Dari siapa Surat Masuk</label>
                                    <div class="controls">
                                        : <input type="text" name="suratmasukdari"  autofocus class="span8" value="<?php echo $row->surat_masuk_dari?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Isi Singkat Surat Masuk</label>
                                    <div class="controls">
                                        : <textarea name="suratmasukisi" placeholder="isi singkat dari surat masuk" class="span8" ><?php echo $row->surat_masuk_isi?></textarea>
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Surat Keluar</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Isi Singkat Surat Keluar</label>
                                    <div class="controls">
                                        : <textarea name="suratkeluarisi" placeholder="diisi perihal surat keluar" class="span8"><?php echo $row->surat_keluar_isi?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Pengiriman</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpengiriman"  autofocus class="span8" value="<?php echo $row->surat_keluar_tanggal?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Alamat</label>
                                    <div class="controls">
                                        : <input type="text" name="alamat"  autofocus class="span8"  value="<?php echo $row->alamat?>">
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
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_7/Buku_Data_Agenda_Desa/c_26_buku_agenda_desa/" class="tombolhapus" style="float: left;">Kembali</a>
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