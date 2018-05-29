
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Pindai Surat Masuk</h3>
                            </div>
                            <div class="module-body">
                                
                                 
                                <form action="<?php echo base_url()?>surat/c_26_data_surat/simpanscansurat" enctype="multipart/form-data" class="form-horizontal row-fluid" method="POST">
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Pengirim</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Diisi nama Pengirim surat .." name="namapengirim" required class="span8">
                                    </div>
                                </div>
                                <br><br>
                                <fieldset>
                                    <legend>Surat Masuk</legend>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nomor Surat</label>
                                    <div class="controls">
                                        <input type="text" name="nomorsurat" placeholder="Diisi nomor surat masuk .." required class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Nama Surat</label>
                                    <div class="controls">
                                        <input type="text" name="namasurat" placeholder="Diisi nama surat masuk .." required class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Tanggal surat</label>
                                    <div class="controls">
                                        <input type="date" name="tanggalsurat" placeholder="Diisi tanggal surat .." required class="span8">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="basicinput">Masukan File surat Masuk</label>
                                    <div class="controls">
                                        <input type="file" name="pindaisurat" required class="span8 btn btn-default">
                                    </div>
                                </div>
                                </fieldset>
                                <legend></legend>
                                <div class="control-group">
                                    <div class="controls">
                                    <input type="submit" name="simpan" value="Simpan Surat Masuk" onclick="return konfirmasisimpan()" class="tombolsimpanubah"></input>
                                    </div>
                                </div>

                               
                                </form>
                                    </div>
                        </div>
                    </div>
               </div>
<script type="text/javascript">
    function konfirmasisimpan () {
         return confirm('Apakah Anda Akan Menyimpan Data ?');
    }
</script>
