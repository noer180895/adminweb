<div class="module">
    <div class="module-head">
        <h3>Ubah data profil</h3>
    </div>
    <div class="module-body">
        <form action="<?php echo base_url() ?>profil/c_23_profil/ubahprofil" method="POST" class="form-horizontal row-fluid" enctype="multipart/form-data" >
            <div class="control-group">
                <label class="control-label" for="basicinput">NIP</label>
                <div class="controls">
                    <input type="text" name="txtNIP" id="basicinput" value="<?php echo $nip; ?>" class="span8" readonly>
                    <span class="help-inline danger"></span>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="basicinput">Nama</label>
                <div class="controls">
                    <input type="text" id="basicinput" name="txtNama" value="<?php echo $nama; ?>" placeholder="Type something here..."  class="span8">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput">Kata Sandi</label>
                <div class="controls">
                    <input type="password" id="password" name="txtPassword" placeholder="Type something here..." required class="span8">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput">Nomor Hp</label>
                <div class="controls">
                    <input type="number" id="number" name="txtHp" value="<?php echo $hp; ?>" placeholder="Type something here..."  class="span8">
                </div>
            </div>


            <div class="control-group">
                <label class="control-label" for="basicinput">E-mail</label>
                <div class="controls">
                    <input type="email" id="email" name="txtEmail" value="<?php echo $_SESSION['email']; ?>" placeholder="Type something here..."  class="span8">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="basicinput">Alamat</label>
                <div class="controls">
                    <textarea class="span8" name="txtAlamat" rows="5"><?php echo $alamat; ?></textarea>
                </div>
            </div>
            <div class="control-group ">
                <label class="control-label" for="basicinput">Foto</label>
                <div class="controls">
                    <input type="file" name="file_foto">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary">Ubah data profil</button>
                </div>
            </div>
            <input type="hidden" name="hidden_foto" value="<?php echo $foto ?>" placeholder="Type something here..."  class="span8">


        </form>
    </div>
</div>