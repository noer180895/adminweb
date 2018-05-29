<style type="text/css">
        #tengah th{
            vertical-align: middle;
            text-align: left;
        }
        #tengah td{
            vertical-align: middle;
            text-align: left;
        }
</style>

<div class="span9">
    <div class="content">
        <div class="module">
            <div id="container" style="min-width: 400px;height: 400px; margin: 0 auto"></div>
            <br>
                <table id="tengah" border="0" class="table table-hover">
                
                    <tr>
                        <th>No</th>
                        <th>Nama Surat</th>
                        <th>Jumlah Surat Keluar</th>
                    </tr>
                    <tr>   
                        <?php
                            foreach ($ambiljumlahkelahiran as $rowkelahiran) {
                                
                        ?>
                        <td>1</td>
                        <td><?php echo $rowkelahiran->nama_surat?></td>
                        <td><?php echo $rowkelahiran->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahpindah as $rowpindah) {
                                
                        ?>
                        <td>2</td>
                        <td><?php echo $rowpindah->nama_surat?></td>
                        <td><?php echo $rowpindah->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahdomisili as $rowdomisili) {
                                
                        ?>
                        <td>3</td>
                        <td><?php echo $rowdomisili->nama_surat?></td>
                        <td><?php echo $rowdomisili->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahpembuatanktp as $rowpembuatanktp) {
                                
                        ?>
                        <td>4</td>
                        <td><?php echo $rowpembuatanktp->nama_surat?></td>
                        <td><?php echo $rowpembuatanktp->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahpembuatankk as $rowpembuatankk) {
                                
                        ?>
                        <td>5</td>
                        <td><?php echo $rowpembuatankk->nama_surat?></td>
                        <td><?php echo $rowpembuatankk->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahwali as $rowwali) {
                                
                        ?>
                        <td>6</td>
                        <td><?php echo $rowwali->nama_surat?></td>
                        <td><?php echo $rowwali->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahnikah as $rownikah) {
                                
                        ?>
                        <td>7</td>
                        <td><?php echo $rownikah->nama_surat?></td>
                        <td><?php echo $rownikah->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahskck as $rowskck) {
                                
                        ?>
                        <td>8</td>
                        <td><?php echo $rowskck->nama_surat?></td>
                        <td><?php echo $rowskck->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahtidakmampu as $rowtidakmampu) {
                                
                        ?>
                        <td>9</td>
                        <td><?php echo $rowtidakmampu->nama_surat?></td>
                        <td><?php echo $rowtidakmampu->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahkematian as $rowkematian) {
                                
                        ?>
                        <td>10</td>
                        <td><?php echo $rowkematian->nama_surat?></td>
                        <td><?php echo $rowkematian->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahbelummenikah as $rowbelummenikah) {
                                
                        ?>
                        <td>11</td>
                        <td><?php echo $rowbelummenikah->nama_surat?></td>
                        <td><?php echo $rowbelummenikah->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahasalusul as $rowasalusul) {
                                
                        ?>
                        <td>12</td>
                        <td><?php echo $rowasalusul->nama_surat?></td>
                        <td><?php echo $rowasalusul->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahmempelai as $rowmempelai) {
                                
                        ?>
                        <td>13</td>
                        <td><?php echo $rowmempelai->nama_surat?></td>
                        <td><?php echo $rowmempelai->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahorangtua as $roworangtua) {
                                
                        ?>
                        <td>14</td>
                        <td><?php echo $roworangtua->nama_surat?></td>
                        <td><?php echo $roworangtua->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahdomisiliperusahaan as $rowdomisiliperusahaan) {
                                
                        ?>
                        <td>15</td>
                        <td><?php echo $rowdomisiliperusahaan->nama_surat?></td>
                        <td><?php echo $rowdomisiliperusahaan->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahpermohonankkuntukdinas as $rowpermohonankkuntukdinas) {
                                
                        ?>
                        <td>16</td>
                        <td><?php echo $rowpermohonankkuntukdinas->nama_surat?></td>
                        <td><?php echo $rowpermohonankkuntukdinas->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahpermohonanktpuntukdinas as $rowpermohonanktpuntukdinas) {
                                
                        ?>
                        <td>17</td>
                        <td><?php echo $rowpermohonanktpuntukdinas->nama_surat?></td>
                        <td><?php echo $rowpermohonanktpuntukdinas->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahpermohonanaktakelahiranuntukdinas as $rowpermohonanaktakelahiranuntukdinas) {
                                
                        ?>
                        <td>18</td>
                        <td><?php echo $rowpermohonanaktakelahiranuntukdinas->nama_surat?></td>
                        <td><?php echo $rowpermohonanaktakelahiranuntukdinas->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahwarga as $rowwarga) {
                                
                        ?>
                        <td>19</td>
                        <td><?php echo $rowwarga->nama_surat?></td>
                        <td><?php echo $rowwarga->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahpermohonanimb as $rowpermohonanimb) {
                                
                        ?>
                        <td>20</td>
                        <td><?php echo $rowpermohonanimb->nama_surat?></td>
                        <td><?php echo $rowpermohonanimb->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahtugasdesa as $rowtugasdesa) {
                                
                        ?>
                        <td>21</td>
                        <td><?php echo $rowtugasdesa->nama_surat?></td>
                        <td><?php echo $rowtugasdesa->jumlah_keluar;?></td>
                        
                    </tr>

                    <tr>   
                        <?php
                            foreach ($ambiljumlahpengantarizinkeramaian as $rowpengantarizinkeramaian) {
                                
                        ?>
                        <td>22</td>
                        <td><?php echo $rowpengantarizinkeramaian->nama_surat?></td>
                        <td><?php echo $rowpengantarizinkeramaian->jumlah_keluar;?></td>
                        
                    </tr>
                </table>
        
<?php
}}}}}}}}}}}}}}}}}}}}}}
?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
    var chart;
    var jumlahkelahiran=<?php echo $rowkelahiran->jumlah_keluar;?>;
    var jumlahpindah=<?php echo $rowpindah->jumlah_keluar;?>;
    var jumlahdomisili=<?php echo $rowdomisili->jumlah_keluar;?>;
    var jumlahpembuatanktp=<?php echo $rowpembuatanktp->jumlah_keluar;?>;
    var jumlahpembuatankk=<?php echo $rowpembuatankk->jumlah_keluar;?>;
    var jumlahwali=<?php echo $rowwali->jumlah_keluar;?>;
    var jumlahnikah=<?php echo $rownikah->jumlah_keluar;?>;
    var jumlahskck=<?php echo $rowskck->jumlah_keluar;?>;
    var jumlahtidakmampu=<?php echo $rowtidakmampu->jumlah_keluar;?>;
    var jumlahkematian=<?php echo $rowkematian->jumlah_keluar;?>;
    var jumlahbelummenikah=<?php echo $rowbelummenikah->jumlah_keluar;?>;
    var jumlahasalusul=<?php echo $rowasalusul->jumlah_keluar;?>;
    var jumlahmempelai=<?php echo $rowmempelai->jumlah_keluar;?>;
    var jumlahorangtua=<?php echo $roworangtua->jumlah_keluar;?>;
    var jumlahdomisiliperusahaan=<?php echo $rowdomisiliperusahaan->jumlah_keluar;?>;
    var jumlahpermohonankkuntukdinas=<?php echo $rowpermohonankkuntukdinas->jumlah_keluar;?>;
    var jumlahpermohonanktpuntukdinas=<?php echo $rowpermohonanktpuntukdinas->jumlah_keluar;?>;
    var jumlahaktakelahiranuntukdinas=<?php echo $rowpermohonanaktakelahiranuntukdinas->jumlah_keluar;?>;
    var jumlahwarga=<?php echo $rowwarga->jumlah_keluar;?>;
    var jumlahpermohonanimb=<?php echo $rowpermohonanimb->jumlah_keluar;?>;
    var jumlahtugasdesa=<?php echo $rowtugasdesa->jumlah_keluar;?>;
    var jumlahpengantarizinkeramaian=<?php echo $rowpengantarizinkeramaian->jumlah_keluar;?>;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container', //letakan grafik di div id container
        //Type grafik, anda bisa ganti menjadi area,line,column dan bar
                type: 'column',  
                marginRight: 130,
                marginBottom: 35,
                backgroundColor: {
                    linearGradient: [0, 0, 500, 500],
                    stops: [
                        [0, 'rgb(255, 255, 255)'],
                        [1, 'rgb(240, 240, 255)']
                    ]
                },
                colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', 
             '#FF9655', '#FFF263', '#6AF9C4'],
            },
            title: {
                text: 'REKAP SURAT KELUAR',
                x: -20 //center
            },
            subtitle: {
                text: 'SISTEM INFORMASI MANAJEMEN ADMINISTRASI DESA',
                x: -20
            },
            xAxis: { //X axis menampilkan data jenis kelamin
                categories: ['Data Surat']
            },
            yAxis: {
                title: {  //label yAxis
                    text: 'Jangkauan Jumlah'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080' //warna dari grafik line
                }]
            },
            tooltip: { 
      //fungsi tooltip, ini opsional, kegunaan dari fungsi ini 
      //akan menampikan data di titik tertentu di grafik saat mouseover
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y ;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: 5,
                y: 70,
                borderWidth: 0
            },
  //series adalah data yang akan dibuatkan grafiknya,
     
            series: [{  
                name: 'Surat Keterangan Kelahiran',  
         
                data: [jumlahkelahiran]
            },{
              name: 'Surat Keterangan Pindah',  
         
                data: [jumlahpindah]
            },{
              name: 'Surat Keterangan Domisili',  
         
                data: [jumlahdomisili]
            },{
              name: 'Surat Keterangan Pembuatan KTP',  
         
                data: [jumlahpembuatanktp]
            },{
              name: 'Surat Keterangan Pembuatan KK',  
         
                data: [jumlahpembuatankk]
            },{
              name: 'Surat Keterangan Wali',  
         
                data: [jumlahwali]
            },{
              name: 'Surat Keterangan Nikah',  
         
                data: [jumlahnikah]
            },{
              name: 'Surat Keterangan SKCK',  
         
                data: [jumlahskck]
            },{
              name: 'Surat Keterangan Tidak Mampu',  
         
                data: [jumlahtidakmampu]
            },{
              name: 'Surat Keterangan Kematian',  
         
                data: [jumlahkematian],
                color: '#595a58'
            },{
              name: 'Surat Keterangan Belum Menikah',  
         
                data: [jumlahbelummenikah],
                color: '#e7e963'
            },{
              name: 'Surat Keterangan Asal Usul',  
         
                data: [jumlahasalusul],
                color: '#c758e7'
            },{
              name: 'Surat Keterangan Mempelai',  
         
                data: [jumlahmempelai],
                color: '#f777ec'
            },{
              name: 'Surat Keterangan tentang Orang Tua',  
         
                data: [jumlahorangtua],
                color: '#5571e7'
            },{
              name: 'Surat Keterangan Domisili Perusahaan',  
         
                data: [jumlahdomisiliperusahaan],
                color: '#b5b5b5'
            },{
              name: 'Surat Permohonan KK untuk Dinas',  
         
                data: [jumlahpermohonankkuntukdinas],
                color: '#e90202'
            },{
              name: 'Surat Permohonan KTP untuk Dinas',  
         
                data: [jumlahpermohonanktpuntukdinas],
                color: '#fa7171'
            },{
              name: 'Surat Permohonan Akta Kelahiran Dinas',  
         
                data: [jumlahaktakelahiranuntukdinas],
                color: '#face71'
            },{
              name: 'Surat Keterangan Warga',  
         
                data: [jumlahwarga],
                color: '#d5fa71'
            },{
              name: 'Surat Keterangan Permohonan IMB',  
         
                data: [jumlahpermohonanimb],
                color: '#71fa8b'
            },{
              name: 'Surat Perintah Tugas',  
         
                data: [jumlahtugasdesa],
                color: '#71faf2'
            },{
              name: 'Surat Pengantar Izin Keramaian',  
         
                data: [jumlahpengantarizinkeramaian],
                color: '#718bfa'
            }
             
            ]
        });
    });
     
});
   
</script>
