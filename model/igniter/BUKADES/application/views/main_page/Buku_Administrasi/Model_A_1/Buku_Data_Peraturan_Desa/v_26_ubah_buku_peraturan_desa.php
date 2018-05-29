
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_A_1/Buku_Data_Peraturan_Desa/c_26_buku_peraturan_desa/ubahdata" method="POST"  class="form-horizontal row-fluid">
                            <input type="hidden" name="id" value="<?php echo $id;?>"></input>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" maxlength="4" autofocus value="<?php echo $row->tahun;?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No Peraturan Desa</label>
                                    <div class="controls">
                                        : <input type="text" name="noperaturandesa"  autofocus value="<?php echo $row->nomor_peraturan_desa;?>" class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Peraturan Desa</label>
                                    <div class="controls">
                                        : <input type="date" name="tglperaturandesa"  autofocus value="<?php echo $row->tanggal_peraturan_desa;?>" class="span8">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tentang</label>
                                    <div class="controls">
                                        : <textarea name="tentang" class="span8" ><?php echo $row->tentang;?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Uraian Singkat</label>
                                    <div class="controls">
                                        : <textarea name="uraiansingkat" class="span8" ><?php echo $row->uraian_singkat;?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No dan Tanggal Persetujuan BPD</label>
                                    <div class="controls">
                                        : <input type="text" name="nopersetujuanbpd" maxlength="50"  autofocus  value="<?php echo $row->nomor_persetujuan_BPD;?>"  class="span4">
                                        <input type="date" name="tglpersetujuanbpd" maxlength="50"  autofocus  value="<?php echo $row->tanggal_persetujuan_BPD;?>"  class="span4">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">No dan tanggal Dilaporkan</label>
                                    <div class="controls">
                                        : <input type="text" name="nodilaporkan" maxlength="50"  autofocus  value="<?php echo $row->nomor_dilaporkan;?>"  class="span4">
                                        <input type="date" name="tgldilaporkan" maxlength="50"  autofocus  value="<?php echo $row->tanggal_dilaporkan;?>"  class="span4">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Keterangan</label>
                                    <div class="controls">
                                        : <textarea name="keterangan" class="span8" ><?php echo $row->keterangan;?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <a href="<?php echo base_url()?>Buku_Administrasi/Model_A_1/Buku_Data_Peraturan_Desa/c_26_buku_peraturan_desa/" class="tombolhapus" style="float: left;">Kembali</a>
                                    <div class="controls">
                                    <input type="submit" name="ubahdata" value="Ubah Data" class="tombolsimpanubah" onclick="return konfirmasiubahdata()"></input>
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