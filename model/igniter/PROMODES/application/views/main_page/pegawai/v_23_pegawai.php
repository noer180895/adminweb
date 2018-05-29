<div class="span9">
    <div class="content">
		<div class="module">
            <div class="module-head">
                <h3>Pegawai</h3>
            </div>
            <div class="module-body">

                    <form action="<?php echo base_url()?>pegawai/c_23_pegawai/simpan" class="form-horizontal row-fluid" method="POST">
                        <div class="control-group">
                            <label class="control-label" for="basicinput">NIP</label>
                            <div class="controls">
                                <input type="number" name="txtNIP" maxlength="20" required autofocus placeholder="Masukan Nip..." class="span8">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Nama</label>
                            <div class="controls">
                                    <input type="text" name="txtNama" maxlength="100" required placeholder="Masukan Nama.." class="span8">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Nomor Hp</label>
                            <div class="controls">
                                <input type="number" name="txtHp" maxlength="13" required placeholder="Masukan Nomor Hp..." class="span8">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Alamat</label>
                            <div class="controls">
                                <textarea class="span8" rows="2"  maxlength="200" name="txtAlamat" required placeholder="Alamat..."></textarea>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="basicinput">Jenis Kelamin</label>
                            <div class="controls">
                                <select name="JK" required>
                                    <option selected="selected">=== Pilih ===</option>
                                    <option value="Laki-Laki">Laki Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>    
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-primary"  name="simpan">Simpan</button>

                                <button type="reset" class="btn btn-primary" name="batal">Batal</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>        
    </div><!--/.content-->
</div><!--/.span9-->
