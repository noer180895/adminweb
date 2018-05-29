
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data User</h3>
                            </div>
                            <div class="module-body">

                                    <form action="<?php echo base_url()?>user/c_23_user/fungsiUbah" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">NIP </label>
                                            <div class="controls">
                                                <input type="number" name="txtNIP" maxlength="255" required value="<?php echo "$row->nip"; ?>" class="span8" readonly >
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">E-mail</label>
                                            <div class="controls">
                                                    <input type="text" name="txtEmail" maxlength="255" required value="<?php echo "$row->email"; ?>" class="span8" >
                                            </div>
                                        </div>

                                        <?php
                                            $status = $row->status;
                                        ?>
                                         <div class="control-group">
                                            <label class="control-label" for="basicinput">Status</label>
                                            <div class="controls">
                                                <select name="Status" required>
                                                    <?php 
                                                        if ($status == "Aktif") {
                                                            ?>
                                                            <option selected = "selected" value="Aktif">Aktif</option>
                                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                                            <?php
                                                        }else if ($status == "Tidak Aktif") {
                                                            ?>
                                                            <option value="Aktif">Aktif</option>
                                                            <option selected = "selected" value="Tidak Aktif">Tidak Aktif</option>
                                                            <?php
                                                        }else {
                                                            ?>
                                                            <option value="Aktif">Aktif</option>
                                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                                            <option selected = "selected" value="<?php echo $status ?>">Menunggu Konfirmasi</option>

                                                            <?php
                                                        }

                                                    ?>
                                                    
                                                </select>    
                                            </div>
                                        </div>

                                         <?php
                                            $level = $row->level;
                                        ?>
                                         <div class="control-group">
                                            <label class="control-label" for="basicinput">Status</label>
                                            <div class="controls">
                                                <select name="Level" required>
                                                    <?php 
                                                        if ($level == "1") {
                                                            ?>
                                                            <option selected = "selected" value="1">Super Admin</option>
                                                            <option value="2">Admin</option>
                                                            <?php
                                                        }else if ($level == "2") {
                                                            ?>
                                                            <option value="1">Super Admin</option>
                                                            <option selected = "selected" value="2">Admin</option>
                                                            <?php
                                                        }
                                                    ?>
                                                    
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="controls" style="padding-top:2%;text-align:right">
                                                <input type = "submit" class="btn btn-primary" value="Simpan Perubahan">
                                                <a href="<?php echo base_url()?>user/c_23_user" class="btn btn-danger">Kembali</a>
                                        </div>
                                    </form>

                                    
                                    
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
            