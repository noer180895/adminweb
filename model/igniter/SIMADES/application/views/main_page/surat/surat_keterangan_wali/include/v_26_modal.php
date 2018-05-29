<script>
  function tambah() {
    var ambil= document.getElementById('rizkiani').value;
     document.getElementById('namacalonlakilaki').value = ambil; 
  }
  
    

  
</script>



<!-- Modal -->
<div class="modal fade" id="modalTambah" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" onclick="refresh()" class="close" data-dismiss="modal" > &times; </button>
        <h4 class="modal-title">ambil data</h4>
      </div>
      <div class="modal-body">
<form action="" method="POST" >
          <div class="control-group" id="wilayahCekRekening">
              <label class="control-label" for="basicinput">as</label>
              <div class="controls">
                  <input type="text" name="txtNorek" id="rizkiani" value="" class="span4">
                  <input type="text" name="txtKorek"  value="" class="span4" >
              </div>
          </div>

          
      <div class="modal-footer">
</form>
        <button onclick="tambah()" name="tombolTambah" class="btn btn-default" data-dismiss="modal">Tambah</button>
      </div>
      </div>
    </div>

  </div>
</div>




  <script>
    $(document).on("click", "#cmdtambah", function () {
         $("#modalTambah").modal({backdrop: "static"});
    });
  </script>



