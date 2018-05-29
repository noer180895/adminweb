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
      xmlhttp.open("GET", "<?php echo base_url() ?>APBDes/c_23_generateAPBDes/modalUbahPajak?id="+ id,true);
      xmlhttp.send();
  }
  function mati() {
    var setoran = document.getElementById('inputSetoran').value;
    alert(setoran);
  }
</script>

<!-- Modal -->
<div class="modal fade" id="modalUbah" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" onclick="refresh()" class="close" data-dismiss="modal" > &times; </button>
        <h4 class="modal-title">Perubahan Data Buku Bank Desa</h4>
      </div> <!-- # modal-header -->

    <div id="berubah">
      <div class="modal-body" id="berubah">
        <button id="tombolAmbil" onclick="cari()" class="btn btn-default" >Ambil Data</button>
        <input type="hidden" id="ajihidayat">
      </div> <!-- # modal-body -->
      
      <div class="modal-footer">
        Copyright &copy; Softindotech 2016</b> All rights reserved.
      </div> <!-- # modal-footer -->
    </div> <!-- # Berubah -->

    </div> <!-- # modal-content -->
  </div> <!-- # modal-dialog -->
</div> <!-- # modal fade -->




  <script>
    $(document).on("click", "#tombolUbah", function () {
         var myBookId = $(this).data('id');
         $(".modal-body #rizkiani").val( myBookId );
         $("#modalUbah").modal({backdrop: "static"});
         document.getElementById('ajihidayat').value = myBookId;
    });
  </script>