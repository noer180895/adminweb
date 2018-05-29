<?php
$protocol = "http://";
$host = $_SERVER['HTTP_HOST'];
$url = "/desa/promodes/beckend";
$server = $protocol.$host.$url;
$server2 = $protocol.$host."/desa/promodes";
?>
<div class="span3">
    <div class="sidebar">
        <ul class="widget widget-menu unstyled">
            <li>
                <a class="collapsed" data-toggle="collapse" href="#togglePages">
                    <i class="menu-icon icon-cog"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right"></i>
                    Data Sumber Daya Alam 
                </a>
                <ul id="togglePages" class="collapse unstyled">
                    <a class="collapsed" data-toggle="collapse" href="#PertanianPerkebunanKehutanan">
                        <i class="menu-icon "></i>
                        <i class="icon-chevron-down pull-right"></i>
                        Pertanian Perkebunan Dan Kehutanan
                    </a>
                    <ul id="PertanianPerkebunanKehutanan" class="collapse unstyled">
                        <li><a Href='<?php echo $server; ?>/psda/pertanian_perkebunan_kehutanan/kepemilikan_lahan/'>Kepemilikan Lahan</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/pertanian_perkebunan_kehutanan/produktivitas_pertanian/'>Luas Lahan Dan Produktivitas Pertanian</a><li>
                        <li><a Href='<?php echo $server; ?>/psda/pertanian_perkebunan_kehutanan/hasil_perkebunan/'>Luas Dan Hasil Perkebunan</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/pertanian_perkebunan_kehutanan/hasil_hutan/'>Hasil Hutan</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/pertanian_perkebunan_kehutanan/kondisi_hutan/'>Kondisi Hutan</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/pertanian_perkebunan_kehutanan/dampak_pengolahan/'>Dampak Yang Timbul Dari Pengolahan Hutan</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/pertanian_perkebunan_kehutanan/mekanisme/'>Mekanisme Pemasaran</a></li>
                    </ul>
                    <!-- #Pertanian perkebunan kehutanan -->

                    <a class="collapsed" data-toggle="collapse" href="#PeternakandanPerikanan">
                        <i class="menu-icon "></i>
                        <i class="icon-chevron-down pull-right"></i>
                        Peternakan dan Perikanan
                    </a>
                    <ul id="PeternakandanPerikanan" class="collapse unstyled">
                        <li><a Href='<?php echo $server; ?>/psda/peternakan_perikanan/populasi_ternak/'>Jenis Dan Populasi Ternak</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/peternakan_perikanan/produksi_ternak/'>Produksi Peternakan</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/peternakan_perikanan/pakan_ternak/'>Ketersediaan Hijauan Pakan Ternak</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/peternakan_perikanan/hasil_ternak/'>Pemilik Usaha Pengolahan Hasil Ternak</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/peternakan_perikanan/pemeliharaan_ternak/'>Ketersediaan Lahan Pemeliharaan Ternak</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/peternakan_perikanan/alat_produksi/'>Jenis Dan Alat Produksi Budidaya Ikan Laut Dan Payau</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/peternakan_perikanan/sarana_produksi/'>Jenis Dan Sarana Produksi Budidaya Ikan Air Tawar</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/peternakan_perikanan/jenis_ikan/'>Jenis Ikan Dan Produksi</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/peternakan_perikanan/mekanisme/'>Mekanisme Pemasaran</a></li>
                    </ul>
                    <!-- #Peternakan dan Perikanan -->

                    <a class="collapsed" data-toggle="collapse" href="#BahanGalian">
                        <i class="menu-icon "></i>
                        <i class="icon-chevron-down pull-right"></i>
                        Bahan Galian
                    </a>
                    <ul id="BahanGalian" class="collapse unstyled">
                        <li><a Href='<?php echo $server; ?>/psda/bahan_galian/jenis_bahan/'>Jenis Bahan Galian</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/bahan_galian/pemasaran_galian/'>Pemasaran Hasil Galian</a></li>
                    </ul>
                    <!-- #Bahan Galian -->

                    <a class="collapsed" data-toggle="collapse" href="#SumberDayaAlam">
                        <i class="menu-icon "></i>
                        <i class="icon-chevron-down pull-right"></i>
                        Sumber Daya Alam
                    </a>
                    <ul id="SumberDayaAlam" class="collapse unstyled">
                        <li><a Href='<?php echo $server; ?>/psda/sumber_daya_air/potensi_air/'>Potensi Air Dan Sumber Daya Air</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/sumber_daya_air/sumber_air/'>Sumber Air Bersih Dan Kualitas Air Minum</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/sumber_daya_air/sungai_rawa/'>Sungai Dan Rawa</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/sumber_daya_air/pemanfaatan/'>Pemanfaatan Dan Kondisi Danau/Waduk/Situ</a></li>
                        <li><a Href='<?php echo $server; ?>/psda/sumber_daya_air/air_panas/'>Air Panas</a></li>
                    </ul>
                    <!-- #Sumber Daya Alam -->

                    <li><a Href='<?php echo $server; ?>/psda/lain-lain/kebisingan/'>Kebisingan</a></li>
                    <li><a Href='<?php echo $server; ?>/psda/lain-lain/ruang_publik_taman/'>Ruang Publik/taman</a></li>
                    <li><a Href='<?php echo $server; ?>/psda/lain-lain/potensi_wisata/'>Potensi Wisata</a></li>
                    <li><a Href='<?php echo $server; ?>/psda/lain-lain/kualitas_udara/'>Kualitas Udara</a></li>
                </ul>
            </li>
        </ul>
        <ul class="widget widget-menu unstyled">
            <li><a class="collapsed" data-toggle="collapse" href="#PSDM"><i class="menu-icon icon-cog">
            </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
            </i>Data Kependudukan </a>
                <ul id="PSDM" class="collapse unstyled">
                    <li><a Href='<?php echo $server; ?>/psdm/lain-lain/kepadatan/'>Kepadatan</a></li>
                    <li><a Href='<?php echo $server; ?>/psdm/lain-lain/perkembangan_usia/'>Perkembangan Usia</a></li>
                    <li><a Href='<?php echo $server; ?>/psdm/lain-lain/tingkat_pendidikan/'>Tingkat Pendidikan</a></li>
                    <li><a Href='<?php echo $server; ?>/psdm/lain-lain/mata_pencarian/'>Mata Pencarian Pokok</a></li>
                    <li><a Href='<?php echo $server; ?>/psdm/lain-lain/aliran_kepercayaan/'>Agama/Aliran Kepercayaan</a></li>
                    <li><a Href='<?php echo $server; ?>/psdm/lain-lain/kewarganegaraan/'>Kewarganegaraan</a></li>
                    <li><a Href='<?php echo $server; ?>/psdm/lain-lain/etnis/'>Etnis</a></li>
                    <li><a Href='<?php echo $server; ?>/psdm/lain-lain/cacat_mental/'>Cacat Mental Dan Fisik</a></li>
                    <li><a Href='<?php echo $server; ?>/psdm/lain-lain/tenaga_kerja/'>Tenaga Kerja</a></li>
                    <li><a Href='<?php echo $server; ?>/psdm/lain-lain/kualitas_angker/'>Kualitas Angkatan Kerja</a></li>
                </ul>
            </li>
        </ul>

        <ul class="widget widget-menu unstyled">
            <li>
                <a class="collapsed" data-toggle="collapse" href="#PSdP">
                    <i class="menu-icon icon-cog"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right"></i>
                    Data Sarana dan Prasarana
                </a>
                <ul id="PSdP" class="collapse unstyled">
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/sarpras_pemerintah/desa/'>Pemerintahan Desa/Kelurahan</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/sarpras_pemerintah/badan/'>Badan Pemasyarakatan Desa</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/sarpras_pemerintah/dusun/'>Dusun/Lingkungan  Atau Sebutan Lain</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/lain-lain/sarpras_lembaga/'>Lembaga Kemasyarakatan Desa/Kelurahan</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/lain-lain/sarpras_kesehatan/'>Kesehatan</a></li>
                    <a class="collapsed" data-toggle="collapse" href="#Transportasi">
                        <i class="menu-icon "></i>
                        <i class="icon-chevron-down pull-right"></i>
                        Transportasi
                    </a>
                    <ul id="Transportasi" class="collapse unstyled">
                        <li><a Href='<?php echo $server; ?>/potensi_sarpras/sarpras_transportasi/prasarana_darat/'>Prasarana Transportasi Darat</a></li>
                        <li><a Href='<?php echo $server; ?>/potensi_sarpras/sarpras_transportasi/sarana_darat/'>Sarana Transportasi Darat</a></li>
                        <li><a Href='<?php echo $server; ?>/potensi_sarpras/sarpras_transportasi/sarpras_laut/'>Transportasi Laut/Sungai</a></li>
                        <li><a Href='<?php echo $server; ?>/potensi_sarpras/sarpras_transportasi/prasarana_udara/'>Prasarana Transportasi Udara</a></li>
                    </ul>
                    <!-- #Transportasi -->

                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/lain-lain/sarpras_kebersihan/'>Kebersihan</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/lain-lain/sarpras_pendidikan/'>Pendidikan</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/lain-lain/prasarana_kominfo/'>Prasarana Komunikasi Dan Informasi</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/lain-lain/prasarana_air/'>Prasarana Air Bersih Dan Sanitasi</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/lain-lain/prasarana_irigasi/'>Prasarana Dan Kondisi Irigasi</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/lain-lain/prasarana_peribadatan/'>Prasarana Peribadatan</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/lain-lain/prasarana_olga/'>Prasarana Olah Raga</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/lain-lain/prasarana_energi/'>Prasarana Energi Dan Penerangan</a></li>
                    <li><a Href='<?php echo $server; ?>/potensi_sarpras/lain-lain/prasarana_hiburan/'>Prasarana Hiburan Dan Wisata</a></li>
                </ul>
            </li>
        </ul>

        <ul class="widget widget-menu unstyled">
            <li>
                <a class="collapsed" data-toggle="collapse" href="#LembagaEkonomi">
                    <i class="menu-icon icon-cog"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right"></i>
                    Data Lembaga Ekonomi
                </a>
                <ul id="LembagaEkonomi" class="collapse unstyled">
                    <li><a Href='<?php echo $server; ?>/lembaga_ekonomi/lain-lain/lembaga_ekonomi/'>Lembaga Ekonomi</a></li>
                    <li><a Href='<?php echo $server; ?>/lembaga_ekonomi/lain-lain/jasa_pengangkutan/'>Usaha Jasa Pengangkutan</a></li>
                    <li><a Href='<?php echo $server; ?>/lembaga_ekonomi/lain-lain/jasa_hiburan/'>Usaha Jasa Hiburan</a></li>
                    <li><a Href='<?php echo $server; ?>/lembaga_ekonomi/lain-lain/jasa_perdagangan/'>Usaha Jasa Dan Perdagangan</a></li>
                    <li><a Href='<?php echo $server; ?>/lembaga_ekonomi/lain-lain/jasa_gas/'>Usaha Jasa Gas, Listrik, Bbm Dan Air</a></li>
                    <li><a Href='<?php echo $server; ?>/lembaga_ekonomi/lain-lain/jasa_keterampilan/'>Usaha Jasa Keterampilan</a></li>
                    <li><a Href='<?php echo $server; ?>/lembaga_ekonomi/lain-lain/jasa_hukum/'>Usaha Jasa Hukum Dan Konsultasi</a></li>
                    <li><a Href='<?php echo $server; ?>/lembaga_ekonomi/lain-lain/jasa_penginapan/'>Usaha Jasa Penginapan</a></li>
                </ul>
            </li>
        </ul>

        <ul class="widget widget-menu unstyled">
            <li>
                <a class="collapsed" data-toggle="collapse" href="#MonoGrafiDesa">
                    <i class="menu-icon icon-cog"></i>
                    <i class="icon-chevron-down pull-right"></i>
                    <i class="icon-chevron-up pull-right"></i>
                    Data Monografi Desa
                </a>
                <ul id="MonoGrafiDesa" class="collapse unstyled">
                    <li><a href='<?php echo $server; ?>/monografi/lain-lain/data_dasar/'>Data Dasar</a></li>
                    <li><a href='<?php echo $server; ?>/monografi/lain-lain/data_umum/'>Data Umum</a></li>
                    <li><a href='<?php echo $server; ?>/monografi/lain-lain/data_personil/'>Data Personil</a></li>
                    <li><a href='<?php echo $server; ?>/monografi/lain-lain/data_kewenangan/'>Data Kewenangan</a></li>
                    <li><a href='<?php echo $server; ?>/monografi/lain-lain/data_keuangan/'>Data Keuangan</a></li>
                    <li><a href='<?php echo $server; ?>/monografi/lain-lain/data_kelembagaan/'>Data Kelembagaan</a></li>
                    <li><a href='<?php echo $server; ?>/monografi/lain-lain/data_trantib/'>Data Trantib dan Bencana</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--/.sidebar-->
    </div>
    <!--/.span3-->