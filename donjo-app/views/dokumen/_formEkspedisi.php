<tr class="formEkspedisi">
  <th>No. Urut</th>
  <td><input name="no_urut" id="no_urut" type="text" class="formEkspedisi inputbox" size="100" value="<?php echo $dokumen['no_urut']?>"/></td>
</tr>
<tr class="formEkspedisi">
  <th>Tanggal Pengiriman</th>
  <td><input name="tanggal_pengiriman" id="tanggal_pengiriman" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['tanggal_pengiriman']?>"/></td>
</tr>
<tr class="formEkspedisi">  
  <th style="font-size: 14px;    text-align: right;">Asal Barang / Bangunan</th>
  <tr class="spacer"></tr>
  <th>Tanggal dan Nomor Surat</th>
  <td><input name="tanggal_no_surat" id="tanggal_no_surat" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['tanggal_no_surat']?>"/></td>
</tr>
<tr class="formEkspedisi">
  <th>Isi Singkat Surat yang dikirim</th>
  <td>
    <textarea name="isi_surat" id="isi_surat" rows="4" cols="50"><?php echo $dokumen['isi_surat']?></textarea>
</tr>
<tr class="formEkspedisi">
  <th>Ditujukan Kepada</th>
  <td><input name="ditujukan_kepada" id="ditujukan_kepada" type="text" class="formEkspedisi inputbox" size="20" value="<?php echo $dokumen['ditujukan_kepada']?>"/></td>
</tr>
<tr class="formEkspedisi">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>

  </td>
</tr>
