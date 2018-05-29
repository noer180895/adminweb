
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Anggaran</h3>
                            </div>
                            <div class="module-body">

                                    <form action="<?php echo base_url()?>Anggaran/c_26_Anggaran/simpan" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tahun</label>
                                            <div class="controls">
                                                <select name="tahun" required autofocus>
                                                    <option selected="selected">Tahun</option>
                                                    <?php
                                                    for($Tahun=2010; $Tahun<=2100; $Tahun++){
                                                    echo"<option value='$Tahun'> $Tahun </option>";
                                                    }
                                                    ?>
                                                    </select>    
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Anggaran</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    
                                                    <input type="number" name="anggaran" maxlength="255" required placeholder="100000000" class="span8"><span class="add-on">Rp.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal Masuk</label>
                                            <div class="controls">
                                                <input  type="text" name="tanggalubah" required placeholder="Tanggal masuk" class="span8 tip" value="<?php echo date('Y-m-d')?>" readonly>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Penanggung Jawab</label>
                                            <div class="controls">
                                                <input  type="text" name="penanggungjawab" maxlength="255" required placeholder="Penanggung Jawab…" class="span8 tip" value="<?php echo $datapj[0]->nama;?>" readonly>
                                            </div>
                                        </div>

                                         <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor Rekening</label>
                                            <div class="controls">
                                                <select name="nomorrekening" required>
                                                    <option selected="selected">Pilih</option>
                                                    <?php
                                                    foreach ($ambilrekening as $row) {
                                                        echo "<option value='".$row->nomor_rekening."'>".$row->nomor_rekening." ".$row->uraian."</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="btn btn-primary" onClick="return simpan()" name="simpan">Simpan</button>

                                                <button type="reset" class="btn btn-primary" name="batal">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                                                <a href="<?php echo base_url()?>Anggaran/c_26_Anggaran"><button class="btn btn-danger">Kembali</button></a>
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
<script type="text/javascript">
    function simpan() {
        return confirm("Apakah anda benar akan menyimpan data ?");
    }

</script>

            