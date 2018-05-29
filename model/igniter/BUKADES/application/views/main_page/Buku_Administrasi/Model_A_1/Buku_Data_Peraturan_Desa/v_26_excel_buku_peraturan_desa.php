<?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=Buku Peraturan Desa.xls");
?>
                           
                <div class="span9">
                    <div class="content">
                    <table>
                    <tr>
                    <td colspan="7">
                        <center>
                            <p style="font-size: 24px">Daftar Buku Peraturan Desa Tahun <?php echo date('Y')?></p>
                        </center>
                    </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Model A 1</p>
                        </td>
                    </tr>
                    </table>
                    <style type="text/css">
                        .tengah{
                            text-align: center;
                        }
                    </style>
                                <div class="module-body table">
                                <center>
                                    <table cellpadding="0" cellspacing="0" border="1"
                                        width="100%">
                                        <thead>

                                            <tr>
                                                <th class="tengah">No</th>
                                                <th class="tengah">Nomor & Tanggal Peraturan Desa</th>
                                                <th class="tengah">Tentang</th>
                                                <th class="tengah">Uraian Singkat</th>
                                                <th class="tengah">Nomor & Tanggal Persetujuan BPD</th>
                                                <th class="tengah">Nomor & Tanggal Dilaporkan</th>
                                                <th class="tengah">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                                <?php
                                                $a=0;
                                                foreach ($ambildata as $row) {
                                                        $a++;
                                                        $id = $row->id;
                                                        echo 
                                                        "
                                                        <td class='tengah'>".$a."</td>
                                                        <td class='tengah'>".$row->nomor_tanggal_peraturan_desa."</td>
                                                        <td class='tengah'>".$row->tentang."</td>
                                                        <td class='tengah'>".$row->uraian_singkat."</td>
                                                        <td class='tengah'>".$row->nomor_tanggal_persetujuan_BPD."</td>
                                                        <td class='tengah'>".$row->nomor_tanggal_dilaporkan."</td>
                                                        <td class='tengah'>".$row->keterangan."</td>";
                                                        ?>
                                                    </tr>
                                                    <?php
                                                    }
                                                ?>
                                                </tbody>
                                        </table>
                                    </center>
                        </div>
                </div>