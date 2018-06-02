<tr class="formEkspedisi">
  <th>Kode Rekening</th>
  <td><input name="kode_rekening" id="kode_rekening" type="text" class="formEkspedisi inputbox" size="100" value="<?php echo $dokumen['kode_rekening']?>"/></td>
</tr>


<tr class="formEkspedisi">  
  <th>Uraian</th>
  <td>
      
         <textarea name="uraian" id="uraian" rows="4" cols="50"><?php echo $dokumen['uraian']?></textarea>
  </td>
</tr>

<tr class="formEkspedisi">  
  <th>Anggaran</th>
  <td>
      <input name="anggaran" id="anggaran" type="text" class="sk_kades inputbox datepicker2" value="<?php echo $dokumen['anggaran']?>"/>
  </td>
</tr>

<tr class="formEkspedisi">
  <th>Keterangan</th>
  <td>
    <textarea name="keterangan" id="keterangan" rows="4" cols="50"><?php echo $dokumen['keterangan']?></textarea>

  </td>
</tr>

