
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 
  
  
  <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
  
  
  
  
  <link rel="stylesheet" type="text/css" href="/css/result-light.css">
  
  <style type='text/css'>
    .highcharts-tooltip h3 {
    margin: 0.3em 0;
}
      body, h1, h2, h3, h4, h5 {
  font-family: 'Open Sans', sans-serif;
}
  </style>
  



<script type='text/javascript'>//<![CDATA[

$(function () {
    $('#container').highcharts({

        chart: {
            type: 'bubble',
            plotBorderWidth: 1,
            zoomType: 'xy'
        },

        legend: {
            enabled: false
        },

                xAxis: {
            gridLineWidth: 1,
            title: {
                text: 'Blocks'
            },
            labels: {
                format: '{value}'
            },
            plotLines: [{
                color: 'black',
                dashStyle: 'dot',
                width: 2,
                value: 85,
                label: {
                    align: 'middle',
                    rotation: 0,
                    y: 15,
                    style: {
                        fontStyle: 'italic'
                    },
                    text: 'Target Learning'
                },
                zIndex: 3
            }]
        },

        yAxis: {
            startOnTick: false,
            endOnTick: false,
            title: {
                text: 'Positive Answers for Conception'
            },
            labels: {
                format: '{value}'
            },
            maxPadding: 0.2,
            plotLines: [{
                color: 'black',
                dashStyle: 'dot',
                width: 2,
                value: 50,
                label: {
                    align: 'right',
                    style: {
                        fontStyle: 'italic'
                    },
                    text: 'Initial Conception ',
                    x: -10
                },
                zIndex: 3
            }]
        },

        tooltip: {
            useHTML: true,
            headerFormat: '<table>',
            pointFormat: '<tr><th colspan="2"><h3>{point.country}</h3></th></tr>' +
                '<tr><th>Avg:</th><td>{point.x}</td></tr>' +
                '<tr><th>Attempts:</th><td>{point.z}</td></tr>',
                footerFormat: '</table>',
            followPointer: true
        },

        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },

        series: [{
            data: [
                { x: 1, y: 8, z: 15, name: 'UG1', country: 'User Group 1' },
                { x: 2, y: 6, z: 15, name: 'UG1', country: 'User Group 1' },
                { x: 3, y: 8, z: 15, name: 'UG1', country: 'User Group 1' },
                { x: 4, y: 6, z: 15, name: 'UG1', country: 'User Group 1' },
                { x: 5, y: 5, z: 15, name: 'UG2', country: 'User Group 2' },
                { x: 6, y: 4, z: 15, name: 'UG2', country: 'User Group 2' },
                { x: 7, y: 8, z: 15, name: 'UG2', country: 'User Group 2' },
                { x: 8, y: 6, z: 15, name: 'UG2', country: 'User Group 2' },
                { x: 9, y: 4, z: 15, name: 'UG3', country: 'User Group 3' },
                { x: 10, y: 5, z: 15, name: 'UG3', country: 'User Group 3' },
                { x: 11, y: 8, z: 14, name: 'UG3', country: 'User Group 3' },
                { x: 12, y: 6, z: 15, name: 'UG3', country: 'User Group 3' },
                { x: 13, y: 5, z: 15, name: 'UG4', country: 'User Group 4' },
                { x: 14, y: 4, z: 14, name: 'UG4', country: 'User Group 4' },
                { x: 15, y: 8, z: 15, name: 'UG4', country: 'User Group 4' },
                { x: 16, y: 6, z: 16, name: 'UG4', country: 'User Group 4' }
            ]
        }]

    });
});
//]]> 

</script>

</head>
<body>
  <script src="http://www.prabhunathan.com/hci/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<h3>Experiment Group Conception Learning</h3>
<div id="container" style="height: 400px; min-width: 310px; max-width: 600px; margin: 0 auto"></div>
  
</body>

</html>

