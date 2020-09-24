<html>
<head>
	<title>ide2</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
     <title>ide2</title>
	<!-- tab img -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/ide2.png">
    
	<!-- css plugin ----------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/css/aos.css">
	<!-- main css ------------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style-responsives.css">
	<!-- google fonts ---------------------------------------------------------------------------------------------------------------------------------------------- -->
	<link href="https://fonts.googleapis.com/css?family=Hind:600|Lato:300,400|Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
#button1 , #button2
 {
display:inline-block;
/**other codes**/
}
</style>
</head>
<body>
<ul class="breadcrumb">
	<li><a href="index.php">Home</a></li>
	<li><a href="rank.php">Rank</a></li>
</ul>	
<form>
  <div class="form-group col-sm-7 col-xs-12 inputDiv">
    <select style="width: 18em; display:inline;" name="programTypeId">
        <option value="1">GNU G++11 5.1.0</option>
        <option value="2">GNU G++14 6.4.0</option>
        <option value="3">GNU G++17 9.2.0 </option>
        <option value="4">Java 11.0.6</option>
        <option value="5">Python 2.7.15</option>
        <option value="6">Python 3.7.2</option>
    </select>
  </div>
  <div class="form-group col-sm-7 col-xs-12 inputDiv">
     <textarea id="myInput" placeholder="write your input" maxlength="10000" class="gb wf form-control input" style="height:200px;"></textarea>
     <button onclick="myFunction()">Copy text</button>
    <input type="file" class="form-control-file" id="button2">
</div>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
</form>
