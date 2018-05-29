
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Tambah Data Penyusunan Anggaran Pembangunan dan Belanja Desa</h3>
                            </div>
                            <div class="module-body">
                                    <form action="<?php echo base_url()?>RAPBDes/c_26_RAPBDes/simpan" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor PERDES</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    <input type="text" name="nomorperdes" maxlength="100" style="width: 350px" required placeholder="Nomor Perdes" class="span8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tahun</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    <select name="tahun">
                                                        <?php
                                                            for ($i=2010; $i < 2200 ; $i++) { 
                                                        ?>
                                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Status</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    <select name="status">
                                                        <option value="murni">Murni</option>
                                                        <option value="murni">Tidak Murni</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-append">
                                                    <input type="hidden" name="penanggungjawab" maxlength="100" style="width: 350px" required placeholder="Penanggung Jawab" value="<?php echo $datapj[0]->nama;?>" class="span8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                    <button type="submit" name="simpan" value="Simpan" class="btn btn-primary">Simpan</button>
                                                    <button type="reset" name="batal" value="Batal" class="btn btn-primary">Batal</button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                    
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
<script type="text/javascript">
    function simpan() {
        return confirm("Apakah anda benar akan menyimpan data ?");
    }


</script>