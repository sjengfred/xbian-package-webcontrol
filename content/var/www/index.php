<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>RPi control</title>
        <style>
            html, body {
                margin: 0;
                padding: 0;
                height: 100%;
		width: 100%;
            }

            div, iframe {
                margin: 0;
                padding: 0;
                border: 0;
            }

            .container {
                position: relative;
                width: 100%;
                height: 100%;
            }

            .toolbar {
                height: 27px;
            }

            .toolbar iframe {
                position: absolute;
                width: 100%;
                height: 100%;
            }


            .iframe-container {
                position: absolute;
                top: 27px;
                bottom: 0;
                width: 100%;
		background: #FFFFFF;
                overflow-y: hidden;
            }

            .iframe-container iframe {
                position: absolute;
                width: 100%;
                height: 100%;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="toolbar">
		<iframe src="navbar.php" frameborder="0" id="navbar">Your browser is kaput!</iframe>
            </div>
            <div class="iframe-container">
                <iframe src="about:blank" frameborder="0" id="mainpage">Your browser is kaput!</iframe>
            </div>
        </div>
    </body>
</html>
