
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Anggaran</h3>
                            </div>
                            <div class="module-body">

                                    <form action="<?php echo base_url()?>RAPBDes/c_26_RAPBDes/simpan" class="form-horizontal row-fluid" method="POST">
                                        <?php
                                            foreach ($ambildata as $row)
                                            {
                                            ?>
                                                <div class="control-group">
                                                    <label class="control-label" for="basicinput">Tahun </label>
                                                <div class="controls">
                                                    <input type="text" class='span8' autofocus rows='5' name='rencana' maxlength='255' required placeholder='Rencana APBDes..' readonly value="<?php echo "$row->tahun"; ?>">

                                                </div>
                                                </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Anggaran</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    <input type="text" name="anggaran" maxlength="255" required placeholder="1000000" value="<?php echo "$row->anggaran"; ?>" class="span8" readonly><span class="add-on">Rp.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal Masuk</label>
                                            <div class="controls">
                                                <input  type="text" id="date" name="tanggalmasuk" maxlength="100" value="<?php echo "$row->tanggal_input"; ?>" required placeholder="Tanggal…" class="span8 tip" readonly>
                                            </div>
                                        </div>
                                              
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Penanggung Jawab</label>
                                            <div class="controls">
                                                <input  type="text" name="penanggungjawab" placeholder="Penanggung Jawab…" class="span8 tip" value="<?php echo "$row->penanggung_jawab";?>" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal Ubah</label>
                                            <div class="controls">
                                                <input  type="text" id="date" name="tanggalubah" maxlength="100" value="<?php echo "$row->tanggal_update"; ?>" required placeholder="Tanggal…" class="span8 tip" readonly>
                                            </div>
                                        </div>
                                        <?php
                                                }
                                            ?>
                                    </form>
                                    
                                    <a href="<?php echo base_url()?>Anggaran/c_26_Anggaran"><button class="btn btn-danger">Kembali</button></a>
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
            