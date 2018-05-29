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
                    <th>Hubungan Keluarga</th>
                    <th>Jumlah</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Kepala Keluarga</td>
                    <td><?php echo $datakepalakeluarga;?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Suami</td>
                    <td><?php echo $datasuami;?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Istri</td>
                    <td><?php echo $dataistri;?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Anak</td>
                    <td><?php echo $dataanak;?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Menantu</td>
                    <td><?php echo $datamenantu;?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Cucu</td>
                    <td><?php echo $datacucu;?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Orang Tua</td>
                    <td><?php echo $dataorangtua;?></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Mertua</td>
                    <td><?php echo $datamertua;?></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Pembantu</td>
                    <td><?php echo $datapembantu;?></td>
                </tr>
                <tr>
                    <td>10</td>
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
    var kepalakeluarga=<?php echo $datakepalakeluarga;?>;
    var suami=<?php echo $datasuami;?>;
    var istri=<?php echo $dataistri;?>;
    var anak=<?php echo $dataanak;?>;
    var menantu=<?php echo $datamenantu;?>;
    var cucu=<?php echo $datacucu;?>;
    var orangtua=<?php echo $dataorangtua;?>;
    var mertua=<?php echo $datamertua;?>;
    var pembantu=<?php echo $datapembantu;?>;
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
                text: 'REKAP HUBUNGAN KELUARGA',
                x: -20 //center
            },
            subtitle: {
                text: 'SISTEM INFORMASI MANAJEMEN ADMINISTRASI DESA',
                x: -20
            },
            xAxis: { //X axis menampilkan data hubunga keluarga
                categories: ['Kepala Keluarga','Suami','Istri','Anak','Menantu','Cucu','Orang Tua','Mertua','Pembantu','Lainnya',]
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
                name: 'Kepala Keluarga',  
         
                data: [kepalakeluarga,null,null,null,null,null,null,null,null,null]
            },{  
                name: 'Suami',  
         
                data: [null,suami,null,null,null,null,null,null,null,null]
            },{  
                name: 'Istri',  
         
                data: [null,null,istri,null,null,null,null,null,null,null]
            },{  
                name: 'Anak',  
         
                data: [null,null,null,anak,null,null,null,null,null,null]
            },{  
                name: 'Menantu',  
         
                data: [null,null,null,null,menantu,null,null,null,null,null]
            },{  
                name: 'Cucu',  
         
                data: [null,null,null,null,null,cucu,null,null,null,null]
            },{  
                name: 'Orang Tua',  
         
                data: [null,null,null,null,null,null,orangtua,null,null,null]
            },{  
                name: 'Mertua',  
         
                data: [null,null,null,null,null,null,null,mertua,null,null]
            },{  
                name: 'Pembantu',  
         
                data: [null,null,null,null,null,null,null,null,pembantu,null]
            },{  
                name: 'Lainnya',  
         
                data: [null,null,null,null,null,null,null,null,null,lainnya],

                color: 'purple'
            }
             
            ]
        });
    });
     
});
   
</script>
