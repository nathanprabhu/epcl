
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
  font: 10px sans-serif;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
  </style>

</head>
<body>
<h2>Select Participant ID</h2>
<div id="container"></div>
  <SELECT NAME="options" ONCHANGE="document.getElementById('youriframe').src = this.options[this.selectedIndex].value">
<option value="">--Select User ID--</option>  
<option value="../../graphs/r1_user_learning_curve/report_user_10001.php">10001 - User Learning Curve</option>
<option value="../../graphs/r1_user_learning_curve/report_user_10002.php">10002 - User Learning Curve</option>
<option value="../../graphs/r1_user_learning_curve/report_user_10003.php">10003 - User Learning Curve</option>
</select>
<div>
<iframe src="" width=960px height="960" frameborder=0 scrolling=no id="youriframe"></iframe>
</div>

</body>

</html>

