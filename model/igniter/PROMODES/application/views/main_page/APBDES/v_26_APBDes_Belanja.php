<script>
  function tampil(str) {
     var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById("uraian").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url()?>index.php/APBDes/c_26_APBDes/tampilKegiatanBelanja/"+str ,true);
      xmlhttp.send();
  }
  function tampilData(str) {
    var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById("tampilData").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url()?>index.php/APBDes/c_26_APBDes/tampilKegiatanBelanjaTabel/"+str ,true);
      xmlhttp.send();   
  }
</script>       
                           
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Rencana Kerja Anggaran Belanja</h3>
                            </div>
                            <div class="module-body">

                                    <form action="<?php echo base_url()?>" class="form-horizontal row-fluid" method="POST">
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Program</label>
                                            <div class="controls">
                                                <select onchange="tampil(this.value)" name="program" required>
                                                        <option value="null" selected="selected">-Pilih Program-</option>
                                                        <?php 
                                                            for ($i=0; $i < 999  ; $i++) {
                                                                $ambil = $this->m_26_APBDes->ambildatarekeningapbdesbelanja($i);
                                                                foreach ($ambil as $row) {
                                                                    ?>
                                                                        <option value="<?php echo $row->nomor_rekening ?>"><?php echo $row->nomor_rekening.".".$row->uraian?></option>
                                                                    <?php
                                                                }
                                                                echo $i;
                                                            }
                                                        ?>
                                                </select>    
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">Kegiatan</label>
                                            <div class="controls" id="uraian">
                                                <select required disabled>
                                                    <option>- Tidak ada kegiatan -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="module-body table">
                                            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Kode Rekening</th>
                                                        <th>Uraian</th>
                                                        <th>Anggaran RKA</th>
                                                        <th>Aktifitas</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tampilData">
                                                        <tr>
                                                            <td>
                                                                Tidak ada data
                                                            </td>
                                                            <td>
                                                                Tidak ada data
                                                            </td>
                                                            <td>
                                                                Tidak ada data
                                                            </td>
                                                            <td>
                                                                Tidak ada data
                                                            </td>
                                                        </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </form>
                                    
                            </div>
                        </div>

                        
                    </div><!--/.content-->
                </div><!--/.span9-->
