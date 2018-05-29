<script>
  function tambah(str) {
     var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById("kresna").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url()?>rekening/c_23_rekening/tambahNorek?ceu="+ str,true);
      xmlhttp.send();
  }
</script>
<div class="span9">
    <div class="content">
		<div class="module">
            <div class="module-head">
                <h3>Rekening</h3>
            </div>
            <div class="module-body">

                    <form action="<?php echo base_url()?>rekening/c_23_rekening/simpan" class="form-horizontal row-fluid" method="POST">
                        <div class="control-group">
		                    <label class="control-label" for="basicinput">Jumlah Nomor Rekening</label>
                            <div class="controls">
                                <input type="number" onkeyup="tambah(this.value)" class="span5" rows="2" placeholder="Masukan jumlah nomor rekening">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Nomor rekening 1</label>
                            <div class="controls">
                                <select name="noRek1">
                                	<?php
                                		for ($i=1; $i < 10 ; $i++) { 
                                			?>
                                			<option value="<?php echo $i ?>" ><?php echo $i ?></option>
                                			<?php
                                		}
                                	?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group" id="kresna">
	                       
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Uraian</label>
                            <div class="controls">
                                <textarea class="span8" rows="2"  maxlength="200" name="txtUraian" required placeholder="Uraian..."></textarea>
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
