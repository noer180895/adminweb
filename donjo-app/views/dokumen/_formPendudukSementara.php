<tr class="formEkspedisi">
  <th>No. Urut</th>
  <td><input name="no_urut" id="no_urut" type="text" class="formEkspedisi inputbox" size="100" value="<?php echo $dokumen['no_urut']?>"/></td>
</tr>


<tr class="formEkspedisi"> 
  <th>Nama Lengkap</th>
  <td><input name="nama_lengkap" id="nama_lengkap" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['nama_lengkap']?>"/></td>
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
  <th>Pekerjaan</th>
  <td><input name="pekerjaan" id="pekerjaan" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['pekerjaan']?>"/></td>
</tr>

<tr class="formEkspedisi">  
  <th>Kewarganeraraan</th>
  <td>
    <input type="checkbox" name="warganegara" value="wni"> WNI
    <input type="checkbox" name="warganegara" value="wna"> WNA
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Datang Dari</th>
  <td><input name="datang_dari" id="datang_dari" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['datang_dari']?>"/></td>
</tr>


<tr class="formEkspedisi">
  <th>Maksud Dan Tujuan</th>
  <td>
    <textarea name="tujuan_kedatangan" id="tujuan_kedatangan" rows="4" cols="50"><?php echo $dokumen['tujuan_kedatangan']?></textarea>

  </td>
</tr>


<tr class="formEkspedisi">
  <th>Nama Dan Alamat yg di datangi</th>
  <td>
    <textarea name="alamat_tujuan_datang" id="alamat_tujuan_datang" rows="4" cols="50"><?php echo $dokumen['alamat_tujuan_datang']?></textarea>

  </td>
</tr>


<tr class="formEkspedisi">
  <th>Tanggal Datang</th>
  <td><input name="tanggal_datang" id="tanggal_datang" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['tanggal_datang']?>"/></td>
</tr>


<tr class="formEkspedisi">
  <th>Tanggal Pergi</th>
  <td><input name="tanggal_pergi" id="tanggal_pergi" type="text" class="sk_kades inputbox datepicker22" value="<?php echo $dokumen['tanggal_pergi']?>"/></td>
</tr>



<tr class="formEkspedisi">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>

  </td>
</tr>