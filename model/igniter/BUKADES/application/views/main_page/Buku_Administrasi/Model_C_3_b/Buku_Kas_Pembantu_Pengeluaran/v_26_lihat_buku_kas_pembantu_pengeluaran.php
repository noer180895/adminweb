
                           
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
                            <form action="<?php echo base_url()?>Buku_Administrasi/Model_C_3_b/Buku_Kas_Pembantu_Pengeluaran/c_26_buku_kas_pembantu_pengeluaran/" method="POST"  class="form-horizontal row-fluid">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tahun</label>
                                    <div class="controls">
                                        : <input type="text" name="tahun" readonly autofocus class="span8" value="<?php echo $row->tahun?>">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor BKU Pengeluaran</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorbkupengeluaran" maxlength="255" readonly autofocus value="<?php echo $row->nomor_bku_pengeluaran?>" placeholder="Diisi dengan nomor bku pengeluaran..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal Pengeluaran</label>
                                    <div class="controls">
                                        : <input type="date" name="tanggalpengeluaran" maxlength="255" readonly autofocus value="<?php echo $row->tanggal_pengeluaran?>" placeholder="Diisi Tanggal Pengeluaran SPP / Bukti Pengeluaran lainnya..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor SPP / Bukti Pengeluaran Lainnya</label>
                                    <div class="controls">
                                        : <input type="text" name="nomorspp" maxlength="255" readonly value="<?php echo $row->nomor_spp?>" autofocus placeholder="Diisi nomor spp atau bukti pengeluaran lainnya..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Jumlah (Rp)</label>
                                    <div class="controls">
                                        : <input type="text" name="jumlah" maxlength="255" readonly autofocus value="<?php echo $row->jumlah?>" placeholder="Diisi Saldo buku kas bendahara..." class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                    <input type="submit" value="Kembali" name="kembali" class="tombolhapus"></input>
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