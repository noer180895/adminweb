<tr class="formEkspedisi">
  <th>No. Urut</th>
  <td><input name="no_urut" id="no_urut" type="text" class="formEkspedisi inputbox" size="100" value="<?php echo $dokumen['no_urut']?>"/></td>
</tr>

<tr class="formEkspedisi"> 
  <th>Nomor Keluarga</th>
  <td><input name="nomor_keluarga" id="nomor_keluarga" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['nomor_keluarga']?>"/></td>
</tr>

<tr class="formEkspedisi"> 
  <th>Nama Lengkap</th>
  <td><input name="nama_lengkap" id="nama_lengkap" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['nama_lengkap']?>"/></td>
</tr>

<tr class="formEkspedisi">  
  <th>Nik</th>
  <td><input name="nik" id="nik" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['nik']?>"/></td>
</tr>

<tr class="formEkspedisi">
  <th>Jenis Kelamin</th>
  <td>
    <input type="radio" name="jenis_kelamin" value="female"> Female<br>
    <input type="radio" name="jenis_kelamin" value="male"> Male  
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Tempat Tanggal Lahir</th>
  <td><input name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['tempat_tanggal_lahir']?>"/></td>
</tr>

<tr class="formEkspedisi">  
  <th>Gol Darah</th>
  <td><input name="gol_darah" id="gol_darah" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['gol_darah']?>"/></td>
</tr>


<tr class="formEkspedisi">  
  <th>Agama</th>
  <td><input name="agama" id="agama" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['agama']?>"/></td>
</tr>



<tr class="formEkspedisi">  
  <th>Pendidikan</th>
  <td><input name="pendidikan" id="pendidikan" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['pendidikan']?>"/></td>
</tr>



<tr class="formEkspedisi">  
  <th>Pekerjaan</th>
  <td><input name="pekerjaan" id="pekerjaan" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['pekerjaan']?>"/></td>
</tr>


<tr class="formEkspedisi">
  <th>Status Perkawinan</th>
  <td>
    <select name="status" id="status" class="formEkspedisi inputbox">
      <option value="">-- Status Perkawinan --</option>  
      <option value="menikah">Menikah</option>
      <option value="belum menikah">Belum Menikah</option>
      <option value="cerai">Cerai</option>
    </select>
  </td>
</tr>


<tr class="formEkspedisi">  
  <th>Status Hubungan Keluarg</th>
  <td><input name="status_hub_kel" id="status_hub_kel" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['status_hub_kel']?>"/></td>
</tr>

<tr class="formEkspedisi">  
  <th>Kewarganeraraan</th>
  <td>
    <input type="checkbox" name="warganegara" value="wni"> WNI
    <input type="checkbox" name="warganegara" value="wna"> WNA
  </td>
</tr>


<tr class="formEkspedisi">
  <th>Ayah</th>
  <td><input name="ayah" id="ayah" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['ayah']?>"/></td>
</tr>


<tr class="formEkspedisi">
  <th>Ibu</th>
  <td><input name="ibu" id="ibu" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['ibu']?>"/></td>
</tr>


<tr class="formEkspedisi">
  <th>Tanggal Mulai Tinggal</th>
  <td><input name="tanggal_mulai_tinggal" id="tanggal_mulai_tinggal" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['tanggal_mulai_tinggal']?>"/></td>
</tr>



<tr class="formEkspedisi">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>

  </td>
</tr>