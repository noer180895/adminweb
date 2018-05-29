
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Anggaran Pembangunan Desa</h3>
                            </div>
                            <div class="module-body">
                                    <?php

                                            foreach ($ambildata as $row)
                                            {
                                                $id = $row->id;
                                                $awal = $row->tahun;
                                            ?>
                                    <form action="<?php echo base_url()?>APBDes/c_26_APBDes/UbahData?id=<?php echo $id; ?>" class="form-horizontal row-fluid" method="POST">
                                        
                                        <div class="control-group">
                                                <label class="control-label" for="basicinput">Kegiatan </label>
                                            <div class="controls">
                                                <input type="text" class='span8' autofocus rows='5' name='kegiatan' maxlength='255' required placeholder='Rencana APBDes..' value="<?php echo "$row->kegiatan"; ?>">

                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Anggaran</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    <input type="text" name="anggaran" maxlength="255" required placeholder="1000000" value="<?php echo "$row->anggaran"; ?>" class="span8" ><span class="add-on">Rp.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal</label>
                                            <div class="controls">
                                                <input  type="date" id="date" name="tanggal" maxlength="100" value="<?php echo "$row->tanggal"; ?>" required placeholder="Tanggal…"  class="span8 tip">
                                            </div>
                                        </div>

                                        
                                              
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Penanggung Jawab</label>
                                            <div class="controls">
                                                <input  type="text" name="penanggungjawab" placeholder="Penanggung Jawab…" class="span8 tip" value="<?php echo "$row->penanggung_jawab"; ?>" readonly>
                                            </div>
                                        </div>
                                        

                                        <div class="control-group">
                                                    <label class="control-label" for="basicinput">Tahun </label>
                                                <div class="controls">
                                                    <select class="span8" name="tahun" required autofocus rows='5'>
                                                    <option selected="selected"><?php echo $awal; ?></option>
                                                    <?php
                                                    
                                                    for($Tahun=2000; $Tahun<=2100; $Tahun++){
                                                    echo"<option value='$Tahun'> $Tahun </option>";
                                                    }
                                                    ?>
                                                    </select>  
                                                </div>
                                                </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Keterangan</label>
                                            <div class="controls">
                                                <textarea name="keterangan" maxlength="100" required class="span8 tip"><?php echo "$row->keterangan";?></textarea>
                                            </div>
                                        </div>
                                        <?php
                                                }
                                            ?>
                                            <div class="control-group">
                                                <div class="controls">
                                                <input type="submit" name="simpan" onClick="return ubah()" value="Ubah" class="btn btn-primary">
                                                </div>
                                            </div>
                                    </form>
                                    
                                    <a href="<?php echo base_url()?>APBDes/c_26_APBDes"><button class="btn btn-danger">Kembali</button></a>
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
<script type="text/javascript">
    function ubah() {
        return confirm("Apakah anda benar akan mengubah data ?");
    }


</script>