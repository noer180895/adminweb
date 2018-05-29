<?php 
    if ($leng == 7) {
        include('include/v_23_buku_SPP.php');
    }else{
        ?>
<div class="span9">
    <div class="content">
        <div class="module">
            <div class="module-head">
                Surat Permintaan Pembayaran
            </div>
            <div class="module-body">
        <?php
        foreach ($data as $row) {
            ?>
                <section class="demo-3">    
                        <div class="grid">
                            <a href="<?php echo base_url().'APBDes/c_23_generateAPBDes/bukuSPP?id='.$row->nomor_rekening ?>">
                                <div class="box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                                        <line class="top" x1="0" y1="0" x2="900" y2="0"/>
                                        <line class="left" x1="0" y1="460" x2="0" y2="-920"/>
                                        <line class="bottom" x1="300" y1="460" x2="-600" y2="460"/>
                                        <line class="right" x1="300" y1="0" x2="300" y2="1380"/>
                                    </svg>
                                    <h3><?php echo substr($row->uraian, 0, 1) ?></h3>
                                    <span><?php echo $row->uraian ?></span>
                                    <span>Tahun <?php echo $_SESSION['tahunApbdes'] ?></span>
                                </div>
                            </a>
                    </section>;
            <?php
        }           
    }
?>
            </div>
        </div>
    </div>
</div>