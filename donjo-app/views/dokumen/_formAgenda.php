<tr class="formEkspedisi">
  <th>No. Urut</th>
  <td><input name="no_urut" id="no_urut" type="text" class="formEkspedisi inputbox" size="100" value="<?php echo $dokumen['no_urut']?>"/></td>
</tr>
<tr class="formEkspedisi">
  <th>Tanggal Penerimaan Surat</th>
  <td><input name="tanggal_penerimaan" id="tanggal_penerimaan" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['tanggal_penerimaan']?>"/></td>
</tr>
<tr class="formEkspedisi">
  <th>Type Surat</th>
  <td>
    <select name="type" id="type" class="formEkspedisi inputbox">
      <option value="">-- Select Type --</option>  
      <option value="surat masuk">Surat Masuk</option>
      <option value="surat keluar">Surat Keluar</option>
    </select>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Nomor</th>
  <td><input name="nomor" id="nomor" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['nomor']?>"/></td>
</tr>

<tr class="formEkspedisi">
  <th>Tanggal</th>
  <td><input name="tanggal_surat" id="tanggal_surat" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['tanggal_surat']?>"/></td>
</tr>

<tr class="formEkspedisi">
  <th>Pengirim</th>
  <td><input name="pengirim" id="pengirim" type="text" class="formEkspedisi inputbox" size="20" value="<?php echo $dokumen['pengirim']?>"/></td>
</tr>

<tr class="formEkspedisi">
  <th>Isi Surat</th>
  <td>
    <textarea name="isi_surat" id="isi_surat" rows="4" cols="50"><?php echo $dokumen['isi_surat']?></textarea>
</tr>

<tr class="formEkspedisi">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>

  </td>
</tr>
