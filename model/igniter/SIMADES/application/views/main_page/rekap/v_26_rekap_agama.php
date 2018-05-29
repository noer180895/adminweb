
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
                    <th>Agama</th>
                    <th>Jumlah</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Islam</td>
                    <td><?php echo $dataislam;?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Protestan</td>
                    <td><?php echo $dataprotestan;?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Khatolik</td>
                    <td><?php echo $datakhatolik;?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Hindu</td>
                    <td><?php echo $datahindu;?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Buddha</td>
                    <td><?php echo $databuddha;?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Khonghucu</td>
                    <td><?php echo $datakhonghucu;?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Tidak Beragama</td>
                    <td><?php echo $datatidakberagama;?></td>
                </tr>
                <tr>
                    <td>8</td>
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
    var islam=<?php echo $dataislam;?>;
    var protestan=<?php echo $dataprotestan;?>;
    var khatolik=<?php echo $datakhatolik;?>;
    var hindu=<?php echo $datahindu;?>;
    var buddha=<?php echo $databuddha;?>;
    var khonghucu=<?php echo $datakhonghucu;?>;
    var tidakberagama=<?php echo $datatidakberagama;?>;
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
                text: 'REKAP AGAMA',
                x: -20 //center
            },
            subtitle: {
                text: 'SISTEM INFORMASI MANAJEMEN ADMINISTRASI DESA',
                x: -20
            },
            xAxis: { //X axis menampilkan data agama
                categories: ['Islam','Protestan','Khatolik','Hindu','Buddha','Khonghucu','Tidak Beragama','Lainnya'],
                labels : {
                    rotation: 0,
                    align: 'right',
                style : {
                    fontFamily : 'Verdana, sans-serif'
                }
                }

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
                y: 150,
                borderWidth: 0
            },
  //series adalah data yang akan dibuatkan grafiknya,
            
            series: [{  
                name: 'islam',
         
                data: [islam,null,null,null,null,null,null,null]
            },{  
                name: 'protestan',
         
                data: [null,protestan,null,null,null,null,null,null]
            },{  
                name: 'khatolik',
         
                data: [null,null,khatolik,null,null,null,null,null]
            },{  
                name: 'hindu',
         
                data: [null,null,null,hindu,null,null,null,null]
            },{  
                name: 'buddha',
         
                data: [null,null,null,null,buddha,null,null,null]
            },{  
                name: 'khonghucu',
         
                data: [null,null,null,null,null,khonghucu,null,null]
            },{  
                name: 'tidak beragama',
         
                data: [null,null,null,null,null,null,tidakberagama,null]
            },{  
                name: 'lainnya',
         
                data: [null,null,null,null,null,null,null,lainnya]
            }
             
            ]
        });
    });
     
});
   
</script>

