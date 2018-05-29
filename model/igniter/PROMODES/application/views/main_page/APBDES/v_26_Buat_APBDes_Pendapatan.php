<script>
  function tambah(str) {
     var xmlhttp = new XMLHttpRequest();
     if (document.getElementById("txtUraian") != null) {
        var uraian     = document.getElementById("txtUraian").value;
     }else{
        var uraian = null;

     }

     if (document.getElementById("txtVolume") != null) {
        var volume     = document.getElementById("txtVolume").value;
     }else{
        var volume = null;

     }

     if (document.getElementById("txtSatuan") != null) {
        var satuan     = document.getElementById("txtSatuan").value;
     }else{
        var satuan = null;

     }

     if (document.getElementById("txtHargaSet") != null) {
        var hargaset     = document.getElementById("txtHargaSet").value;
     }else{
        var hargaset = null;

     }

     if (document.getElementById("txtJumlah") != null) {
         var jumlah     = document.getElementById("txtJumlah").value;
     }else{
        var jumlah = null;

     }

     if (document.getElementById("sumber") != null) {
        var sumberdana = document.getElementById("sumber").value;
     }else{
        var sumberdana = null;

     }

     if (document.getElementById("alokasi") != null) {
        var alokasi    = document.getElementById("alokasi").value;
     }else{
        var alokasi = null;

     }
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById("tampilTambah").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url()?>index.php/APBDes/c_26_APBDes/tambahDetail/"+str+"/"+uraian+"/"+volume+"/"+satuan+"/"+hargaset+"/"+jumlah+"/"+sumberdana+"/"+alokasi,true);
      xmlhttp.send();

      // penghitungan jumlah total dari database menggunakan ajax di controller c_26_apbdes
      var kresna = new XMLHttpRequest();
      var koderekening = document.getElementById("nomorRekening").value ;
      kresna.onreadystatechange = function(){
        if (kresna.readyState == 4 && kresna.status == 200) {
            document.getElementById("divJumlahTotal").innerHTML = kresna.responseText;
        }
      };
      kresna.open("GET", "<?php echo base_url()?>APBDes/c_26_apbdes/hitungJumlah/" + koderekening, true);
      kresna.send();
  }
  function hitung() {
    // alert('blah')
      var volume = document.getElementById('txtVolume').value;
      var hargaset = document.getElementById('txtHargaSet').value;
      var hitung = volume*hargaset;
       document.getElementById('txtJumlah').value = hitung;
  }
</script>              
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Transaksi Rencana Kerja Anggaran</h3>
                            </div>
                            <div class="module-body">
                                    <?php
                                        foreach ($ambildata as $row) {
                                    ?>

                                    <form action="#" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Kode Rekening</label>
                                            <div class="controls">
                                                <input  type="text" id="nomorRekening" name="koderekening" required maxlength="150" placeholder="Kode Rekening …" class="span8 tip" readonly value="<?php echo "$row->nomor_rekening"; ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Uraian</label>
                                            <div class="controls">
                                                <input  type="text" name="uraian" required maxlength="150" placeholder="Uraian …" class="span8 tip" readonly value="<?php echo "$row->uraian";?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Tahun Anggaran</label>
                                            <div class="controls">
                                                <input  type="text" name="tahunanggaran" required maxlength="150" placeholder="Tahun Anggaran …" class="span8 tip" readonly value="<?php echo "$row->tahun";?>">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Total Anggaran</label>
                                            <div class="controls">
                                                <input  type="text" name="totalanggaran" required maxlength="150" placeholder="Total Anggaran …" class="span8 tip" readonly value="<?php echo "$row->anggaran";?>">
                                            </div>
                                        </div>
                                        <div class="control-group">  

                                                <button type="submit" class="btn btn-primary" onClick="return simpan()" name="simpan">Simpan</button>

                                                <button type="reset" class="btn btn-primary" name="batal">Batal</button>
                                    </form> 
                                        </div>
                                            <hr>
                                            <button style="float:left" class="btn btn-primary" onClick="tambah(this.value)" value="<?php echo $row->nomor_rekening?>" name="Tambah">Tambah</button>
                                        <form class="form-horizontal row-fluid">
                                            <div class="control-group">
                                                    <label class="control-label" style="width: 100px;" for="basicinput">Jumlah Total</label>
                                                    <div class ="controls" id="divJumlahTotal">
                                                        <?php
                                                            $this->db->select_sum('jumlah');
                                                            $this->db->from('detail_apbdes_pendapatan');
                                                            $this->db->where('kode_rekening', $row->nomor_rekening);
                                                            $query = $this->db->get(); 
                                                            $hasil = $query->result();
                                                            if (isset($hasil[0]->jumlah)) {
                                                                ?>
                                                                    <input type="text" value="<?php echo $hasil[0]->jumlah ?>" id="jumlahTotal" class="span4">
                                                                <?php      
                                                            }else{
                                                                ?>
                                                                    <input type="text" id="jumlahTotal" class="span4">
                                                                <?php
                                                            }
                                                        ?>
                                                    </div>
                                            </div>
                                        </form>
                                        
                                        <div class="module-body table">
                                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Uraian</th>
                                                        <th style="">Volume</th>
                                                        <th style="">Satuan</th>
                                                        <th style="">Harga Set</th>
                                                        <th style="">Jumlah</th>
                                                        <th style="">Sumber Dana</th>
                                                        <th style="">Alokasi Dana 30/70</th>
                                                    </tr>
                                                </thead>
                                                 <tbody id="tampilTambah">
                                                       <?php
                                                       $rekening = $row->nomor_rekening;
                                                       $hasil = $this->m_26_APBDes->ambildatadetailberdasarkan($rekening);
                                                        if (isset($hasil[0])) {
                                                            foreach ($hasil as $row) {
                                                                ?>
                                                                <tr>
                                                                    <td>
                                                                        <input readonly type="text" value="<?php echo $row->uraian ?>" style="width:115px;height: 30px;">
                                                                    </td>
                                                                    <td>
                                                                        <input readonly type="nummber" value="<?php echo $row->volume ?>" style="width:50px;height: 30px;">
                                                                    </td>
                                                                    <td>
                                                                        <input readonly type="text" value="<?php echo $row->satuan ?>" style="width:70px;height: 30px;">
                                                                    </td>
                                                                    <td>
                                                                        <input readonly type="number" value="<?php echo $row->harga_set ?>" style="width:100px;height: 30px;">
                                                                    </td>
                                                                    <td>
                                                                        <input readonly type="text" value="<?php echo $row->jumlah ?>" style="width:100px;height: 30px;">
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if ($row->sumber_dana == "Sumbangan") {
                                                                            ?>
                                                                            <select name="sumber" style="width:80px">
                                                                                <option value="APBN">APBN</option>
                                                                                <option selected value="Sumbangan">Sumbangan</option>
                                                                            </select>
                                                                            <?php
                                                                        }else{
                                                                            ?>
                                                                            <select name="sumber" style="width:80px">
                                                                                <option selected value="APBN">APBN</option>
                                                                                <option value="Sumbangan">Sumbangan</option>
                                                                            </select>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        <select name="alokasi" style="width:80px">- Pilih -
                                                                            <option value="kosong">kosong</option>
                                                                            <option value="kosong">kosong</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <?php   
                                                            }
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <input id= "txtUraian" name="txtajah" type="text" value="" style="width:115px;height: 30px;">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="hitung()" id= "txtVolume" type="number" value="" style="width:50px;height: 30px;">
                                                                </td>
                                                                <td>
                                                                    <input id= "txtSatuan" type="text" value="" style="width:70px;height: 30px;">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="hitung()" id= "txtHargaSet" type="number" value="" style="width:100px;height: 30px;">
                                                                </td>
                                                                <td>
                                                                    <input id= "txtJumlah"type="text" readonly value="" style="width:100px;height: 30px;">
                                                                </td>
                                                                <td>
                                                                    <select id ="sumber" name="sumber" style="width:80px">
                                                                        <option value="APBN">APBN</option>
                                                                        <option value="Sumbangan">Sumbangan</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select id ="alokasi" name="alokasi" style="width:80px">- Pilih -
                                                                        <option value="kosong">kosong</option>
                                                                        <option value="kosong">kosong</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }else{
                                                            ?>
                                                             <tr>
                                                                <td>
                                                                    <input id= "txtUraian" name="txtajah" type="text" value="" style="width:115px;height: 30px;">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="hitung()" id= "txtVolume" type="number" value="" style="width:50px;height: 30px;">
                                                                </td>
                                                                <td>
                                                                    <input id= "txtSatuan" type="text" value="" style="width:70px;height: 30px;">
                                                                </td>
                                                                <td>
                                                                    <input onkeyup="hitung()" id= "txtHargaSet" type="number" value="" style="width:100px;height: 30px;">
                                                                </td>
                                                                <td>
                                                                    <input id= "txtJumlah"type="text" value="<?php echo $row->anggaran ?>" readonly style="width:100px;height: 30px;">
                                                                </td>
                                                                <td>
                                                                    <select id ="sumber" name="sumber" style="width:80px">
                                                                        <option value="APBN">APBN</option>
                                                                        <option value="Sumbangan">Sumbangan</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select id ="alokasi" name="alokasi" style="width:80px">- Pilih -
                                                                        <option value="kosong">kosong</option>
                                                                        <option value="kosong">kosong</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                        }
                                                        ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    <a href="<?php echo base_url()?>APBDes/c_26_APBDes/dataapbdespendapatan"><button class="btn btn-danger" onClick="" name="Tambah">Kembali</button></a>
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
