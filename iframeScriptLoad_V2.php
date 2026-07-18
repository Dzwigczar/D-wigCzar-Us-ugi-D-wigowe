<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<title>Custom HTML Iframe</title>
</head>
<body>
	<a href="https://maps.app.goo.gl/8Y7sXqhVZgsasCiSA" target="_blank">
    <img src="https://images.icon-icons.com/2699/PNG/512/google_maps_logo_icon_171055.png" 
         alt="Google Maps" 
         style="width:
250px; height: auto; border: 0; vertical-align: middle;">
</a>
<a href="https://www.tiktok.com/@dzwigczar?is_from_webapp=1&sender_device=pc" target="_blank">
    <img src="https://a.storyblok.com/f/209968/489x350/862ecdcaff/group-796.png"
alt=Tik tok"
style="width:
425px; height: auto; border: 0; vertical-align: middle;">
</a>
<a href="https://www.facebook.com/profile.php?id=61588676618044" target="_blank">
    <img src="https://www.kybelehotel.com/images/facebook.png"
alt=Facebook"
style="width:
250px; height: auto; border: 0; vertical-align: middle;">
</a></body>

<!-- scripts -->
<script>
	
	// Global variables
	var scrollbarHeightOffset = 20;
	var lastHeight;
	var newHeight;

	// Check if the iframe is adaptive or not
	
	// On document height change we seed to tell the parent window resize this window
	onElementHeightChange(document.body, function() {
		resize((lastHeight + scrollbarHeightOffset));
	});

    // Set initialize height 
    resize((lastHeight + scrollbarHeightOffset));
    // we the height again just to be sure if there is a slow computer or something else it will fix it (we didn't found a bug when we removed it)
    setTimeout(function() {
    	resize((lastHeight + scrollbarHeightOffset));
    }, 1000);
    setTimeout(function() {
    	resize((lastHeight + scrollbarHeightOffset));
    }, 5000);

	/**
	 * The function is detecting whenever the element height is changed
	 * and running the callback to adapt the iframe element
	 */
	function onElementHeightChange( elm, callback ) {
		// refresh the variable
		lastHeight = elm.clientHeight;
		// the function is checking with a timer if the element height is changed
		(function run() {
			// get new element height
			newHeight = elm.clientHeight;
			// check if height is changed
			if ( lastHeight != newHeight ) {
				lastHeight = newHeight;
				callback();
			}
			// clear timer
			if ( elm.onElementHeightChangeTimer ) {
				clearTimeout(elm.onElementHeightChangeTimer);
			}
			// add new timer
			elm.onElementHeightChangeTimer = setTimeout(run, 200);
		})();
	}
	
	/**
	 * Resize this iframe from the parent
	 */
	function resize( height ) {
		window.parent.postMessage({
			id: "177713316872769ece67077934",
			eventType: 'resize',
			height: height
		},"*");
	}

	
</script>
</html>