
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data User</h3>
                            </div>
                            <div class="module-body">

                                    <form action="<?php echo base_url()?>user/c_23_userTambah/fungsiTambah" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">NIP </label>
                                            <div class="controls">
                                                <input type="number" name="txtNIP" maxlength="255" required class="span8" >
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Password </label>
                                            <div class="controls">
                                                <input type="password" name="txtPassword" maxlength="255" required class="span8" >
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">E-mail</label>
                                            <div class="controls">
                                                    <input type="text" name="txtEmail" maxlength="255" required  class="span8" >
                                            </div>
                                        </div>

                                         <div class="control-group">
                                            <label class="control-label" for="basicinput">Status</label>
                                            <div class="controls">
                                                <select name="Status" required>
	                                                <option value="Aktif">Aktif</option>
	                                                <option value="Tidak Aktif">Tidak Aktif</option>
	                                                <option selected = "selected" value="<?php echo rand() ?>">Menunggu Konfirmasi</option>                                                    
                                                </select>    
                                            </div>
                                        </div>
                                         <div class="control-group">
                                            <label class="control-label" for="basicinput">Level</label>
                                            <div class="controls">
                                                <select name="Level" required>
                                                	<option value="0" selected="selected">=== Pilih ===</option>
	                                                <option value="1">Super Admin</option>
	                                                <option value="2">Admin</option>
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="controls" style="padding-top:2%;text-align:right">
                                                <input type = "submit" class="btn btn-primary" value="Tambah">
                                                <a href="<?php echo base_url()?>user/c_23_user" class="btn btn-danger">Kembali</a>
                                        </div>
                                    </form>

                                    
                                    
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
            