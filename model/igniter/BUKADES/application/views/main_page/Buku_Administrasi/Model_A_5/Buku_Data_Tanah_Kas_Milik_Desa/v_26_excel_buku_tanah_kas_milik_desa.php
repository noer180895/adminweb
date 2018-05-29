<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Tanah Kas Milik Desa.xls");
?>

                           
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                              <table>
                                  <tr>
                                      <td colspan="23">
                                    <center><h3>Daftar Buku Tanah Kas Milik Desa Tahun <?php echo date('Y')?></h3></center>      
                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="23">
                                          <br>
                                      </td>
                                  </tr>
                                  <tr>
                                      <td colspan="23">
                                          <p>Model A 5</p>
                                      </td>
                                  </tr>
                              </table>  
                            </div>
                            
                            <style type="text/css">
                            #tengah{
                                vertical-align: middle;
                                text-align: center;
                            }
                            </style>
                                <div style="height: 410px;">
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="1" class="datatable-1 table table-bordered table-striped table-hover  display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th id="tengah" rowspan="3">No</th>
                                                <th id="tengah" rowspan="3">Asal Tanah Milik Desa / Tanah Kas Desa</th>
                                                <th id="tengah" rowspan="3">Nomor Sertifikat Buku Letter C / Persil</th>
                                                <th id="tengah" rowspan="3">Luas (Ha)</th>
                                                <th id="tengah" rowspan="3">Klas</th>
                                                <th id="tengah" colspan="6">Perolehan Tanah Kas Desa</th>
                                                <th id="tengah" colspan="5">Jenis Tanah Kas Desa</th>
                                                <th id="tengah" colspan="2">Patok Tanda Batas</th>
                                                <th id="tengah" colspan="2">Papan Nama</th>
                                                <th id="tengah" rowspan="3">Lokasi</th>
                                                <th id="tengah" rowspan="3">Peruntukan</th>
                                                <th id="tengah" rowspan="3">Ket</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah" rowspan="2">Asli Milik Desa</th>
                                            	<th id="tengah" colspan="3">Bantuan</th>
                                            	<th id="tengah" rowspan="2">lain-Lain</th>
                                            	<th id="tengah" rowspan="2">Tanggal Perolehan</th>
                                            	<th id="tengah" rowspan="2">Sawah</th>
                                            	<th id="tengah" rowspan="2">Tegal</th>
                                            	<th id="tengah" rowspan="2">Kebun</th>
                                            	<th id="tengah" rowspan="2">Tambak / Kolam</th>
                                            	<th id="tengah" rowspan="2">tanah Kering / Daratan</th>
                                            	<th id="tengah" rowspan="2">Ada</th>
                                            	<th id="tengah" rowspan="2">Tidak ada</th>
                                            	<th id="tengah" rowspan="2">Ada</th>
                                            	<th id="tengah" rowspan="2">Tidak Ada</th>
                                            </tr>
                                            <tr>
                                            	<th id="tengah">Pusat</th>
                                            	<th id="tengah">Provinsi</th>
                                            	<th id="tengah">Kabupaten/Kota</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <?php
                                                $a=0;
                                                foreach ($ambildata as $row) {
                                                        $a++;
                                                        $id = $row->id;
                                                        echo 
                                                        "
                                                        <td id='tengah'>".$a."</td>
                                                        <td id='tengah'>".$row->asal_tanah."</td>
                                                        <td id='tengah'>".$row->nomor_sertifikat."</td>
                                                        <td id='tengah'>".$row->luas."</td>
                                                        <td id='tengah'>".$row->klas."</td>
                                                        <td id='tengah'>".$row->asli_milik_desa."</td>
                                                        <td id='tengah'>".$row->pusat."</td>
                                                        <td id='tengah'>".$row->provinsi."</td>
                                                        <td id='tengah'>".$row->kabupaten."</td>
                                                        <td id='tengah'>".$row->lain_lain."</td>
                                                        <td id='tengah'>".$row->tanggal_perolehan."</td>
                                                        <td id='tengah'>".$row->sawah."</td>
                                                        <td id='tengah'>".$row->tegal."</td>
                                                        <td id='tengah'>".$row->kebun."</td>
                                                        <td id='tengah'>".$row->tambak_kolam."</td>
                                                        <td id='tengah'>".$row->tanah_kering_daratan."</td>
                                                        <td id='tengah'>".$row->patok_ada."</td>
                                                        <td id='tengah'>".$row->patok_tidak_ada."</td>
                                                        <td id='tengah'>".$row->papan_ada."</td>
                                                        <td id='tengah'>".$row->papan_tidak_ada."</td>
                                                        <td id='tengah'>".$row->lokasi."</td>
                                                        <td id='tengah'>".$row->peruntukan."</td>
                                                        <td id='tengah'>".$row->ket."</td>
                                                        ";
                                                        ?>
                                                    </td>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                                </tbody>
                                        </table>
                                        </div>
                                    </div>

                            </div>
                            </div>
                            
                        </div>
                </div>