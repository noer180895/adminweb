<?php
  $tahun = $_SESSION['tahunApbdes'];
  $ambilRekening = $this->m_26_RAPBDes->ambilDataRekeningBerdasarkanTahun($tahun); 
?>
<script type="text/javascript">
  function refresh(){
    location.reload();
  }

  function cari() {
     var xmlhttp = new XMLHttpRequest();
     var id = document.getElementById('ajihidayat').value;
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById("berubah").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url() ?>APBDes/c_23_generateAPBDes/modalUbah?id="+ id,true);
      xmlhttp.send();
  }
  function mati() {
    var setoran = document.getElementById('inputSetoran').value;
    alert(setoran);
  }
</script>

<!-- Modal -->
<div>
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" onclick="refresh()" class="close" data-dismiss="modal" > &times; </button>
        <h4 class="modal-title">Perubahan Data Buku Bank Desa</h4>
      </div> <!-- # modal-header -->

    <div id="berubah">
      <div class="modal-body" id="berubah">
        <?php 
          $doto = $this->m_23_rekening->lihat();
        ?>

        <table class="datatable-1 table table-bordered table-striped display" >
          <thead>
            <tr>
              <th>Nomor Rekening</th>
              <th>kode 1</th>
              <th>kode 2</th>
              <th>kode 3</th>
              <th>kode 4</th>
              <th>Uraian</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach ($ambilRekening as $key) { 
                  echo 
                      "
                      <tr>
                          <td onclick=pilih('".$key->nomor_rekening."') id='dataNorek$key->nomor_rekening' >".$key->nomor_rekening."</td>
                          <td onclick=pilih('".$key->nomor_rekening."') id='dataK1$key->nomor_rekening' >".$key->k1."</td>
                          <td onclick=pilih('".$key->nomor_rekening."') id='dataK2$key->nomor_rekening' >".$key->k2."</td>
                          <td onclick=pilih('".$key->nomor_rekening."') id='dataK3$key->nomor_rekening' >".$key->k3."</td>
                          <td onclick=pilih('".$key->nomor_rekening."') id='dataK4$key->nomor_rekening' >".$key->k4."</td>
                          <td onclick=pilih('".$key->nomor_rekening."') id='dataUraian$key->nomor_rekening' >".$key->uraian."</td>
                      </tr>
                      ";
                }
              ?>          
          </tbody>
          
        </table>
      </div> <!-- # modal-body -->
      
      <div class="modal-footer">
        Copyright &copy; Softindotech 2016</b> All rights reserved.
      </div> <!-- # modal-footer -->
    </div> <!-- # Berubah -->

    </div> <!-- # modal-content -->
  </div> <!-- # modal-dialog -->
</div> <!-- # modal fade -->

<script type="text/javascript">
    function pilih(id) {
      var k1 = document.getElementById('dataK1' + id).innerHTML;
      var k2 = document.getElementById('dataK2' + id).innerHTML;
      var k3 = document.getElementById('dataK3' + id).innerHTML;
      var k4 = document.getElementById('dataK4' + id).innerHTML;
      var uraian = document.getElementById('dataUraian' + id).innerHTML;

      document.getElementById('inputK1').value = k1;
      document.getElementById('inputK2').value = k2;
      document.getElementById('inputK3').value = k3;
      document.getElementById('inputK4').value = k4;
      document.getElementById('inputUraian').value = uraian;

    }
</script>


<!--   <script type="text/javascript">
    $(document).on("click", "#tombolAmbilRekening", function () {
         $("#modalRekening").modal({backdrop: "static"});
    });
  </script> -->