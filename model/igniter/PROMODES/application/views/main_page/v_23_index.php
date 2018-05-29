<?php
    $row = $desa[0];
?>
                    <div class="span9">
                        <div class="content">
                                <div class="module" id="changed">
                                    <table border="0" style="text-align: center;height: 440px;width: 100%;">
                                        <tr>
                                            <td>
                                                    <h2 style="text-transform:uppercase;">
                                                        Profil dan Monografi Desa (PROMODES)
                                                    </h2>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="12px">
                                                <img src="<?php echo base_url().$row->logo_desa?>" width="25%">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                    <h3 style="text-transform:uppercase;">
                                                        Pemerintah Kabupaten <?php echo "$row->nama_kabupaten";?>
                                                        <br>
                                                        Kecamatan <?php echo "$row->nama_kecamatan";?>
                                                        <br>
                                                        <b>Desa <?php echo "$row->nama_desa";?></b>
                                                    </h3>
                                            </td>
                                        </tr>
                                    </table>
                                </div> <!-- #module -->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->