
<style type="text/css">
    table{
        text-transform: capitalize;
    }
    .pad{
        padding-left: 50px;
        padding-top: 5px;
        padding-bottom: -5px;
    }
</style>
<div class="span9">
    <div class="content">

            <?php
                foreach ($ambildatapendudukberdasarkan as $rowpenduduk) {  
            ?>
        <div class="module">
            <div class="module-head">
                <p style="font-size: 22px;color: #333333">Pembuatan Surat Penduduk</p>
            </div>
            <div class="module-body">
                <table id="table" width="100%" border="1" style="background-color: #696969;color: #ffffff;border-bottom: #34abcc">
                    <tr>
                        <td class="jarak">
                            <p class="pad">Nomor KK : <?php echo $rowpenduduk->no_kk;?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="pad">Alamat : <?php echo $rowpenduduk->Alamat;?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="pad">RT / RW : <?php echo $rowpenduduk->RT;?> / <?php echo $rowpenduduk->RW;?></p>
                        </td>
                    </tr>
                </table>
                <fieldset>
                    <legend>Data Penduduk</legend>
                    <table width="100%" border="1"  style="background-color: #696969;color: #ffffff;border-bottom: #34abcc;border-right: #696969">
                        <tr>
                            <td>
                                <p class="pad">Nomor NIK : <?php echo $rowpenduduk->no_NIK?></p>
                            </td>
                            <td>
                                <p class="pad">Golongan Darah : <?php echo $rowpenduduk->golongan_darah?></p>
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="pad">Nama : <?php echo $rowpenduduk->nama?></p>
                            </td>
                            <td>
                                <p class="pad">Agama : <?php echo $rowpenduduk->status_perkawinan?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="pad">Tempat / Tgl Lahir : <?php echo $rowpenduduk->tempat_lahir?> / <?php echo $rowpenduduk->tanggal_lahir?></p>
                            </td>
                            <td>
                                <p class="pad">Pendidikan Terakhir : <?php echo $rowpenduduk->pendidikan_terakhir?></p>   
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="pad">Pekerjaan : <?php echo $rowpenduduk->pekerjaan?></p>
                            </td>
                            <td>
                                <p class="pad">Hubungan Keluarga : <?php echo $rowpenduduk->hubungan_keluarga?></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="pad">Kewarganegaraan : <?php echo $rowpenduduk->kewarganegaraan?></p>
                            </td>
                            <td>
                                <p class="pad">Jenis Kelamin : <?php echo $rowpenduduk->jenis_kelamin?></p>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <legend></legend>
                <table width="100%">
                    <tr>
                        <td>
                            <div class="control-group">
                                <div class="controls">
                                    <section>
                                        <form class="ac-custom ac-radio ac-circle" autocomplete="off" style="background-color: #696969" action="<?php echo base_url()?>surat/c_26_data_surat/tampilpilihandata" method="GET">
                                        <h3 style="color: #ffffff;padding-top: 10px">Pilih Data Surat </h3>
                                        <hr>

                                        <input type="hidden" name="iddata" value="<?php echo $rowpenduduk->id?>"></input>
                                        <?php
                                            $a = 0;
                                                    foreach ($ambilsurat as $rowsurat){
                                                    $a++;
                                        ?>
                                            <ul>
                                                <li>
                                                    <input id="d" name="surat" type="radio" value='<?php echo $rowsurat->nama_surat;?>' id="surat<?php echo $rowsurat->nama_surat?>" onclick="ambil('<?php echo $rowsurat->nama_surat?>')" required><label for="r5"><?php echo $a.". ";?><?php echo $rowsurat->nama_surat;?></label>
                                                </li>
                                        <?php

                                                }
                                        ?>
                                            </ul>
                                            <input type="hidden" name="ambilsurat" id="surattimpan"></input>
                                            <center>
                                                    <input type="submit" name="simpan" value="Buat Surat" class="tombolputih span3" style="margin-bottom: 10px"></input>                        
                                            </center>
                                        </form>
                                    </section>
                                       
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            <?php
                }
            ?>
            </div>
            </div>
        </div>
<script type="text/javascript">
    function ambil (str) {
         var a = document.getElementById('surat'+str).value;
         document.getElementById('surattimpan').value = a; 
    }
</script>