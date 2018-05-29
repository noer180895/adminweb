<div class="span9">
    <div class="content">
        <div class="module">
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
        
            <div id="container" style="min-width: 400px;height: 400px; margin: 0 auto"></div>
            <br>
            
            <table id="tengah" border="0" class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Jumlah</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Belum / Tidak Sekolah</td>
                    <td><?php echo $databelumtidaksekolah;?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Belum Tamat SD / Sederajat</td>
                    <td><?php echo $databelumtamatsd;?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Tamat SD / Sederajat</td>
                    <td><?php echo $datatamatsd;?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>SLTP / Sederajat</td>
                    <td><?php echo $datasltp;?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>SLTA / Sederajat</td>
                    <td><?php echo $dataslta;?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Diploma I / II</td>
                    <td><?php echo $datadiplomaiii;?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Akademi / Diploma III / SMUDA</td>
                    <td><?php echo $dataakademi;?></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Diploma IV / STRATA I</td>
                    <td><?php echo $datadiplomav;?></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>STRATA II</td>
                    <td><?php echo $datastrataii;?></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>STRATA III</td>
                    <td><?php echo $datastrataiii;?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
    var chart;
    var belumtidaksekolah=<?php echo $databelumtidaksekolah;?>;
    var belumtamatsd=<?php echo $databelumtamatsd;?>;
    var tamatsd=<?php echo $datatamatsd;?>;
    var sltp=<?php echo $datasltp;?>;
    var slta=<?php echo $dataslta;?>;
    var diplomaiii=<?php echo $datadiplomaiii;?>;
    var akademi=<?php echo $dataakademi;?>;
    var diplomav=<?php echo $datadiplomav;?>;
    var strataii=<?php echo $datastrataii;?>;
    var strataiii=<?php echo $datastrataiii;?>;
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
                text: 'REKAP PENDIDIKAN TERAKHIR',
                x: -20 //center
            },
            subtitle: {
                text: 'SISTEM INFORMASI MANAJEMEN ADMINISTRASI DESA',
                x: -20
            },
            xAxis: { //X axis menampilkan data pendidikan terakhir
                categories: ['Belum Sekolah','Belum Tamat SD','Tamat SD','SLTP','SLTA','Diploma I/II','Diploma III','Diploma IV','STRATA II','STRATA III']
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
                x: -10,
                y: 100,
                borderWidth: 0
            },
  //series adalah data yang akan dibuatkan grafiknya,
     
            series: [{  
                name: 'Belum / Tidak Sekolah',  
         
                data: [belumtidaksekolah,null,null,null,null,null,null,null,null,null]
            },{  
                name: 'Belum Tamat SD / Sederajat',  
         
                data: [null,belumtamatsd,null,null,null,null,null,null,null,null]
            },{  
                name: 'Tamat SD / Sederajat',  
         
                data: [null,null,tamatsd,null,null,null,null,null,null,null]
            },{  
                name: 'SLTP / Sederajat',  
         
                data: [null,null,null,sltp,null,null,null,null,null,null]
            },{  
                name: 'SLTA / Sederajat',  
         
                data: [null,null,null,null,slta,null,null,null,null,null]
            },{  
                name: 'Diploma I / II',  
         
                data: [null,null,null,null,null,diplomaiii,null,null,null,null]
            },{  
                name: 'Akademi / Diploma III / SMUDA',  
         
                data: [null,null,null,null,null,null,akademi,null,null,null]
            },{  
                name: 'Diploma V',  
         
                data: [null,null,null,null,null,null,null,diplomav,null,null]
            },{  
                name: 'STRATA II',  
         
                data: [null,null,null,null,null,null,null,null,strataii,null]
            },{  
                name: 'STRATA III',  
         
                data: [null,null,null,null,null,null,null,null,null,strataiii],

                color: 'purple'
            }
             
            ]
        });
    });
     
});
   
</script>
