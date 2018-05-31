<tr class="formEkspedisi">
  <th>No. Urut</th>
  <td><input name="no_urut" id="no_urut" type="text" class="formEkspedisi inputbox" size="100" value="<?php echo $dokumen['no_urut']?>"/></td>
</tr>


<tr class="formEkspedisi">  
  <th>Bangunan</th>
  <td>
      <td><input name="bangunan" id="bangunan" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['bangunan']?>"/></td>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>APBDES</th>
  <td>
      <td><input name="apbdes" id="apbdes" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['apbdes']?>"/></td>
  </td>
</tr>


<tr class="formEkspedisi">  
  <th>Bantuan  Pemerintah</th>
  <td>
      <td><input name="bantuan_pemerintah" id="bantuan_pemerintah" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['bantuan_pemerintah']?>"/></td>
  </td>
</tr>


<tr class="formEkspedisi">  
  <th>Bantuan  Provinsi</th>
  <td>
      <td><input name="bantuan_provinsi" id="bantuan_provinsi" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['bantuan_provinsi']?>"/></td>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Bantuan  Kab/Kota</th>
  <td>
      <td><input name="bantuan_kota" id="bantuan_kota" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['bantuan_kota']?>"/></td>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Bantuan Sumbangan</th>
  <td>
      <td><input name="bantuan_sumbangen" id="bantuan_sumbangen" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['bantuan_sumbangen']?>"/></td>
  </td>
</tr>

<tr class="formEkspedisi">
  <th>Keadaan Barang awal</th>
  <td>
    <select name="keadaan_brg_awal" id="keadaan_brg_awal" class="formEkspedisi inputbox">
      <option value="">-- Select Type --</option>  
      <option value="baik">Baik</option>
      <option value="rusak">Rusak</option>
    </select>
  </td>
</tr>


<tr class="formEkspedisi">
  <th>Tipe Penghapusan</th>
  <td>
    <select name="tipe_penghapusan" id="tipe_penghapusan" class="formEkspedisi inputbox">
      <option value="">-- Select Type --</option>  
      <option value="rusak">Rusak</option>
      <option value="dijual">Dijual</option>
       <option value="disumbangkan">disumbangkan</option>
    </select>
  </td>
</tr>



<tr class="formEkspedisi">
  <th>Tanggal Penghapusan</th>
  <td><input name="tanggal_penghapusan" id="tanggal_penghapusan" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['tanggal_penghapusan']?>"/></td>
</tr>

  
<tr class="formEkspedisi">
  <th>Keadaan Barang akhir</th>
  <td>
    <select name="keadaan_brg_akhir" id="keadaan_brg_akhir" class="formEkspedisi inputbox">
      <option value="">-- Select Type --</option>  
      <option value="baik">Baik</option>
      <option value="rusak">Rusak</option>
    </select>
  </td>
</tr>




<tr class="formEkspedisi">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>

  </td>
</tr>
