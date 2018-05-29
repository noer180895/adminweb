
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Data Pegawai</h3>
                            </div>
                            <div class="module-body">

                                    <form action="<?php echo base_url()?>pegawai/c_23_pegawai/simpan" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">NIP </label>
                                            <div class="controls">
                                                <input type="number" name="txtNIP" maxlength="255" required value="<?php echo "$row->NIP"; ?>" class="span8" readonly>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nama</label>
                                            <div class="controls">
                                                    <input type="text" name="txtNama" maxlength="255" required value="<?php echo "$row->nama"; ?>" class="span8" readonly>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Alamat</label>
                                            <div class="controls">
                                                <textarea class='span8' rows='5' name='txtAlamat' maxlength='2555' required readonly><?php echo $row->alamat; ?></textarea>

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Nomor Hp</label>
                                            <div class="controls">
                                                <input type="number" name="txtHp" maxlength="255" required value="<?php echo "$row->hp"; ?>" class="span8" readonly>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Status</label>
                                            <div class="controls">
                                                    <input type="text" name="txtStatus" maxlength="255" required value="<?php echo "$row->status"; ?>" class="span8" readonly>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Jenis Kelamin</label>
                                            <div class="controls">
                                                    <input type="text" name="txtJenisKelamin" maxlength="255" required value="<?php echo "$row->jenis_kelamin"; ?>" class="span8" readonly>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tanggal Di Daftarkan</label>
                                            <div class="controls">
                                                <input  type="text" id="date" name="txtTanggal" maxlength="100" value="<?php echo "$row->tanggal_input"; ?>" required   class="span8 tip" readonly>
                                            </div>
                                        </div>
                                    </form>

                                    
                                        <div class="controls" style="padding-top:2%;text-align:right">
                                                <a href="<?php echo base_url()?>pegawai/c_23_pegawai"><button class="btn btn-danger">Kembali</button></a>
                                        </div>
                                    
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
            