<div class="span9">
    <div class="content">
		<div class="module">
            <div class="module-head">
                <h3>Rekening</h3>
            </div>
            <div class="module-body">

                    <form action="#" class="form-horizontal row-fluid" method="POST">
                        <div class="control-group">
		                    <label class="control-label" for="basicinput">Nomor Rekening</label>
                            <div class="controls">
                                <input type="number"  class="span5" rows="2" name="txtNomorRekening" value="<?php echo $tampil->nomor_rekening ?>" readonly>
                            </div>
                        </div>
                       <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display" width="100%">
                                    <thead>
                                        <tr>
                                            <?php
                                                for ($c=1; $c <=10 ; $c++) { 
                                                    echo "<th> Rek $c </th>";
                                                }
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody width="100%">
                                        <?php
                                            echo 
                                                "
                                            <tr>";
                                                for ($k=1; $k <=10 ; $k++) { 
                                                    $kode = "k".$k;
                                                    echo "<td> ".$tampil->$kode." </td>";
                                                }
                                            echo
                                                "
                                            </tr>";   
                                        ?>           
                                    </tbody>
                                </table>
                            </div>                            

                        <div class="control-group" id="kresna">
	                       
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="basicinput">Uraian</label>
                            <div class="controls">
                                <textarea class="span8" rows="2"  maxlength="200" name="txtUraian" required readonly="true"><?php echo $tampil->uraian ?> </textarea>
                            </div>
                        </div>

                         <div class="controls" style="padding-top:2%;text-align:right">
                                <a class="btn btn-danger" href="<?php echo base_url()?>rekening/c_23_rekening">Kembali</a>
                        </div>
                    </form>
            </div>
        </div>        
    </div><!--/.content-->
</div><!--/.span9-->

