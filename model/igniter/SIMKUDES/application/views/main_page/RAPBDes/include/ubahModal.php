<script type="text/javascript">
  function refresh(){
    location.reload();
  }

  function cari() {
     var xmlhttp = new XMLHttpRequest();
     var nomorRekening = document.getElementById('rizkiani').value;
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById("wilayahCariUraianRekening").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url() ?>c_23_index/cariRekening?noRek="+ nomorRekening,true);
      xmlhttp.send();
  }

  function ubahKlik() {
     var xmlhttp = new XMLHttpRequest();
     var nomorRekening = document.getElementById('rizkiani').value;
     var uraian = document.getElementById('txtUraianBaru').value;
     if (uraian == "") {
      alert('Uraian baru harus di isi terlebih dahulu');
     }else{
        xmlhttp.onreadystatechange = function(){
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("wilayahCariUraianRekening").innerHTML = xmlhttp.responseText;
          }
        };
        xmlhttp.open("GET", "<?php echo base_url() ?>c_23_index/ubahItemRekening/"+ nomorRekening +"?uraian=" +uraian,true);
        xmlhttp.send();
        alert('Item berhasil di ubah');
        location.reload();
     }

  }

</script>

<!-- Modal -->
<div class="modal fade" id="modalUbah" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" onclick="refresh()" class="close" data-dismiss="modal" > &times; </button>
        <h4 class="modal-title">Perubahan Uraian Item</h4>
      </div>
      <div class="modal-body">
<form action="" method="POST" >
        <div id="wilayahCariUraianRekening">
          <div class="control-group" id="wilayahCekRekening">
              <label class="control-label" for="basicinput">Nomor Rekening</label>
              <div class="controls">
                  <input type="hidden" name="txtNorek" id="rizkiani" value="" class="span4" readonly>
                  <input type="text" onclick="cari()" readonly="" style="cursor: pointer;" name="cmdCek" class="btn btn-info span2" value="Ambil Data">
              </div>
          </div>

          <div class="control-group">
              <label class="control-label" for="basicinput">Uraian</label>
              <div class="controls">
                  <input type="text" name="txtUraian" id="txtUraian" readonly value="" class="span4" >
              </div>
          </div>
        </div>  
      <div class="modal-footer">
</form>
        <button onclick="ubahKlik()" name="tombolTambah" class="btn btn-default" data-dismiss="modal">Ubah Uraian</button>
      </div>
      </div>
    </div>

  </div>
</div>




  <script>
    $(document).on("click", "#cmdUBah", function () {
         var myBookId = $(this).data('id');
         $(".modal-body #rizkiani").val( myBookId );
         $("#modalUbah").modal({backdrop: "static"});
    });
  </script>