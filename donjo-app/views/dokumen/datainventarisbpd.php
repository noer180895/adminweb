<tr class="datainventarisbpd">
  <th>No. Urut</th>
  <td><input name="no_urut" id="no_urut" type="text" class="datainventarisbpd inputbox" size="100" value="<?php echo $dokumen['no_urut']?>"/></td>
</tr>
<tr class="datainventarisbpd">
  <th>Jenis Barang Bangunan</th>
  <td><input name="jenisbarangbanguanan" id="jenisbarangbanguanan" type="text" class="datainventarisbpd inputbox datepicker2" value="<?php echo $dokumen['jenisbarangbanguanan']?>"/></td>
</tr>
<tr class="datainventarisbpd">
  <th>Asal Barang Bangunan</th>
  <td><input name="asalbarangbangunan" id="datainventarisbpd" type="text" class="datainventarisbpd inputbox" value="<?php echo $dokumen['datainventarisbpd']?>"/></td>
</tr>
<tr class="datainventarisbpd">
  <th>Bantuan</th>
  <td>
    <select name="type" id="type" class="datainventarisbpd inputbox">
      <option value="">-- Select Type --</option>  
      <option value="pemerintah">Pemerintah</option>
      <option value="provinsi">Provinsi</option>
      <option value="kab_kota">Kabupaten/Kota</option>
    </select>
  </td>
</tr>
<tr class="datainventarisbpd">
  <th>Sumbangan</th>
  <td><input name="sumbangan" id="sumbangan" type="text" class="datainventarisbpd inputbox" value="<?php echo $dokumen['sumbangan']?>"/></td>
</tr>
<tr class="datainventarisbpd">
  <th>Keadaan Barang Bangunan</th>
  <td>
    <select name="type" id="type" class="datainventarisbpd inputbox">
      <option value="">-- Select Type --</option>  
      <option value="baik">Baik</option>
      <option value="rusak">Rusak</option>
    </select>
  </td>
</tr>
<tr class="datainventarisbpd">
  <th>Tanggal Penghapusan</th>
  <td>
    <select name="type" id="type" class="datainventarisbpd inputbox">
      <option value="">-- Select Type --</option>  
      <option value="rusak">Rusak</option>
      <option value="dijual">Dijual</option>
      <option value="disumbangkan">Disumbangkan</option>
      <option value="tanggalpenghapusan">Tanggal Pengahpusan</option>
    </select>
  </td>
</tr>
<tr class="datainventarisbpd">
  <th>Keadaan Barang Bangunan Akhir Tahun</th>
  <td>
    <select name="type" id="type" class="datainventarisbpd inputbox">
      <option value="">-- Select Type --</option>  
      <option value="baik">Baik</option>
      <option value="rusak">Rusak</option>
    </select>
  </td>
</tr>
<tr class="datainventarisbpd">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>
  </td>
</tr>