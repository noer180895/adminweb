<tr class="formEkspedisi">
  <th>No. Urut</th>
  <td><input name="no_urut" id="no_urut" type="text" class="formEkspedisi inputbox" size="100" value="<?php echo $dokumen['no_urut']?>"/></td>
</tr>


<tr class="formEkspedisi">  
  <th>Kegiatan</th>
  <td>
      <td><input name="kegiatan" id="kegiatan" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['kegiatan']?>"/></td>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Volume</th>
  <td>
      <td><input name="volume" id="volume" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['volume']?>"/></td>
  </td>
</tr>


<tr class="formEkspedisi">  
  <th>Sumber Daya Pemerintah</th>
  <td>
      <td><input name="sumber_daya_pemerintah" id="sumber_daya_pemerintah" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['sumber_daya_pemerintah']?>"/></td>
  </td>
</tr>


<tr class="formEkspedisi">  
  <th>Sumber Daya Provinsi</th>
  <td>
      <td><input name="sumber_daya_provinsi" id="sumber_daya_provinsi" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['sumber_daya_provinsi']?>"/></td>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Sumber Daya Kab/Kota</th>
  <td>
      <td><input name="sumber_daya_kota" id="sumber_daya_kota" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['sumber_daya_kota']?>"/></td>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Sumber Daya Swadaya</th>
  <td>
      <td><input name="sumber_daya_swadaya" id="sumber_daya_swadaya" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['sumber_daya_swadaya']?>"/></td>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Jumlah</th>
  <td>
      <td><input name="jumlah" id="jumlah" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['jumlah']?>"/></td>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Waktu</th>
  <td>
      <td><input name="waktu" id="waktu" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['waktu']?>"/></td>
  </td>
</tr>

<tr class="formEkspedisi">
  <th>Sifat Proyek</th>
  <td>
    <select name="type" id="type" class="formEkspedisi inputbox">
      <option value="">-- Select Sifat Proyek --</option>  
      <option value="baru">Baru</option>
      <option value="lanjutan">Lanjutan</option>
    </select>
  </td>
</tr>




<tr class="formEkspedisi">  
  <th>Pelaksanaan</th>
  <td>
      <td><input name="pelaksanaan" id="pelaksanaan" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['pelaksanaan']?>"/></td>
  </td>
</tr>





<tr class="formEkspedisi">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>

  </td>
</tr>
