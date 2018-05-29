
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Anggaran Pembangunan Desa</h3>
                            </div>
                            <div class="module-body">

                                    <form action="<?php echo base_url()?>APBDes/c_26_APBDes/simpan" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama Kegiatan </label>
                                            <div class="controls">
                                            
                                            <select name="kegiatan" required>
                                                    <option selected="selected">Pilih</option>
                                                    <?php
                                                    foreach ($ambilkegiatan as $row) {
                                                        echo "<option value='".$row->rencana."'>".$row->rencana."</option>";
                                                    }
                                                    ?>
                                                    </select>
                                                
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Anggaran Biaya</label>
                                            <div class="controls">

                                                <div class="input-append">
                                                
                                                    <input type="text" name="anggaran" maxlength="100" required placeholder="100000000" class="span8"><span class="add-on">Rp.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal</label>
                                            <div class="controls">
                                                <input  type="date" name="tanggal" required placeholder="Tanggal…" class="span8 tip">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Penanggung Jawab</label>
                                            <div class="controls">
                                                <input  type="text" name="penanggungjawab" required maxlength="150" placeholder="Penanggung Jawab…" class="span8 tip" readonly value="<?php echo $datapj[0]->nama; ?>">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tahun</label>
                                            <div class="controls">
                                                <select name="tahun" required>
                                                    <option selected="selected"><?php echo date('Y')?></option>
                                                    <?php
                                                    for($Tahun=2000; $Tahun<=2200; $Tahun++){
                                                    echo"<option value='$Tahun'> $Tahun </option>";
                                                    }
                                                    ?>
                                                    </select>    
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Keterangan </label>
                                            <div class="controls">
                                                <textarea class="span8" rows="5" name="keterangan" required placeholder="Keterangan Rencana APBDes..."></textarea>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-primary" onClick="return simpan()" name="simpan">Simpan</button>

                                                <button type="reset" class="btn btn-primary" name="batal">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                                <a href="<?php echo base_url()?>APBDes/c_26_APBDes"><button class="btn btn-danger">Kembali</button></a>
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
<script type="text/javascript">
    function simpan() {
        return confirm("Apakah anda benar akan menyimpan data ?");
    }


</script>