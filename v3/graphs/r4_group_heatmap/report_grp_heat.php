
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  
  
  
  <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
  
  <style type='text/css'>
    .chart {
    min-width: 320px;
    max-width: 800px;
    height: 220px;
    margin: 0 auto;

}
body {
  font-family: 'Open Sans', sans-serif;
  font-size:10px;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
  </style>

</head>
<body>
<h2>Select Group ID</h2>
<div id="container"></div>
  <SELECT NAME="options" ONCHANGE="document.getElementById('youriframe').src = this.options[this.selectedIndex].value">
<option value="">--Select Group ID--</option>  
<option value="../../graphs/r4_group_heatmap/grp_heatmap_100xx.php">100xx - Group Heatmap</option>
<option value="../../graphs/r4_group_heatmap/grp_heatmap_200xx.php">200xx - Group Heatmap</option></select>
<div>
<iframe src="" width=960px height="960" frameborder=0 scrolling=no id="youriframe"></iframe>
</div>

</body>

</html>

