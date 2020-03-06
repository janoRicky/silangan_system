<body>
	<h1>Redirecting</h1>
	<p>Please wait warmly...</p>
</body>
<script>
	$(document).ready(function () {
		window.setTimeout( show_popup, 5000 ); // 5 seconds
		$(location).attr('href', 'http://stackoverflow.com')
	});
</script>