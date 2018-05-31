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
  <td><input name="tanggal_lahir" id="tanggal_lahir" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['tanggal_lahir']?>"/></td>
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


<div id="penambahanShow" style="display: none;">


  <tr class="formEkspedisi">  
    <th>Datang Dari</th>
    <td><input name="datang_dari" id="datang_dari" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['datang_dari']?>"/></td>
  </tr>


  <tr class="formEkspedisi">
    <th>Tanggal</th>
    <td><input name="tanggal" id="tanggal_datang" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['tanggal_datang']?>"/></td>
  </tr>

</div>



<div id="penguranganShow" style="display: none;">


  <tr class="formEkspedisi">  
    <th>Pindah Ke</th>
    <td><input name="pindah_ke" id="pindah_ke" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['pindah_ke']?>"/></td>
  </tr>


  <tr class="formEkspedisi">
    <th>Tanggal</th>
    <td><input name="tanggal" id="tanggal_pindah" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['tanggal_pindah']?>"/></td>
  </tr>


   <tr class="formEkspedisi">  
    <th>Pindah Ke</th>
    <td><input name="pindah_ke" id="pindah_ke" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['pindah_ke']?>"/></td>
  </tr>

</div>


<tr class="formEkspedisi">  
  <th>Pendidikan Terakhir</th>
  <td><input name="pendidikan_terakhir" id="pendidikan_terakhir" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['pendidikan_terakhir']?>"/></td>
</tr>


<tr class="formEkspedisi">  
  <th>Pekerjaan</th>
  <td><input name="pekerjaan" id="pekerjaan" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['pekerjaan']?>"/></td>
</tr>

<tr class="formEkspedisi">  
  <th>Dapat Membaca Huruf</th>
  <td>
    <input type="checkbox" name="flag_baca" value="ya"> Bisa
    <input type="checkbox" name="flag_baca" value="ya"> Tidak Bisa
  </td>
</tr>




<tr class="formEkspedisi">
  <th>Alamat Lengkap</th>
  <td>
    <textarea name="alamat_lengkap" id="alamat_lengkap" rows="4" cols="50"><?php echo $dokumen['alamat_lengkap']?></textarea>
</tr>


<tr class="formEkspedisi">
  <th>Kedudukan Dalam Keluarga</th>
  <td>
    ><input name="kedudukan" id="kedudukan" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['kedudukan']?>"/>
</tr>


<tr class="formEkspedisi">
  <th>Nomor Induk Kependudukan</th>
  <td>
    ><input name="nik" id="nik" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['nik']?>"/>
</tr>


<tr class="formEkspedisi">
  <th>Nomor Kartu Keluarga</th>
  <td>
    ><input name="nkk" id="nkk" type="text" class="formEkspedisi inputbox" size="30" value="<?php echo $dokumen['nkk']?>"/>
</tr>

<tr class="formEkspedisi">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>

  </td>
</tr>
