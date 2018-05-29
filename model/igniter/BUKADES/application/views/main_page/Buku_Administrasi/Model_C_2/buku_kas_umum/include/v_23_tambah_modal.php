<script>
  function tambah() {
     var xmlhttp = new XMLHttpRequest();
     var nomorRekening = document.getElementById('rizkiani').value;
      xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
          document.getElementById("wilayahCekRekening").innerHTML = xmlhttp.responseText;
        }
      };
      xmlhttp.open("GET", "<?php echo base_url() ?>buku_administrasi/model_c_1_a/buku_anggaran_pendapatan_dan_belanja_desa/c_23_buku_APBDes/cekRekening/"+ nomorRekening,true);
      xmlhttp.send();
  }
  function refresh(){
    location.reload();
  }
  function tambahKlik() {
    if (document.getElementById('txtUraian').value == "" || document.getElementById('nomor_rekening').value == null ) {
      alert('Mohon isi Klik tombol ambil rekening, dan isi kolom uraian');
    }else{
      // 190
      if (document.getElementById('txtUraian') != null) {
        var uraian = document.getElementById('txtUraian').value;
      }else{
        var uraian = null;
      }

      if (document.getElementById('k1') != null) {
         var k1 = document.getElementById('k1').value;
      }else{
        var k1 = null;
      }

      if (document.getElementById('k2') != null) {
        var k2 = document.getElementById('k2').value;
      }else{
        var k2 = null;
      }

      if (document.getElementById('k3') != null) {
        var k3 = document.getElementById('k3').value;
      }else{
        var k3 = null;
      }

      if (document.getElementById('k4') != null) {
        var k4 = document.getElementById('k4').value;
      }else{
        var k4 = null;
      }

      if (document.getElementById('txtTahunSebelumnya') != null) {
        var tahunSebelumnya = document.getElementById('txtTahunSebelumnya').value;
      }else{
        var tahunSebelumnya = null;
      }

      if (document.getElementById('txtTahunBerjalan') != null) {
        var tahunBerjalan = document.getElementById('txtTahunBerjalan').value;
      }else{
        var tahunBerjalan = null;
      }

       if (document.getElementById('txtKeterangan') != null) {
        var keterangan = document.getElementById('txtKeterangan').value;
      }else{
        var keterangan = null;
      }

      // kondisi (true) ketika nomor rekening sudah 4 digit angka
      if (document.getElementById('nomor_rekening') != null) {
        // kondisi dimulai

        var nomor_rekening = document.getElementById('nomor_rekening').value;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("wilayahCekRekening").innerHTML = xmlhttp.responseText;
          } // tutup if xmlhttp.readyState == 4 && xmlhttp.status == 200
        };
        xmlhttp.open("GET", "<?php echo base_url() ?>buku_administrasi/model_c_1_a/buku_anggaran_pendapatan_dan_belanja_desa/c_23_buku_APBDes/tambahItemRekening/"+k1+"/"+k2+"/"+k3+"/"+k4+"/"+nomor_rekening+"/"+ uraian+"/"+ keterangan+"/"+ tahunBerjalan+"/"+ tahunSebelumnya,true);
        xmlhttp.send(); 
        alert('Item berhasil di tambahkan');
        location.reload();

      // kondisi selesai

      }else{
      var xmlhttp = new XMLHttpRequest();
      var nomor_rekening = document.getElementById('nomor_rekening').value;
        xmlhttp.onreadystatechange = function(){
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById("wilayahCekRekening").innerHTML = xmlhttp.responseText;
          } // tutup if xmlhttp.readyState == 4 && xmlhttp.status == 200
        };
        xmlhttp.open("GET", "<?php echo base_url() ?>buku_administrasi/model_c_1_a/buku_anggaran_pendapatan_dan_belanja_desa/c_23_buku_APBDes/tambahItemRekening/"+k1+"/"+k2+"/"+k3+"/"+k4+"/"+nomorRekening+"/"+ uraian+"/"+ keterangan+"/"+ tahunBerjalan+"/"+ tahunSebelumnya,true);
        xmlhttp.send(); 
        alert('Data berhasil di tambahkan');
        location.reload();
      }// tutup else document.getElementById('txtKorekVisibel') != null
      
    }
    

  }
</script>



<!-- Modal -->
<div class="modal fade" id="modalTambah" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" onclick="refresh()" class="close" data-dismiss="modal" > &times; </button>
        <h4 class="modal-title">Pemambahan Item dan Nomor Rekening Baru</h4>
      </div>
      <div class="modal-body">
<form action="" method="POST" >
          <div class="control-group" id="wilayahCekRekening">
              <label class="control-label" for="basicinput">Nomor Rekening</label>
              <div class="controls">
                  <input type="hidden" name="txtNorek" id="rizkiani" value="" class="span4" readonly>
                  <input type="text" name="txtKorek"  value="" class="span4" readonly>
                  <input type="text" onclick="tambah()" readonly="" style="cursor: pointer;" name="cmdCek" class="btn btn-info span2" value="Ambil Rekening">              
              </div>
          </div> <!-- # wilayahCekRekening -->

          <div class="control-group">
              <label class="control-label" for="basicinput">Uraian</label>
              <div class="controls">
                  <input type="text" name="txtUraian" id="txtUraian"  value="" class="span4" >
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="basicinput">Tahun Sebelumnya</label>
              <div class="controls">
                  <input type="text" name="txtTahunSebelumnya" id="txtTahunSebelumnya"  value="" class="span4" >
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="basicinput">Tahun Berjalan</label>
              <div class="controls">
                  <input type="text" name="txtTahunBerjalan" id="txtTahunBerjalan"  value="" class="span4" >
              </div>
          </div>
          <div class="control-group">
              <label class="control-label" for="basicinput">Keterangan</label>
              <div class="controls">
                  <input type="text" name="txtKeterangan" id="txtKeterangan"  value="" class="span4" >
              </div>
          </div>
      <div class="modal-footer">
</form>
        <button onclick="tambahKlik()" name="tombolTambah" class="btn btn-default" data-dismiss="modal">Tambah</button>
      </div>
      </div>
    </div>

  </div>
</div>




  <script>
    $(document).on("click", "#cmdTambah", function () {
         var myBookId = $(this).data('id');
         
         $(".modal-body #rizkiani").val( myBookId );

         $("#modalTambah").modal({backdrop: "static"});
    });
  </script>



