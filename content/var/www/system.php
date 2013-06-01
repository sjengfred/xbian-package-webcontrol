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
	font-size: 16px;
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
<br><br>
<input type="submit" class="button_style1" id="startCP" value="(Re)start CouchPotato"/>
<img id="loadingImageCP" src="system/ajax-loader.gif" style="visibility:hidden; vertical-align:middle;"/>
<br>
<input type="submit" class="button_style1" id="startSB" value="(Re)start SickBeard"/>
<img id="loadingImageSB" src="system/ajax-loader.gif" style="visibility:hidden; vertical-align:middle;"/>
<br>
<input type="submit" class="button_style1" id="startNG" value="(Re)start NZBGet"/>
<img id="loadingImageNG" src="system/ajax-loader.gif" style="visibility:hidden; vertical-align:middle;"/>
<br>
<input type="submit" class="button_style1" id="startAS" value="(Re)start AutoSub"/>
<img id="loadingImageAS" src="system/ajax-loader.gif" style="visibility:hidden; vertical-align:middle;"/>
<br><br>

<input type="submit" class="button_style1" id="startXB" value="(Re)start XBMC"/>
<img id="loadingImageXB" src="system/ajax-loader.gif" style="visibility:hidden; vertical-align:middle;"/>
<br><br>

<input type="submit" class="button_style1" id="rebootsystem" value="Reboot system"/>
<img id="loadingImageRB" src="system/ajax-loader.gif" style="visibility:hidden; vertical-align:middle;"/>


 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    
	<script>
    $( document ).ready(function() {
		var enableSubmitAS = function(ele) {
			document.getElementById('loadingImageAS').style.visibility='hidden';
			document.getElementById('startAS').value='AutoSub Started';
}
        
		$("#startAS" ).click(function( event ) {
			var that = this;
			$(this).attr("disabled", true);
			setTimeout(function() { enableSubmitAS(that) }, 30000);
			document.getElementById('loadingImageAS').style.visibility='visible';
			document.getElementById('startAS').value='Starting AutoSub..';
			$.ajax({
                                url: 'system/autosub/start.php'
                        });
        });
                var enableSubmitCP = function(ele) {
                        document.getElementById('loadingImageCP').style.visibility='hidden';
                        document.getElementById('startCP').value='CouchPotato Started';
}

                $("#startCP" ).click(function( event ) {
                        var that = this;
                        $(this).attr("disabled", true);
                        setTimeout(function() { enableSubmitCP(that) }, 30000);
                        document.getElementById('loadingImageCP').style.visibility='visible';
                        document.getElementById('startCP').value='Starting CouchPotato..';
                        $.ajax({
                                url: 'system/couchpotato/start.php'
                        });
        });

                var enableSubmitSB = function(ele) {
                        document.getElementById('loadingImageSB').style.visibility='hidden';
                        document.getElementById('startSB').value='SickBeard Started';
}

                $("#startSB" ).click(function( event ) {
                        var that = this;
                        $(this).attr("disabled", true);
                        setTimeout(function() { enableSubmitSB(that) }, 30000);
                        document.getElementById('loadingImageSB').style.visibility='visible';
                        document.getElementById('startSB').value='Starting SickBeard..';
                        $.ajax({
                                url: 'system/sickbeard/start.php'
                        });
        });

                var enableSubmitNG = function(ele) {
                        document.getElementById('loadingImageNG').style.visibility='hidden';
                        document.getElementById('startNG').value='NZBGet Started';
}

                $("#startNG" ).click(function( event ) {
                        var that = this;
                        $(this).attr("disabled", true);
                        setTimeout(function() { enableSubmitNG(that) }, 30000);
                        document.getElementById('loadingImageNG').style.visibility='visible';
                        document.getElementById('startNG').value='Starting NZBGet..';
                        $.ajax({
                                url: 'system/nzbget/start.php'
                        });
        });

                var enableSubmitXB = function(ele) {
                        document.getElementById('loadingImageXB').style.visibility='hidden';
                        document.getElementById('startXB').value='XBMC Started';
}

                $("#startXB" ).click(function( event ) {
                        var that = this;
                        $(this).attr("disabled", true);
                        setTimeout(function() { enableSubmitXB(that) }, 30000);
                        document.getElementById('loadingImageXB').style.visibility='visible';
                        document.getElementById('startXB').value='Starting XBMC..';
                        $.ajax({
                                url: 'system/xbmc/start.php'
                        });
        });


                $("#rebootsystem" ).click(function( event ) {
                        var that = this;
			$('input[type="submit"]').attr('disabled','disabled');
                        document.getElementById('loadingImageRB').style.visibility='visible';
                        document.getElementById('rebootsystem').value='Rebooting..';
			setTimeout(function() {window.location.replace('system/reboot/reboot.php')},500);
        });


    });
	</script>
</center>
</body>
</html>

