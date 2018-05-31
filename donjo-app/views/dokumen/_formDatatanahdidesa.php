<tr class="datatanahdidesa">
	<th>No. Urut </th>
  <td><input name="no_urut" type="text" class="forminventaris" size="100" value="<?php echo $dokumen['no_urut']?>"/></td>
</tr>
<tr class="datatanahdidesa">
	<th>Nama Perorangan/Badan Hukum</th>
  <td><input name="namaperorangan_badanhukum" type="text" class="datatanahdidesa inputbox" size="30" value="<?php echo $dokumen['namaperorangan_badanhukum']?>"/></td>
</tr>
	<tr class="datatanahdidesa">
	<th>Jumlah M2</th>
  <td><input name="jumlahm2" type="text" class="Forminventaris inputbox" size="20" value="<?php echo $dokumen['jumlahm2']?>"/></td>
</tr>
<tr class="datatanahdidesa">
	<th>Status Hak Tanah</th>
  <td><input name="statushaktanah" type="text" class="datatanahdidesa inputbox" size="20" value="<?php echo $dokumen['statushaktanah']?>"/></td>
</tr>
<tr class="datatanahdidesa">
<select>
	<th>Sudah Bersertifikat</th>
  <td><select name="sudah_bertifikat_opt">
    <option value="hm">HM</option>
    <option value="hgb">HGB</option>
    <option value="hp">HP</option>
    <option value="hgu">HGU</option>
    <option value="hpl">HPL</option>
    <option value="sudahsertifikat" selected>Sudah Bersertifikat</option>
    </select></td>	
</select>
</tr>
<tr class="datatanahdidesa">
	<th>Pengguna Tanah (M2)</th>
  <td><input name="penggunatanahm2" type="text" class="datatanahdidesa inputbox" size="20" value="<?php echo $dokumen['attr']['penggunatanahm2']?>"/></td>
</tr>
<tr class="datatanahdidesa">
	<th>Non Pertanian</th>
  <td><select name="non_pertanian_opt">
    <option value="perumahan">perumahan</option>
    <option value="perdagangandanjasa">Perdagangan dan Jasa</option>
    <option value="perkantoran">Perkantoran</option>
    <option value="industri">Industri</option>
    <option value="fasilitasumum">Fasilitas Umum</option>
    <option value="nonpertanian" selected>Non Pertanian</option>
    </select></td>	
</tr>
<tr class="datatanahdidesa">
	<th>Pertanian</th>
  <td><select name="pertanian_opt">
    <option value="sawah">Sawah</option>
    <option value="tegalan">Tegalan</option>
    <option value="perkebunan">Perkebunan</option>
    <option value="perternakan">Perternakan</option>
    <option value="hutanbelukar">Hutan Belukar</option>
    <option value="hutanblindung">Hutan Lindung</option>
    <option value="mutasitanahdidesa">mutasitanahdidesa</option>
    <option value="tanahkosong">Tanah Kosong</option>
    <option value="pertanian" selected>pertanian</option>
    </select></td>  
</tr>
<tr class="datatanahdidesa">
	<th>Lain-lain</th>
  <td><input name="lainlain" type="text" class="datatanahdidesa inputbox" size="30" value="<?php echo $dokumen['lainlain']?>"/></td>
</tr>
<tr class="datatanahdidesa">
	<th>Keterangan</th>
  <td><input name="keterangan" type="text" class="Forminventaris inputbox" size="20" value="<?php echo $dokumen['keterangan']?>"/></td>
</tr>