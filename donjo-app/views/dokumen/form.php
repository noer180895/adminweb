<style type="text/css">
  #form_dokumen th {
    width: 1%;
    white-space: nowrap;
  }
</style>
<div id="pageC">
	<table class="inner">
	<tr style="vertical-align:top">
		<td style="background:#fff;padding:0px;">

<div class="content-header">
    <h3>Form Manajemen Dokumen</h3>
</div>
<div id="contentpane">
    <form id="validasi" action="<?php echo $form_action?>" method="POST" enctype="multipart/form-data">
    <div class="ui-layout-center" id="maincontent" style="padding: 5px;">
        <table id="form_dokumen" class="form">
            <tr>
              <th>Judul / Tentang</th>
              <td><input name="nama" type="text" class="inputbox" size="100" value="<?php echo $dokumen['nama']?>"/></td>
            </tr>


      			<?php if($dokumen['satuan']){?>
              <tr>
                <th class="top">Dokumen</th>
                <td>
          				<div class="slidebox-avatar">
          					<img src="<?php echo base_url().LOKASI_DOKUMEN.$dokumen['satuan']?>" width="300px" alt="<?php echo $dokumen['satuan']?>"/>
          				</div>
        				</td>
        				<input type="hidden" name="old_file" value="<?php echo $dokumen['satuan']?>">
              </tr>
      			<?php }?>
            <tr>
                <th>Unggah Dokumen</th>
                <td><input type="file" name="satuan" /> <span style="color: #aaa;">(Kosongkan jika tidak ingin mengubah dokumen)</span></td>
            </tr>
            <input name="kategori" type="hidden" value="<?php echo $kat;?>">
            <?php
              if($kat == 1)
                include ("donjo-app/views/dokumen/_sk_kades.php");
              elseif($kat == 2)
                include("donjo-app/views/dokumen/_formInventaris.php");
              elseif($kat == 3)
                include ("donjo-app/views/dokumen/_perdes.php");
              elseif($kat == 4)
                include ("donjo-app/views/dokumen/_formAparatpemerintahanDesa.php");
				elseif($kat == 5)
                include ("donjo-app/views/dokumen/_formagenda.php");
              elseif($kat == 6)
                include ("donjo-app/views/dokumen/_formEkspedisi.php");
				elseif($kat == 7)
                include ("donjo-app/views/dokumen/_formlembaranBeritaDesa.php");
              elseif($kat == 8)
                include ("donjo-app/views/dokumen/_formBukutamubpd.php");
              elseif($kat == 9)
                include ("donjo-app/views/dokumen/_formDaftarhadirrapat_bpd.php");
              elseif($kat == 10)
                include ("donjo-app/views/dokumen/_formDataanggotabpd.php");
              elseif($kat == 11)
                include ("donjo-app/views/dokumen/_formDataaspirasimasyarakat.php");
              elseif($kat == 12)
                include ("donjo-app/views/dokumen/_formDatakegiatanbpd.php");
              elseif($kat == 13)
                include ("donjo-app/views/dokumen/_formDatanotulenrapat_bpd.php");
              elseif($kat == 14)
                include ("donjo-app/views/dokumen/_formDataperaturankeputusan_BPD.php");
              elseif($kat == 15)
                include ("donjo-app/views/dokumen/_formDatatanahdidesa.php");
              elseif($kat == 16)
                include ("donjo-app/views/dokumen/_formInventarishasilpembangunan.php");
              elseif($kat == 17)
                include ("donjo-app/views/dokumen/_formKaderpemberdayaanmasyarakat.php");
              elseif($kat == 18)
                include ("donjo-app/views/dokumen/_formKeputusankepaladesa.php");
              elseif($kat == 19)
                include ("donjo-app/views/dokumen/_formKeputusanmusyawarahdesa.php");
              elseif($kat == 20)
                include ("donjo-app/views/dokumen/_formKeputusanmusyawarahperencanaanpembangunandesa.php");
              elseif($kat == 21)
                include ("donjo-app/views/dokumen/_formLaporankeuanganBPD.php");
              elseif($kat == 22)
                include ("donjo-app/views/dokumen/_formperaturandidesa.php");
              elseif($kat == 23)
                include ("donjo-app/views/dokumen/_formDataInventarisBpd.php");
              elseif($kat == 24)
                include ("donjo-app/views/dokumen/_formIndukPenduduk.php");
              elseif($kat == 25)
                include ("donjo-app/views/dokumen/_formMutasiPenduduk.php");
               elseif($kat == 26)
                include ("donjo-app/views/dokumen/_formRekapitulasiPenduduk.php");
              elseif($kat == 27)
                include ("donjo-app/views/dokumen/_formPendudukSementara.php");
              elseif($kat == 28)
                include ("donjo-app/views/dokumen/_formKartuTandaPendudukdanKeluarga.php");
              elseif($kat == 29)
                include ("donjo-app/views/dokumen/_formAnggaranPendapatanBelanja.php");
				      elseif($kat == 28)
                include ("donjo-app/views/dokumen/_formKartuTandaPendudukdanKeluarga.php");
              elseif($kat == 29)
                include ("donjo-app/views/dokumen/_formAnggaranPendapatamBelanja.php");
               elseif($kat == 30)
                include ("donjo-app/views/dokumen/_formRencanaAnggaranBiaya.php");
               elseif($kat == 31)
                include ("donjo-app/views/dokumen/_formKasPembantuKegiatan.php");
              elseif($kat == 32)
                include ("donjo-app/views/dokumen/_formBukuKasUmum.php");
              elseif($kat == 33)
                include ("donjo-app/views/dokumen/_formBankDesa.php");
              elseif($kat == 34)
                include ("donjo-app/views/dokumen/_formRencanaKerjaPembangunan.php");
              elseif($kat == 35)
                include ("donjo-app/views/dokumen/_formKegiatanPembangunan.php");
              elseif($kat == 36)
                include ("donjo-app/views/dokumen/_formAgendaSuratKeluar.php");
              elseif($kat == 37)
                include ("donjo-app/views/dokumen/_formAgendaSuratMasuk.php");
                elseif($kat == 36)
                include ("donjo-app/views/dokumen/_formAgendaSuratKeluar.php");
                elseif($kat == 37)
                include ("donjo-app/views/dokumen/_formAgendaSuratMasuk.php");
            ?>
        </table>
    </div>

    <div class="ui-layout-south panel bottom">
        <div class="left">
            <a href="<?php echo site_url().$this->controller.'/index/'.$kat?>" class="uibutton icon prev">Kembali</a>
        </div>
        <div class="right">
            <div class="uibutton-group">
                <button class="uibutton" type="reset"><span class="fa fa-refresh"></span> Bersihkan</button>
                <button class="uibutton confirm" type="submit" ><span class="fa fa-save"></span> Simpan</button>
            </div>
        </div>
    </div> </form>
</div>
</td></tr></table>
</div>
