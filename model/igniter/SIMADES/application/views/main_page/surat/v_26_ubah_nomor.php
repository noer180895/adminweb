
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Ubah Nomor Surat Keterangan</h3>
                            </div>
                            <div class="module-body">
                            <?php
                                    foreach ($ambilsurat as $row) {
                                        
                                ?>
                            <form action="<?php echo base_url() ?>surat/c_26_data_surat/ubahnomor" class="form-horizontal row-fluid" method="POST">
                           
                            <div class="control-group">
                                <label class="control-label" for="basicinput">Atur Format Nomor Surat</label>
                                
                                <div class="controls">
                                    <input  type="hidden" name="id" required maxlength="150" placeholder="Nomor Surat …" class="span8 tip" value="<?php echo $row->nama_surat; ?>">
                                    <label><?php echo $row->nama_surat?></label>
                                    <input  type="text" name="slash" required readonly maxlength="150" style="width: 40px" class="span8 tip" value="<?php echo "/"?>">
                                    
                                    <input  type="text" name="nomorsurat" required maxlength="150" style="width: 200px" placeholder="Nomor Surat …" class="span8 tip" value="<?php echo substr($row->nomor_surat,1,-8)?>">
                                    <input  type="text" name="nomorsuratbulan" required readonly maxlength="150" style="width: 40px" class="span8 tip" value="<?php echo "/".date('m');?>">
                                    <input  type="text" name="nomorsurattahun" required readonly maxlength="150" style="width: 60px" class="span8 tip" value="<?php echo "/".date('Y')?>">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="submit" class="tombolsimpanubah" value="Ubah Nomor Surat"></input>
                                </div>
                            </div>
                            </form>
                            <?php
                            }
                            ?>      
                            </div>
                            </div>
                        </div>