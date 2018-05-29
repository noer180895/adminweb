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
                    <th>Golongan Darah</th>
                    <th>Jumlah</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>A</td>
                    <td><?php echo $dataa;?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>A-</td>
                    <td><?php echo $dataamin;?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>A+</td>
                    <td><?php echo $dataaplus;?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>B</td>
                    <td><?php echo $datab;?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>B-</td>
                    <td><?php echo $databmin;?></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>B+</td>
                    <td><?php echo $databplus;?></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>AB</td>
                    <td><?php echo $dataab;?></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>AB-</td>
                    <td><?php echo $dataabmin;?></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>AB+</td>
                    <td><?php echo $dataabplus;?></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>O</td>
                    <td><?php echo $datao;?></td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>O-</td>
                    <td><?php echo $dataomin;?></td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>O+</td>
                    <td><?php echo $dataoplus;?></td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Tidak Tahu</td>
                    <td><?php echo $datatidaktahu;?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
    var chart;
    var a=<?php echo $dataa;?>;
    var amin=<?php echo $dataamin;?>;
    var aplus=<?php echo $dataaplus;?>;
    var b=<?php echo $datab;?>;
    var bmin=<?php echo $databmin;?>;
    var bplus=<?php echo $databplus;?>;
    var ab=<?php echo $dataab;?>;
    var abmin=<?php echo $dataabmin;?>;
    var abplus=<?php echo $dataabplus;?>;
    var o=<?php echo $datao;?>;
    var omin=<?php echo $dataomin;?>;
    var oplus=<?php echo $dataoplus;?>;
    var tidaktahu=<?php echo $datatidaktahu;?>;
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
                text: 'REKAP GOLONGAN DARAH',
                x: -20 //center
            },
            subtitle: {
                text: 'SISTEM INFORMASI MANAJEMEN ADMINISTRASI DESA',
                x: -20
            },
            xAxis: { //X axis menampilkan data golongan darah
                categories: ['A','A-','A+','B','B-','B+','AB','AB-','AB+','O','O-','O+','Tidak Tahu']
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
                name: 'A',  
         
                data: [a,null,null,null,null,null,null,null,null,null,null,null]
            },{  
                name: 'A-',  
         
                data: [null,amin,null,null,null,null,null,null,null,null,null,null,null]
            },{  
                name: 'A+',  
         
                data: [null,null,aplus,null,null,null,null,null,null,null,null,null,null]
            },{  
                name: 'B',  
         
                data: [null,null,null,b,null,null,null,null,null,null,null,null,null]
            },{  
                name: 'B-',  
         
                data: [null,null,null,null,bmin,null,null,null,null,null,null,null,null]
            },{  
                name: 'B+',  
         
                data: [null,null,null,null,null,bplus,null,null,null,null,null,null,null]
            },{  
                name: 'AB',  
         
                data: [null,null,null,null,null,null,ab,null,null,null,null,null,null]
            },{  
                name: 'AB-',  
         
                data: [null,null,null,null,null,null,null,abmin,null,null,null,null,null]
            },{  
                name: 'AB+',  
         
                data: [null,null,null,null,null,null,null,null,abplus,null,null,null,null]
            },{  
                name: 'O',  
         
                data: [null,null,null,null,null,null,null,null,null,o,null,null,null],

                color:'purple'
            },{  
                name: 'O-',  
         
                data: [null,null,null,null,null,null,null,null,null,null,omin,null,null],

                color:'gray'
            },{  
                name: 'O+',  
         
                data: [null,null,null,null,null,null,null,null,null,null,null,oplus,null],

                color:'yellow'
            },{  
                name: 'Tidak Tahu',  
         
                data: [null,null,null,null,null,null,null,null,null,null,null,null,tidaktahu],

                color:'black'
            }
             
            ]
        });
    });
     
});
   
</script>
