<!DOCTYPE html>
<html>
<head>
	<title>quiz compettion</title>
	<link rel="manifest" href = "/quiz/manifest.json">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Weather PWA">
<link rel="apple-touch-icon" href="32.png">
<meta name="description" content="js13kGames Progressive Web App">
<meta name="theme-color" content="#2F3BA2" />
<script type="text/javascript">
	if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('/quiz/service-worker.js')
        .then((reg) => {
          console.log('Service worker registered.', reg);
        });
  });
}
</script>

</head>
<body>
	<nav id = "nav01">
	<!--	<label id = "lbltitle">Quiz Program</label>-->
		<div id = "rtnav">
			<label id = "lblhome">Home</label>
			<label id = "lblinst">Instruction</label>
			<label id = "lblabout">About</label>
		</div>
	</nav>
	<div id = "container">
		<main>
			<div id = "ltcont">
				<label id = "lttitle">Quiz Program</label>
				<aside>Conducted By <bdi></bdi></aside>
			</div>
			<div id = "signfield">
				<div id = "back">
					<label id = "lblin">signin</label>
					<label id = "lblup">signup</label>
					<span id = "incont">
						<label id = "lblid">UserID</label>
						<input type = "text" id = "txtid" name = "UserID">
						<label id = "lblpass">Password</label>
						<input type = "Password" name = "txtpass">
						<button id = "butin">signin</button>
					</span>
					<span id = "upcont">
						<label id = "lbluname">Username</label>
						<input type ="text" name="txtuname">
						<label id = "lblnum">Ph.Number</label>
						<input type = "phone" name = "txtnum" pattern = "[4-9]{1}-[0-9]{9}">
						<label id = "Password">Password</label>
						<input type = "Password" name = "txtpass">
						<button id = "butup">signup</button>
					</span>
				</div>
			</div>
		</main>
	</div>
	<footer>
		<details>
			<summary>copyright 2020</summary>
		</details>
	</footer>
</body>
</html>