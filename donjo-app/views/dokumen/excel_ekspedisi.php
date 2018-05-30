 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
 
      <thead>
 
           <tr>

                <th>Judul</th>
 
                <th>No Urut</th>
 
 
           </tr>
 
      </thead>
 
      <tbody>

 
           <tr>
 
                <td><?php echo $ekspedisi['nama']; ?></td>
                <td><?php echo $ekspedisi['no_urut']; ?></td>
 
           </tr>
 
 
      </tbody>
 
 </table>