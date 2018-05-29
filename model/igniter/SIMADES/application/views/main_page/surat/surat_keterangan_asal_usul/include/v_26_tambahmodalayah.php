<script>
  function tambahayah() {
    var ambilnayah= document.getElementById('nama').value;
     document.getElementById('namaayah').value = ambilnayah; 
    var ambilteayah= document.getElementById('tmptlahir').value;
     document.getElementById('tmptlahirayah').value = ambilteayah; 
    var ambiltgayah= document.getElementById('tgllahir').value;
     document.getElementById('tgllahirayah').value = ambiltgayah; 
    var ambilalayah= document.getElementById('alamat').value;
     document.getElementById('alamatayah').value = ambilalayah; 
    var ambilagayah= document.getElementById('agama').value;
     document.getElementById('agamaayah').select = ambilagayah;
    var ambilkayah= document.getElementById('kewarganegaraan').value;
     document.getElementById('kewarganegaraanayah').value = ambilkayah;  
  }
</script>
<!-- Modal -->
<div class="modal fade" id="modalTambahayah" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content modal-lg">
      <div class="modal-header">
          <button type="button" onclick="refresh()" class="close" data-dismiss="modal" > &times; </button>
        <h4 class="modal-title">ambil data ayah</h4>
      </div>
      <div class="modal-body">
      <form action="" method="POST" >
      <input type="text" id="nama"></input>
      <input type="text" id="tmptlahir"></input>
      <input type="text" id="tgllahir"></input>
      <input type="text" id="alamat"></input>
      <input type="text" id="agama"></input>
      <input type="text" id="kewarganegaraan"></input>
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>

                                            <tr>
                                                <th>No</th>
                                                <th>Nomor KK</th>
                                                <th>NomorAgama</th>
                                                <th>Nama</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Golongan Darah</th>
                                                <th>Alamat</th>
                                                <th>RT</th>
                                                <th>RW</th>
                                                <th>Agama</th>
                                                <th>Status Perkawinan</th>
                                                <th>Pendidikan Terakhir</th>
                                                <th>Pekerjaan</th>
                                                <th>Hubungan Keluarga</th>
                                                <th>Kewarganegaraan</th>
                                                <th>Nama Ayah</th>
                                                <th>Nama Ibu</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            
                                                <?php
                                                $this->load->model('Data_Penduduk/m_26_data_penduduk');
                                                $ambildatapenduduk = $this->m_26_data_penduduk->ambildata();
                                                $a=0;
                                                     foreach ($ambildatapenduduk as $rowpenduduk) {
                                                        
                                               
                                                        $a++;
                                                        ?>

                                                            <tr onClick="ambildataayah('<?php echo $a;?>')">
                                                        <?php
                                                        echo 
                                                            "
                                                            <td id='nomor".$a."'>".$a."</td>
                                                            <td>".$rowpenduduk->no_kk."</td>
                                                            <td>".$rowpenduduk->no_NIK."</td>
                                                            <td id='nama".$a."'>".$rowpenduduk->nama."</td>
                                                            <td id='tempat".$a."'>".$rowpenduduk->tempat_lahir."</td>
                                                            <td id='tanggal".$a."'>".$rowpenduduk->tanggal_lahir."</td>
                                                            <td>".$rowpenduduk->jenis_kelamin."</td>
                                                            <td>".$rowpenduduk->golongan_darah."</td>
                                                            <td id='alamat".$a."'>".$rowpenduduk->Alamat."</td>
                                                            <td>".$rowpenduduk->RT."</td>
                                                            <td>".$rowpenduduk->RW."</td>
                                                            <td id='agama".$a."'>".$rowpenduduk->agama."</td>
                                                            <td>".$rowpenduduk->status_perkawinan."</td>
                                                            <td>".$rowpenduduk->pendidikan_terakhir."</td>
                                                            <td>".$rowpenduduk->pekerjaan."</td>
                                                            <td>".$rowpenduduk->hubungan_keluarga."</td>
                                                            <td id='kewarganegaraan".$a."'>".$rowpenduduk->kewarganegaraan."</td>
                                                            <td>".$rowpenduduk->nama_ayah."</td>
                                                            <td>".$rowpenduduk->nama_ibu."</td>";
                                                            ?>
                                                            </tr>   
                                                            <?php
                                                            
                                                    }   
                                                    ?>
                                                
                                                </tbody>
                                        </table>
                                        </div>

          
      <div class="modal-footer">
</form>
        <button onclick="tambahayah()" name="tombolTambah" class="btn btn-default" data-dismiss="modal">Tambah</button>
      </div>
      </div>
    </div>

  </div>
</div>




  <script>
    $(document).on("click", "#cmdtambahayah", function () {
         $("#modalTambahayah").modal({backdrop: "static"});
    });
       
        function ambildataayah (str) {
            var nama = document.getElementById('nama'+str).innerHTML;
            var tempat = document.getElementById('tempat'+str).innerHTML;
            var tanggal = document.getElementById('tanggal'+str).innerHTML;
            var alamat = document.getElementById('alamat'+str).innerHTML;
            var agama = document.getElementById('agama'+str).innerHTML;
            var kewarganegaraan = document.getElementById('kewarganegaraan'+str).innerHTML;
            document.getElementById('nama').value = nama;
            document.getElementById('tmptlahir').value = tempat;
            document.getElementById('tgllahir').value = tanggal;
            document.getElementById('alamat').value = alamat;
            document.getElementById('agama').value = agama;
            document.getElementById('kewarganegaraan').value = kewarganegaraan;
                     // window.location="<?php echo base_url()?>surat/c_26_data_surat/tampilpilihandata";
                }
    </script>



