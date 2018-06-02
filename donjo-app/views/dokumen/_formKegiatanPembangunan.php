<tr class="formEkspedisi">
  <th>No. Urut</th>
  <td><input name="no_urut" id="no_urut" type="text" class="formEkspedisi inputbox" size="100" value="<?php echo $dokumen['no_urut']?>"/></td>
</tr>


<tr class="formEkspedisi">  
  <th>Kegiatan</th>
  <td>
    <input name="kegiatan" id="kegiatan" type="text" class="formEkspedisi inputbox" value="<?php echo $dokumen['kegiatan']?>"/>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Volume</th>
  <td>
    <input name="volume" id="volume" type="text" class="formEkspedisi inputbox" value="<?php echo $dokumen['volume']?>"/>
  </td>
</tr>


<tr class="formEkspedisi">  
  <th>Sumber Daya Pemerintah</th>
  <td>
    <input name="sumber_daya_pemerintah" id="sumber_daya_pemerintah" type="text" class="formEkspedisi inputbox" value="<?php echo $dokumen['sumber_daya_pemerintah']?>"/>
  </td>
</tr>


<tr class="formEkspedisi">  
  <th>Sumber Daya Provinsi</th>
  <td>
    <input name="sumber_daya_provinsi" id="sumber_daya_provinsi" type="text" class="formEkspedisi inputbox" value="<?php echo $dokumen['sumber_daya_provinsi']?>"/>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Sumber Daya Kab/Kota</th>
  <td>
    <input name="sumber_daya_kota" id="sumber_daya_kota" type="text" class="formEkspedisi inputbox" value="<?php echo $dokumen['sumber_daya_kota']?>"/>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Sumber Daya Swadaya</th>
  <td>
    <input name="sumber_daya_swadaya" id="sumber_daya_swadaya" type="text" class="formEkspedisi inputbox" value="<?php echo $dokumen['sumber_daya_swadaya']?>"/>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Jumlah</th>
  <td>
    <input name="jumlah" id="jumlah" type="text" class="formEkspedisi inputbox" value="<?php echo $dokumen['jumlah']?>"/>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Waktu</th>
  <td>
    <input name="waktu" id="waktu" type="text" class="formEkspedisi inputbox" value="<?php echo $dokumen['waktu']?>"/>
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
    <input name="pelaksanaan" id="pelaksanaan" type="text" class="formEkspedisi inputbox" value="<?php echo $dokumen['pelaksanaan']?>"/>
  </td>
</tr>





<tr class="formEkspedisi">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>

  </td>
</tr>
