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
                    <th>Pekerjaan</th>
                    <th>Jumlah</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Belum / Tidak Bekerja</td>
                    <td><?php echo $databelumtidakbekerja;?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mengurus Rumah Tangga</td>
                    <td><?php echo $datamengurusrt;?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Pelajar</td>
                    <td><?php echo $datapelajar;?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Pensiunan</td>
                    <td><?php echo $datapensiunan;?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Bekerja</td>
                    <td><?php echo $databekerja;?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Lainnya</td>
                    <td><?php echo $datalainnya;?></td>
                </tr>
                
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
    var chart;
    var belumtidakbekerja=<?php echo $databelumtidakbekerja;?>;
    var mengurusrt=<?php echo $datamengurusrt;?>;
    var pelajar=<?php echo $datapelajar;?>;
    var pensiunan=<?php echo $datapensiunan;?>;
    var bekerja=<?php echo $databekerja;?>;
    var lainnya=<?php echo $datalainnya;?>;
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
                text: 'REKAP PEKERJAAN',
                x: -20 //center
            },
            subtitle: {
                text: 'SISTEM INFORMASI MANAJEMEN ADMINISTRASI DESA',
                x: -20
            },
            xAxis: { //X axis menampilkan data pekerjaan
                categories: ['Belum Bekerja','Mengurus Rumah Tangga','Pelajar','Pensiunan','Bekerja','Lainnya']
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
                borderWidth: 0,
                floating:true
            },
  //series adalah data yang akan dibuatkan grafiknya,
     
            series: [{  
                name: 'Belum / Tidak Bekerja',  
         
                data: [belumtidakbekerja,null,null,null,null,null]
            },{  
                name: 'Mengurus Rumah Tangga',  
         
                data: [null,mengurusrt,null,null,null,null,]
            },{  
                name: 'Pelajar',  
         
                data: [null,null,pelajar,null,null,null,]
            },{  
                name: 'Pensiunan',  
         
                data: [null,null,null,pensiunan,null,null,]
            },{  
                name: 'Bekerja',  
         
                data: [null,null,null,null,bekerja,null]
            },{  
                name: 'Lainnya',  
         
                data: [null,null,null,null,null,lainnya]
            }
             
            ]
        });
    });
     
});
   
</script>
