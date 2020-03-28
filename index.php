<?php
// Query params are: utm_creative={{ad.name}}&utm_campaign={{campaign.name}}&utm_source={{site_source_name}}&utm_placement={{placement}}&adset_id={{adset.id}} 

require_once dirname(__FILE__) . '/kclick_client.php';
$client = new KClickClient('https://durixt.com/api.php?', 'dFMPCdws6LTjSz17');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>

<!DOCTYPE html>
<html manifest="offline.appcache">
<head>
    <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Crazy Monkey</title>
	
	<!-- Standardised web app manifest -->
	<link rel="manifest" href="appmanifest.json" />
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<meta name="theme-color" content="#ffbf00">
	
	<!-- Allow fullscreen mode on iOS devices. (These are Apple specific meta tags.) -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui" />
	
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="apple-touch-icon" sizes="256x256" href="icon-256.png" />
	<meta name="HandheldFriendly" content="true" />
	
	<!-- Chrome for Android web app tags -->
	<meta name="mobile-web-app-capable" content="yes" />
	<link rel="shortcut icon" sizes="256x256" href="icon-256.png" />




  <!-- <link rel="apple-touch-icon" href="assets/icons/touch-icon-iphone.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/icons/touch-icon-ipad.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon" sizes="167x167" href="assets/icons/touch-icon-ipad-retina.png">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
  <meta name="apple-mobile-web-app-title" content="A2HS Test">
  <link rel="apple-touch-startup-image" href="assets/splash/apple_splash_640.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/splash/apple_splash_750.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/splash/apple_splash_1242.png" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/splash/apple_splash_1125.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/splash/apple_splash_1536.png" media="(min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/splash/apple_splash_1668.png" media="(min-device-width: 834px) and (max-device-width: 834px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)">
  <link rel="apple-touch-startup-image" href="assets/splash/apple_splash_2048.png" media="(min-device-width: 1024px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) and (orientation: portrait)"> -->






    <!-- All margins and padding must be zero for the canvas to fill the screen. -->
	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
		}
		html, body {
			background: #000;
			background: #000 url(./main-bg.png);
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			color: #fff;
			overflow: hidden;
			touch-action: none;
			-ms-touch-action: none;
		}
		canvas {
			touch-action-delay: none;
			touch-action: none;
			-ms-touch-action: none;
		}
    </style>
	

</head> 
 
<body> 
	<div id="fb-root"></div>
	
	<script>
	// Issue a warning if trying to preview an exported project on disk.
	(function(){
		// Check for running exported on file protocol
		if (window.location.protocol.substr(0, 4) === "file")
		{
			alert("Exported games won't work until you upload them. (When running on the file:/// protocol, browsers block many features from working for security reasons.)");
		}
	})();
	</script>
	
	<!-- The canvas must be inside a div called c2canvasdiv -->
	<div id="c2canvasdiv">
	
		<!-- The canvas the project will render to.  If you change its ID, don't forget to change the
		ID the runtime looks for in the jQuery events above (ready() and cr_sizeCanvas()). -->
		<canvas id="c2canvas" width="1080" height="1920">
			<!-- This text is displayed if the visitor's browser does not support HTML5.
			You can change it, but it is a good idea to link to a description of a browser
			and provide some links to download some popular HTML5-compatible browsers. -->
			<h1>Your browser does not appear to support HTML5.  Try upgrading your browser to the latest version.  <a href="http://www.whatbrowser.org">What is a browser?</a>
			<br/><br/><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Microsoft Internet Explorer</a><br/>
			<a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a><br/>
			<a href="http://www.google.com/chrome/">Google Chrome</a><br/>
			<a href="http://www.apple.com/safari/download/">Apple Safari</a><br/>
			<a href="http://www.google.com/chromeframe">Google Chrome Frame for Internet Explorer</a><br/></h1>
		</canvas>
		
	</div>
	
	<!-- Pages load faster with scripts at the bottom -->
	
	<!-- Construct 2 exported games require jQuery. -->
	<script src="jquery-2.1.1.min.js"></script>


	
    <!-- The runtime script.  You can rename it, but don't forget to rename the reference here as well.
    This file will have been minified and obfuscated if you enabled "Minify script" during export. -->
	<script src="c2runtime.js"></script>

    <script>
		// Size the canvas to fill the browser viewport.
		jQuery(window).resize(function() {
			cr_sizeCanvas(jQuery(window).width(), jQuery(window).height());
		});
		
		// Start the Construct 2 project running on window load.
		jQuery(document).ready(function ()
		{			
			// Create new runtime using the c2canvas
			cr_createRuntime("c2canvas");
		});
		
		// Pause and resume on page becoming visible/invisible
		function onVisibilityChanged() {
			if (document.hidden || document.mozHidden || document.webkitHidden || document.msHidden)
				cr_setSuspended(true);
			else
				cr_setSuspended(false);
		};
		
		document.addEventListener("visibilitychange", onVisibilityChanged, false);
		document.addEventListener("mozvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("webkitvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("msvisibilitychange", onVisibilityChanged, false);
		
		if (navigator.serviceWorker && navigator.serviceWorker.register)
		{
			// Register an empty service worker to trigger web app install banners.
			navigator.serviceWorker.register("sw.js", { scope: "./" });
		}
    </script>
</body> 
</html> 