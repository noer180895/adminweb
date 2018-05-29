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
                    <th>Status Perkawinan</th>
                    <th>Jumlah</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Belum Menikah</td>
                    <td><?php echo $databelummenikah;?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Menikah</td>
                    <td><?php echo $datamenikah;?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Cerai Hidup</td>
                    <td><?php echo $dataceraihidup;?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Cerai Mati</td>
                    <td><?php echo $dataceraimati;?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
    var chart;
    var belummenikah=<?php echo $databelummenikah;?>;
    var menikah=<?php echo $datamenikah;?>;
    var ceraihidup=<?php echo $dataceraihidup;?>;
    var ceraimati=<?php echo $dataceraimati;?>;
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
                text: 'REKAP STATUS PERKAWINAN',
                x: -20 //center
            },
            subtitle: {
                text: 'SISTEM INFORMASI MANAJEMEN ADMINISTRASI DESA',
                x: -20
            },
            xAxis: { //X axis menampilkan data status perkawinan
                categories: ['Belum Menikah','Menikah','Cerai Hidup','Cerai Mati']
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
                name: 'Belum Menikah',  
         
                data: [belummenikah,null,null,null,]
            },{  
                name: 'Menikah',  
         
                data: [null,menikah,null,null,]
            },{  
                name: 'Cerai Hidup',  
         
                data: [null,null,ceraihidup,null,]
            },{  
                name: 'Cerai Mati',  
         
                data: [null,null,null,ceraimati]
            }
             
            ]
        });
    });
     
});
   
</script>
