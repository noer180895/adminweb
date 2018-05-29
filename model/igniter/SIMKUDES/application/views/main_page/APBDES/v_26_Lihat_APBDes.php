
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Anggaran Pembangunan Desa</h3>
                            </div>
                            <div class="module-body">

                                    <form action="<?php echo base_url()?>RAPBDes/c_26_RAPBDes/simpan" class="form-horizontal row-fluid" method="POST">
                                        <?php
                                            foreach ($ambildata as $row)
                                            {
                                            ?>
                                                <div class="control-group">
                                                    <label class="control-label" for="basicinput">APBDes </label>
                                                <div class="controls">
                                                    <textarea class='span8' autofocus rows='5' name='kegiatan' maxlength='255' required placeholder='Rencana APBDes..' readonly><?php echo "$row->kegiatan"; ?></textarea>

                                                </div>
                                                </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Anggaran Biaya</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    <input type="text" name="anggaran" maxlength="255" required placeholder="1000000" value="<?php echo "$row->anggaran"; ?>" class="span8" readonly><span class="add-on">Rp.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal</label>
                                            <div class="controls">
                                                <input  type="date" id="date" name="target" maxlength="100" value="<?php echo "$row->tanggal"; ?>" required placeholder="Tanggal…" class="span8 tip" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Penanggung Jawab</label>
                                            <div class="controls">
                                                <input  type="text" name="penanggungjawab" placeholder="Penanggung Jawab…" class="span8 tip" value="<?php echo "$row->penanggung_jawab";?>" readonly>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tahun</label>
                                            <div class="controls">
                                                <input type="text" name="tahun" placeholder="Tahun" class="span8" value="<?php echo "$row->tahun";?>" readonly>    
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Keterangan </label>
                                            <div class="controls">
                                                <textarea class="span8" rows="5" name="keterangan" required placeholder="Keterangan Rencana APBDes..." readonly><?php echo "$row->keterangan";?></textarea>
                                            </div>
                                        </div>
                                        
                                        <?php
                                                }
                                            ?>
                                    </form>
                                    
                                                <a href="<?php echo base_url()?>APBDes/c_26_APBDes"><button class="btn btn-danger">Kembali</button></a>
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
            