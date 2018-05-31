<tr class="formInventaris">
  <th>No. Urut</th>
  <td><input name="nourut" type="text" class="formInventaris inputbox" size="100" value="<?php echo $dokumen['nourut']?>"/></td>
</tr>
<tr class="formInventaris">
  <th>Jenis Barang / Bangunan</th>
  <td><input name="jenis_barang_at_bangunan" type="text" class="formInventaris inputbox" size="30" value="<?php echo $dokumen['jenis_barang_at_bangunan']?>"/></td>
</tr>
<tr class="formInventaris">  
  <tr class="spacer"></tr>
  <tr>
    <td class="select">Asal Barang / Bangunan&nbsp; </td>
    <td><select name="asal_barang_bangunan">
    <option value="dibeli_sendiri">Dibeli Sendiri</option>
    <option value="bantuan_pemerintah">Bantuan Pemerintah</option>
    <option value="bantuan_provinsi">Bantuan Provinsi</option>
    <option value="bantuan_Kab_at_Kota">Bantuan Kab/Kota</option>
    <option value="sumbangan">Sumbangan</option>
    </select></td>
  </tr>
</tr>
<tr class="formInventaris">
  <td class="select">Keadaan Barang / Bangunan Awal tahun&nbsp; </td>
  <td><select name="keadaanbarang">
    <option value="baik">Baik</option>
    <option value="rusak">Rusak</option>
  </select></td>
</tr>
<tr class="formInventaris">
  <td class="select">Penghapusan Barang dan bangunan&nbsp; </td>
  <td><select name="penghapusanbarang">
    <option value="baik">Baik</option>
    <option value="rusak">Rusak</option>
    <option value="disumbangkan">Disumbangkan</option>    
  </select></td>
  <tr class="spacer"></tr>
  <th>Tanggal Penghapusan</th>
  <td><input name="tanggal_penghapusan" type="datepicker" class="formInventaris inputbox datepicker" size="30" value="<?php echo $dokumen['tanggal_penghapusan']?>"/></td>
</tr>
<tr class="formInventaris">
  <th>Keterangan</th>
  <td><input name="[keterangan]" type="text" class="formInventaris inputbox" size="100" value="<?php echo $dokumen['keterangan']?>"/></td>
</tr>
