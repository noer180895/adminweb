
           
<div class="span9">
    <div class="content">

        <div class="module">
            <div class="module-head">
                <h3>Daftar Surat Keterangan yang terdaftar</h3>
            </div>
            <div class="module-body">
                        <div class="control-group">
                            <div class="controls">
                                <section>
                                    <form class="ac-custom ac-radio ac-circle" autocomplete="off" style="background-color: #696969" action="<?php echo base_url()?>surat/c_26_data_surat/link" method="GET">
                                    <h3 style="color: #ffffff;padding-top: 0px">Pilih Surat untuk Pengaturan Nomor Surat</h3>
                                    <?php
                                        $a = 0;
                                                foreach ($ambilsurat as $rowsurat){
                                                $a++;
                                    ?>
                                        <ul>
                                            <li>
                                                <input id="d" name="surat" type="radio" value='<?php echo $rowsurat->nama_surat;?>' id="surat<?php echo $rowsurat->nama_surat?>" onclick="ambil('<?php echo $rowsurat->nama_surat?>')" required><label for="r5">
                                                <?php echo $a.". ";?><?php echo $rowsurat->nama_surat;?></label>
                                            </li>
                                    <?php

                                            }
                                    ?>
                                        </ul>
                                        <input type="hidden" name="ambilsurat" id="surattimpan"></input>
                                        <center>
                                                <input type="submit" name="simpan" value="Nomor Surat" class="tombolputih span3" style="margin-bottom: 10px"></input>                        
                                        </center>
                                    </form>
                                </section>
                            <!-- <?php
                                    foreach ($ambilsurat as $rowsurat){
                                ?>
                                        <a href="<?php echo base_url()?>surat/c_26_data_surat/link?id=<?php echo $rowsurat->id?>"><button style='width:100%' class='tombolexport'><?php echo $rowsurat->nama_surat ?></button></a>
                                        <?php

                                    }
                            ?> -->
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function ambil (str) {
         var a = document.getElementById('surat'+str).value;
         document.getElementById('surattimpan').value = a; 
    }
</script>