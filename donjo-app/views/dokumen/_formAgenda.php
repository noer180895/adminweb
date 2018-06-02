
<tr class="formEkspedisi">
  <th>Tanggal Penerimaan Surat</th>
  <td><input name="tanggal_penerima_surat" id="tanggal_penerima_surat" type="text" class="sk_kades inputbox datepicker2 required" value="<?php echo $dokumen['tanggal_penerima_surat']?>"/></td>
</tr>
  
<tr class="formEkspedisi">  
  <th>Nomor Masuk</th>
  <td><input name="no_masuk" id="no_masuk" type="text" class="formEkspedisi inputbox required" size="30" value="<?php echo $dokumen['no_masuk']?>"/></td>
</tr>

<tr class="formEkspedisi">
  <th>Tanggal Masuk</th>
  <td><input name="tgl_masuk" id="tanggal_surat" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['tgl_masuk']?>"/></td>
</tr>

<tr class="formEkspedisi">
  <th>Pengiriman</th>
  <td><input name="pengiriman" id="pengiriman" type="text" class="formEkspedisi inputbox required" size="20" value="<?php echo $dokumen['pengiriman']?>"/></td>
</tr>


<tr class="formEkspedisi">
  <th>Isi Surat Masuk</th>
  <td>
    <textarea name="isi_surat_masuk" id="isi_surat_masuk" lass="formEkspedisi inputbox required" rows="4" cols="50"><?php echo $dokumen['isi_surat_masuk']?></textarea>
</tr>


<tr class="formEkspedisi">  
  <th>Nomor keluar</th>
  <td><input name="no_surat_keluar" id="no_surat_keluar" type="text" class="formEkspedisi inputbox required" size="30" value="<?php echo $dokumen['no_surat_keluar']?>"/></td>
</tr>

<tr class="formEkspedisi">
  <th>Tanggal keluar</th>
  <td><input name="tgl_surat_keluar" id="tgl_surat_keluar" type="text" class="sk_kades inputbox datepicker2 required" value="<?php echo $dokumen['tgl_surat_keluar']?>"/></td>
</tr>

<tr class="formEkspedisi">
  <th>Ditujukan Kepada</th>
  <td><input name="di_tujukan_kepada" id="di_tujukan_kepada" type="text" class="formEkspedisi inputbox required" size="20" value="<?php echo $dokumen['di_tujukan_kepada']?>"/></td>
</tr>


<tr class="formEkspedisi">
  <th>Isi Surat keluar</th>
  <td>
    <textarea name="isi_surat_keluar" id="isi_surat_keluar" class="formEkspedisi inputbox required" rows="4" cols="50"><?php echo $dokumen['isi_surat_keluar']?></textarea>
</tr>



<tr class="formEkspedisi">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>

  </td>
</tr>
