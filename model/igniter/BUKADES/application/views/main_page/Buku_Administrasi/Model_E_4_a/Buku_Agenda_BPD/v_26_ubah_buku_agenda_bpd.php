
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <center><h3>Lihat Buku</h3></center>
                            </div>
                            <div class="module-body">
                            <?php
                                foreach ($ambildata as $row) {
                                 
                            ?>
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Agenda</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalagenda" maxlength="200"  autofocus  value="<?php echo $row->tanggal_agenda?>" class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Surat Masuk</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Surat Masuk</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorsuratmasuk" maxlength="200"  autofocus  value="<?php echo $row->nomor_surat_masuk?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Surat Masuk</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalsuratmasuk" maxlength="200"  autofocus  value="<?php echo $row->tanggal_surat_masuk?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Dari Siapa</label>
                                    <div class="controls">
                                        : <input type="text" name="darisuratmasuk" maxlength="200"  autofocus  value="<?php echo $row->dari_surat_masuk?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Isi Singkat</label>
                                    <div class="controls">
                                        : <input type="text" name="isisuratmasuk" maxlength="200"  autofocus  value="<?php echo $row->isi_surat_masuk?>" class="span8">
                                    </div>
                                </div>
                                </fieldset>
                                <br><br>
                                <fieldset>
                                    <legend>Surat Keluar</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Isi Singkat</label>
                                    <div class="controls">
                                        : <input type="text" name="isisuratkeluar" maxlength="200"  autofocus  value="<?php echo $row->isi_surat_keluar ?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Pengiriman</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalsuratkeluar" maxlength="200"  autofocus  value="<?php echo $row->tanggal_surat_keluar?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Alamat</label>
                                    <div class="controls">
                                        : <input type="text" name="alamatsuratkeluar" maxlength="200"  autofocus  value="<?php echo $row->alamat_surat_keluar?>" class="span8">
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
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_E_4_a/Buku_Agenda_BPD/c_26_buku_agenda_bpd/" class="tombolhapus" style="float: left;">Kembali</a>
                                    <div class="controls">
                                    <input type="submit" value="Ubah Data" name="uabhdata" class="tombolsimpanubah" onclick="return konfirmasiubahdata()"></input>
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