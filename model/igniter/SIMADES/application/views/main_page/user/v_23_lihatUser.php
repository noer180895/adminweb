                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data User</h3>
                            </div>
                            <div class="module-body">
                            <?php
                                $lvl = $row->level;
                                if ($lvl == "1") {
                                    $lvl ="Super Admin";
                                }else{
                                    $lvl ="Admin";
                                }
                            ?>

                                    <form action="<?php echo base_url()?>user/c_23_user/simpan" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">NIP </label>
                                            <div class="controls">
                                                <input type="number" name="txtNIP" maxlength="255" required value="<?php echo "$row->nip"; ?>" class="span8" readonly>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">E-mail</label>
                                            <div class="controls">
                                                    <input type="text" name="txtEmail" maxlength="255" required value="<?php echo "$row->email"; ?>" class="span8" readonly>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Status</label>
                                            <div class="controls">
                                                <textarea class='span8' rows='5' name='txtStatus' maxlength='2555' required readonly><?php echo $row->status; ?></textarea>

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Level</label>
                                            <div class="controls">
                                                <input type="text" name="txtLevel" maxlength="255" required value="<?php echo $lvl ?>" class="span8" readonly>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal Di Daftarkan</label>
                                            <div class="controls">
                                                <input  type="text" id="date" name="txtTanggal" maxlength="100" value="<?php echo "$row->tanggal_daftar"; ?>" required   class="span8 tip" readonly>
                                            </div>
                                        </div>
                                    </form>

                                    
                                        <div class="controls" style="padding-top:2%;text-align:right">
                                                <a href="<?php echo base_url()?>user/c_23_user"><button class="btn btn-danger">Kembali</button></a>
                                        </div>
                                    
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
            