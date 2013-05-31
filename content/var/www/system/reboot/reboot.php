<?php
    include '/var/www/yourip.php';
    exec('sudo /var/www/system/reboot/rebootscript.sh > /dev/null 2>&1 &');
?>

<html>
<head>

    <title>System</title>
	
<style type="text/css">
.button_style1 {
	-webkit-appearance:none;
	color: #000;
	line-height: 50px;
	margin: 0;
	padding: 0 24px;
	border-left: 1px solid #969696;
	font-family: Verdana, sans-serif;
	font-size: 18px;
	font-weight: 700;
	width: 250px;
}.button_style1:enabled {
	cursor: pointer;

}.button_style1:hover:enabled {
background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAzCAIAAADZxfV4AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjgxMkRGQzczQkFDMDExREY5RDE0QzJCMjZBM0JGMURBIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgxMkRGQzc0QkFDMDExREY5RDE0QzJCMjZBM0JGMURBIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ODEyREZDNzFCQUMwMTFERjlEMTRDMkIyNkEzQkYxREEiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6ODEyREZDNzJCQUMwMTFERjlEMTRDMkIyNkEzQkYxREEiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4vOcxrAAAAVUlEQVR42lyMUQ7AMAhCF+9/px5MIFNpl2YfREF8z1orSAaAYAnUnsdzdiR+vRLsuzNZ36bLyLM3p36zuhpWzp/7Zn/c5tA8zc3eeUvXbi/tXHwFGAC2dpagcbC63AAAAABJRU5ErkJggg%3D%3D') repeat-x;
	color: #fff;
}.button_style1:active:enabled {
    position:relative;
    top:1px;
}.button_style1:disabled {
   opacity: 0.3;
}
</style>

</head>
<body>
<center>

<br><br><br>
 <input type="submit" class="button_style1" id="rebooting" value="Rebooting.." disabled="true" />
<br><br> 
<img id="loadingImage" src="../ajax-loader.gif" style="visibility:visible"/>   
<br>
<p>This will take a couple of minutes. <br><br> Please do not refresh this page.</p>
  <script>

window.setInterval(function(){
    var img = document.createElement("img");
      img.onload = function()
      {
        document.getElementById("rebooting").value="RPi is back online!";
	document.getElementById('loadingImage').style.visibility='hidden';
	setTimeout(function() {window.location.replace('finished.php')},500);
      };
      img.onerror = function()
      {
        document.getElementById("rebooting").value="Rebooting..";
      };
    ///document.getElementById("status").style.display="block";
    var ran = Math.random();
      img.src = "<?php echo $yourip; ?>:9090/dummy.png?v="+ran;
  }, 5000);
  </script>


</center> </body> </html>
