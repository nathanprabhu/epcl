
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  
  <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
  
  <link rel="stylesheet" type="text/css" href="/css/result-light.css">
  
  <style type='text/css'>
    #result {
    text-align: right;
    color: gray;
    min-height: 2em;
}
#table-sparkline {
    margin: 0 auto;
    border-collapse: collapse;
}
th {
    font-weight: bold;
    text-align: center;
}
td, th {
    padding: 5px;
    border-bottom: 1px solid silver;
    height: 20px;
}

thead th {
    border-top: 2px solid gray;
    border-bottom: 2px solid gray;
}
.highcharts-tooltip>span {
    background: white;
    border: 1px solid silver;
    border-radius: 3px;
    box-shadow: 1px 1px 2px #888;
    padding: 8px;
}
      body, h1, h2, h3, h4, h5 {
  font-family: 'Open Sans', sans-serif;
}
  </style>

<script type='text/javascript'>//<![CDATA[

$(function () {
     Highcharts.SparkLine = function (options, callback) {
        var defaultOptions = {
            chart: {
                renderTo: (options.chart && options.chart.renderTo) || this,
                backgroundColor: null,
                borderWidth: 0,
                type: 'area',
                margin: [2, 0, 2, 0],
                width: 220,
                height: 50,
                style: {
                    overflow: 'visible'
                },
                skipClone: true
            },
            title: {
                text: ''
            },
            credits: {
                enabled: false
            },
            xAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                startOnTick: false,
                endOnTick: false,
                tickPositions: []
            },
            yAxis: {
                endOnTick: false,
                startOnTick: false,
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                tickPositions: [0]
            },
            legend: {
                enabled: false
            },
            tooltip: {
                backgroundColor: null,
                borderWidth: 0,
                shadow: false,
                useHTML: true,
                hideDelay: 0,
                shared: true,
                padding: 0,
                positioner: function (w, h, point) {
                    return { x: point.plotX - w / 2, y: point.plotY - h };
                }
            },
            plotOptions: {
                series: {
                    animation: false,
                    lineWidth: 1,
                    shadow: false,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    marker: {
                        radius: 1,
                        states: {
                            hover: {
                                radius: 2
                            }
                        }
                    },
                    fillOpacity: 0.25
                },
                column: {
                    negativeColor: '#910000',
                    borderColor: 'silver'
                }
            }
        };
        options = Highcharts.merge(defaultOptions, options);

        return new Highcharts.Chart(options, callback);
    };

    var start = +new Date(),
        $tds = $('td[data-sparkline]'),
        fullLen = $tds.length,
        n = 0;
   function doChunk() {
        var time = +new Date(),
            i,
            len = $tds.length,
            $td,
            stringdata,
            arr,
            data,
            chart;

        for (i = 0; i < len; i += 1) {
            $td = $($tds[i]);
            stringdata = $td.data('sparkline');
            arr = stringdata.split('; ');
            data = $.map(arr[0].split(', '), parseFloat);
            chart = {};

            if (arr[1]) {
                chart.type = arr[1];
            }
            $td.highcharts('SparkLine', {
                series: [{
                    data: data,
                    pointStart: 1
                }],
                tooltip: {
                    headerFormat: '<span style="font-size: 10px">' + $td.parent().find('th').html() + ', B{point.x}:</span><br/>',
                    pointFormat: '<b>{point.y}</b> Ans'
                },
                chart: chart
            });

            n += 1;

            // If the process takes too much time, run a timeout to allow interaction with the browser
            if (new Date() - time > 500) {
                $tds.splice(0, i + 1);
                setTimeout(doChunk, 0);
                break;
            }

            
        }
    }
    doChunk();

});
//]]> 

</script>

</head>
<body>
<script src="http://www.prabhunathan.com/hci/highcharts.js"></script>
    <h3>Individual Participant SparkLine Graph</h3>
<div id="result"></div>
<table id="table-sparkline">
    <thead>
        <tr text-align="center">
            <th>Participant ID</th>
            <th>Initial Learning Curve</th>
            <th>Target Learning Curve</th>
            <th>Difference</th>
        </tr>
    </thead>
    <tbody id="tbody-sparkline">
        		<tr>
		    <th>10001</th>
		    <td data-sparkline="1, 3, 2, 3, 5"/>
		    <td data-sparkline="1, 1, 3, 4, 3"/>
		    <td data-sparkline="0, 2, -1, -1, 2 ; column"/>
		</tr>
		<tr>
		    <th>10002</th>
		    <td data-sparkline="0, 3, 1, 3, 4"/>
		    <td data-sparkline="0, 0, 3, 4, 5"/>
		    <td data-sparkline="0, 3, -2, 1, -1 ; column"/>
		</tr>
		<tr>
		    <th>10003</th>
		    <td data-sparkline="3, 4, 2, 3, 5"/>
		    <td data-sparkline="1, 1, 3, 4, 3"/>
		    <td data-sparkline="2, 3, -1, -1, 2 ; column"/>
		</tr>
		<tr>
		    <th>10004</th>
		    <td data-sparkline="1, 3, 2, 3, 5"/>
		    <td data-sparkline="3, 1, 4, 3, 1"/>
		    <td data-sparkline="-2, 2, -2, 0, 4 ; column"/>
		</tr>
		<tr>
		    <th>10005</th>
		    <td data-sparkline="0, 3, 1, 3, 4"/>
		    <td data-sparkline="0, 0, 3, 4, 5"/>
		    <td data-sparkline="0, 3, -2, 1, -1 ; column"/>
		</tr>
	        <tr>
	            <th>20001</th>
	            <td data-sparkline="1, 3, 2, 3, 5"/>
	            <td data-sparkline="1, 1, 3, 4, 3"/>
	            <td data-sparkline="0, 2, -1, -1, 2 ; column"/>
	        </tr>
		<tr>
		    <th>20002</th>
		    <td data-sparkline="0, 3, 1, 3, 4"/>
		    <td data-sparkline="0, 0, 3, 4, 5"/>
		    <td data-sparkline="0, 3, -2, 1, -1 ; column"/>
		</tr>
	        <tr>
		    <th>30001</th>
		    <td data-sparkline="1, 3, 2, 3, 5"/>
		    <td data-sparkline="1, 1, 3, 4, 3"/>
		    <td data-sparkline="0, 2, -1, -1, 2 ; column"/>
       	</tr>
        	<tr>
	            <th>30002</th>
	            <td data-sparkline="1, 3, 2, 3, 5"/>
	            <td data-sparkline="1, 1, 3, 4, 3"/>
	            <td data-sparkline="0, 2, -1, -1, 2 ; column"/>
	        </tr>
	        <tr>
		    <th>30003</th>
		    <td data-sparkline="3, 4, 2, 3, 5"/>
		    <td data-sparkline="1, 1, 3, 4, 3"/>
		    <td data-sparkline="2, 3, -1, -1, 2 ; column"/>
	        </tr>
	        		<tr>
		    <th>30004</th>
		    <td data-sparkline="1, 3, 2, 3, 5"/>
		    <td data-sparkline="3, 1, 4, 3, 1"/>
		    <td data-sparkline="-2, 2, -2, 0, 4 ; column"/>
		</tr>
		<tr>
		    <th>30005</th>
		    <td data-sparkline="0, 3, 1, 3, 4"/>
		    <td data-sparkline="0, 0, 3, 4, 5"/>
		    <td data-sparkline="0, 3, -2, 1, -1 ; column"/>
		</tr>
	        <tr>
	            <th>30006</th>
	            <td data-sparkline="1, 3, 2, 3, 5"/>
	            <td data-sparkline="1, 1, 3, 4, 3"/>
	            <td data-sparkline="0, 2, -1, -1, 2 ; column"/>
	        </tr>
        <tr>
	            <th>30007</th>
	            <td data-sparkline="1, 3, 2, 3, 5"/>
	            <td data-sparkline="1, 1, 3, 4, 3"/>
	            <td data-sparkline="0, 2, -1, -1, 2 ; column"/>
	        </tr>
		<tr>
            <tr>
	            <th>30008</th>
	            <td data-sparkline="1, 3, 2, 3, 5"/>
	            <td data-sparkline="1, 1, 3, 4, 3"/>
	            <td data-sparkline="0, 2, -1, -1, 2 ; column"/>
	        </tr>
        
    </tbody>
</table>
  
</body>

</html>

