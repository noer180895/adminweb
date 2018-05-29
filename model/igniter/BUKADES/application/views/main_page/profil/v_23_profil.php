                                        <div class="span9">
                        <div class="content">
                            <div class="module">
                                <div class="module-body">
                                    <div class="profile-head media">
                                    <?php
                                        $result             = $this->m_log->getNipUser();                                       
                                        $foto               = $result[0]->foto;
                                        $nama               = $result[0]->nama;
                                        $nip                = $result[0]->nip;
                                        $hp                 = $result[0]->hp;
                                        $alamat             = $result[0]->alamat;
                                        $tanggal_input      = $result[0]->tanggal_input;
                                        $status             = $result[0]->status;

                                    ?>
                                        <a href="#" class="media-avatar pull-left">
                                            <img src="<?php echo base_url().$foto ?>">
                                        </a>
                                        <div class="media-body">
                                            <h4>
                                                <?php echo $nama ?>
                                            </h4>
                                            <p class="profile-brief">
                                            <table style="font-size:12px">
                                                <tr>
                                                    <td width="15%"> NIP </td>
                                                    <td>:<?php echo $nip ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor HP </td>
                                                    <td>: <?php echo $hp ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Daftar </td>
                                                    <td>: <?php echo $tanggal_input ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Status </td>
                                                    <td>: <?php echo $status ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat </td>
                                                    <td>: <?php echo $alamat ?></td>
                                                </tr>
                                            </table>
                                            </p>
                                        </div>
                                    </div>
                                <ul class="profile-tab nav nav-tabs">
                                    <li class="active"><a href="#activity" data-toggle="tab">Log</a></li>
                                    <li><a href="#friends" data-toggle="tab">Ubah Profil</a></li>
                                </ul>
                                <div class="profile-tab-content tab-content">
                                    <div class="tab-pane fade active in" id="activity">
                                        <div class="stream-list">
                                            <div class="module-body table">
                                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped  display" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Nip</th>
                                                            <th>Aksi</th>
                                                            <th>Waktu</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $caridata = array(
                                                                'NIP' => $nip , 
                                                                );
                                                            $this->db->select('*');
                                                            $this->db->from('log');
                                                            $this->db->where($caridata);
                                                            $this->db->order_by('id', 'desc');
                                                            $query = $this->db->get();
                                                            $result = $query->result();
                                                         ?>
                                                             <?php
                                                                foreach ($result as $row) {        
                                                                echo "
                                                                    <tr>
                                                                        <td>".$row->nip."</td>
                                                                        <td>".$row->aksi."</td>
                                                                        <td>".$row->waktu."</td>
                                                                    </tr>
                                                                ";
                                                            }
                                                             ?>
                                                         
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Nip</th>
                                                            <th>Aksi</th>
                                                            <th>Waktu</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <!--/.module-body table-->
                                        </div>
                                        <!--/.stream-list-->
                                    </div>
                                    <div class="tab-pane fade" id="friends">
                                        <div class="module-body">
                                            <!-- membuka v_23_ubahprofil -->
                                                <?php include('include/v_23_ubahprofil.php') ?>
                                            <!--/.membuka v_23_ubahprofil -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!--/.module-body-->
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->