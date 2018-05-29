<script>
  function tambah(str) {
    var kode = document.getElementById('txtKoDes').value
    console.log("kode = "+kode);
    var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById("nomor_perdes").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url()?>RAPBDes/c_26_RAPBDes/ambilNomorPerdes/"+kode+"?tahun="+ str,true);
      xmlhttp.send();
  }
  function ubah(str) {
    var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById("nomor_perdes").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url()?>RAPBDes/c_26_RAPBDes/kodePerdes?kode="+ str,true);
      xmlhttp.send(); 
  }
  function reload() {
      location.reload();
  }
  function sekuriti() {
      var tahun = document.getElementById('cmbTahun').value;
      var nomor_perdes = document.getElementById('txtPerdes').value;
      var status = document.getElementById('cmbStatus').value;
      var kode = document.getElementById('txtKoDes').value;

      console.log(tahun);
      console.log(nomor_perdes);

      var tahunPerdes = nomor_perdes.substr(11);
      if (tahun == tahunPerdes) {

        if (status == "murni" ) {
          return true
        }else{
          var k = new Date();
          var r = k.getFullYear();
          if (r == tahun) {
            return true
          }else{
            alert('Tidak bisa membuat APBDEs Perubahan');
            event.preventDefault();
          }
        }
      }else{
        alert('Tahun dengan tahun pada kode tidak boleh berbeda');
        event.preventDefault();
      }
  }
</script>
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Tambah Data Penyusunan Anggaran Pembangunan dan Belanja Desa</h3>
                            </div>
                            <div class="module-body">
                                    <form action="<?php echo base_url()?>RAPBDes/c_26_RAPBDes/simpan" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tahun</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    <select name="tahun" id="cmbTahun" onchange="tambah(this.value)">
                                                        <?php
                                                            $thisYear = date("Y");
                                                            $limit = date("Y")- 10 ;
                                                            $until = date("Y")+20;
                                                            for ($i=$limit; $i < $until ; $i++) { 
                                                                if ($i == $thisYear) {
                                                                    ?>
                                                                        <option selected value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                    <?php
                                                                }else{
                                                                    ?>
                                                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Kode PERDES</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    <input type="text" maxlength="100" style="width: 350px" required id="txtKoDes" onfocusout="tambah(cmbTahun.value)" class="span8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group" id="nomor_perdes">
                                            <label class="control-label" for="basicinput">Nomor PERDES</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    <input type="text" name="nomorperdes" readonly="true" maxlength="100" style="width: 350px" required placeholder="Pilih Tahun" id="txtPerdes" value="<?php echo $noPerdes ?>"  class="span8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Status</label>
                                            <div class="controls">
                                                <div class="input-append">
                                                    <select name="status" id="cmbStatus">
                                                        <option value="murni">Murni</option>
                                                        <option value="Tidak Murni">Tidak Murni</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-append">
                                                    <input type="hidden" name="penanggungjawab" maxlength="100" style="width: 350px" required placeholder="Penanggung Jawab" value="<?php echo $datapj[0]->nama;?>" class="span8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <div class="controls">
                                                    <button type="submit" onclick="sekuriti()" name="simpan" value="Simpan" class="btn btn-primary">Simpan</button>
                                                    <button type="reset" onclick="reload()" name="batal" value="Batal" class="btn btn-primary">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                    
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
<script type="text/javascript">
    function simpan() {
        return confirm("Apakah anda benar akan menyimpan data ?");
    }


</script>