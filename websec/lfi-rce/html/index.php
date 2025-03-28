<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>InlaneFreight</title>
	<link rel="stylesheet" href="./style.css">

</head>

<body>


	<html lang="en">

	<head>
		<script type="text/javascript">
			window.history.forward();

			function prevent() {
				window.history.forward();
			}
		</script>

		<link rel="stylesheet" type="text/css" href="c.css" />



		<style type="text/css">
			body {
				padding-top: 60px;
				padding-bottom: 40px;
			}

			.sidebar-nav {
				padding: 9px 0;
				margin-top: 30px;
			}

			.mainPage {
				height: 100%
			}

			@media (max-width : 980px) {

				/* Enable use of floated navbar text */
				.navbar-text.pull-right {
					float: none;
					padding-left: 5px;
					padding-right: 5px;
				}
			}

			.display {
				width: 70%;
				height: 400px;
				padding-bottom: 250px;
				border: 1px solid black;
				margin-left: 250px;
				margin-top: 30px;
				overflow-y: scroll;
			}
		</style>

		<title>InlaneFreight</title>
	</head>

	<body onload="prevent();" onunload="">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="brand">Admin Panel</a>
					<div class="nav-collapse collapse">
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row-fluid mainPage">
					<div class="wrapper">
						<div class="well sidebar-nav">
							<ul id="sideBar" class="nav nav-list">
								<li class="nav-header">Data Logs</li>
								<li id="mtmi-menu" name="monthinfo"><a href="index.php?log=chat.log"><span>Chat Log</span></a></li>
								<li id="mtmi-menu" name="mtmi"><a href="index.php?log=http.log"><span>Service Log</span></a></li>
								<li class="nav-header">Performance View</li>
								<li id="monthinfo-menu" name="monthinfo"><a href="index.php?log=system.log"><span>System Log</span></a></li>
							</ul>
						</div>
						<!--/.well -->
					</div>
				</div>
			</div>
			<div class="display">
				<?php
				if (isset($_GET['log'])) {
					$log = "logs/" . $_GET['log'];
					echo "<pre>";
					include $log;
					echo "</pre>";
				}
				?>
			</div>

			<script src="js/jquery.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script>

	</body>

	</html>
	<!-- partial -->

</body>

</html>