
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data Pegawai</h3>
                            </div>
                            <div class="module-body">

                                    <form action="<?php echo base_url()?>pegawai/c_23_pegawai/fungsiUbah" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">NIP </label>
                                            <div class="controls">
                                                <input type="number" name="txtNIP" maxlength="255" required value="<?php echo "$row->NIP"; ?>" class="span8"  >
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama</label>
                                            <div class="controls">
                                                    <input type="text" name="txtNama" maxlength="255" required value="<?php echo "$row->nama"; ?>" class="span8"  >
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Alamat</label>
                                            <div class="controls">
                                                <textarea class='span8' rows='5' name='txtAlamat' maxlength='2555' required  ><?php echo $row->alamat; ?></textarea>

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor Hp</label>
                                            <div class="controls">
                                                <input type="number" name="txtHp" maxlength="255" required value="<?php echo "$row->hp"; ?>" class="span8"  >
                                            </div>
                                        </div>
                                        <?php
                                            $status = $row->status;
                                        ?>
                                         <div class="control-group">
                                            <label class="control-label" for="basicinput">Status</label>
                                            <div class="controls">
                                                <select name="JK" required>
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
                                                        }
                                                    ?>
                                                    
                                                </select>    
                                            </div>
                                        </div>
                                        <?php 
                                            $jk = $row->jenis_kelamin;
                                        ?>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                            <div class="controls">
                                                <select name="JK" required>
                                                    <?php 
                                                        if ($jk == "Laki-Laki") {
                                                            ?>
                                                            <option selected = "selected"value="Laki-Laki">Laki Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                            <?php
                                                        }else if ($jk == "Perempuan") {
                                                            ?>
                                                            <option value="Laki-Laki">Laki-Laki</option>
                                                            <option selected = "selected" value="Perempuan">Perempuan</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                            <?php
                                                        }else if ($jk == "Lainnya") {
                                                            ?>
                                                            <option value="Laki-Laki">Laki-Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                            <option selected = "selected" value="Lainnya">Lainnya</option>
                                                            <?php
                                                        }
                                                    ?>
                                                    
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="controls" style="padding-top:2%;text-align:right">
                                                <input type = "submit" class="btn btn-primary" value="Simpan Perubahan">
                                                <a href="<?php echo base_url()?>pegawai/c_23_pegawai"><button class="btn btn-danger">Kembali</button></a>
                                        </div>
                                    </form>

                                    
                                    
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
            