<tr class="formEkspedisi">
  <th>No. Urut</th>
  <td><input name="no_urut" id="no_urut" type="text" class="formEkspedisi inputbox" size="100" value="<?php echo $dokumen['no_urut']?>"/></td>
</tr>


<tr class="formEkspedisi"> 
  <th>Nama Lengkap</th>
  <td><input name="nama_lengkap" id="nama_lengkap" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['nama_lengkap']?>"/></td>
</tr>

<tr class="formEkspedisi">  
  <th>Tempat Lahir</th>
  <td><input name="tempat_lahir" id="tempat_lahir" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['tempat_lahir']?>"/></td>
</tr>

<tr class="formEkspedisi">
  <th>Tanggal Lahir</th>
  <td><input name="tanggal_lahir" id="tanggal_lahir" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['tanggal_lahir']?>"/></td>
</tr>

<tr class="formEkspedisi">
  <th>Jenis Kelamin</th>
  <td>
    <input type="radio" name="jenis_kelamin" value="female"> Female<br>
    <input type="radio" name="jenis_kelamin" value="male"> Male  
  </td>
</tr>


<tr class="formEkspedisi">  
  <th>Kewarganeraraan</th>
  <td>
    <input type="checkbox" name="flag_baca" value="wni"> WNI
    <input type="checkbox" name="flag_baca" value="wna"> WNA
  </td>
</tr>


<tr class="formEkspedisi">
  <th>Jenis Mutasi</th>
  <td>
    <select name="status" id="status" class="formEkspedisi inputbox">
      <option value="">-- Jenis Mutasi --</option>  
      <option value="penambahan">Penambahan</option>
      <option value="pengurangan">Pengurangan</option>
    </select>
  </td>
</tr>


<tr class="formEkspedisi">
  <th>Alasan</th>
  <td>
    <select name="alasan" id="alasan" class="formEkspedisi inputbox">
      <option value="">-- Pilih Alasan --</option>  
      <option value="datang dari">Datang Dari</option>
      <option value="pindah ke">Pindah Ke</option>
       <option value="meninggal">Meninggal</option>
    </select>
  </td>
</tr>



  <tr class="formEkspedisi">
    <th>Tanggal</th>
    <td><input name="tanggal" id="tanggal" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['tanggal']?>"/></td>
  </tr>




<tr class="formEkspedisi">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>

  </td>
</tr>
