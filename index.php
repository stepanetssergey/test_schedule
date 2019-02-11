<?php

	$data['Lunes'] = array();
	$data['Martes'] = array();
	$data['Miércoles'] = array();
	$data['Jueves'] = array();
	$data['Viernes'] = array();
	$data['Sábado'] = array();
	$data['Domingo'] = array();

	$bg_color = array('bg-skyblue','bg-green','bg-blue','bg-pink','bg-red');
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Test</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div id="main-wrapper" >
		<div id="main-top">	
			<div id="top-title" >
				HORARIOS
				<div class="top-side" id="top-side-left"><span>Volver gastion</span></div>
				<div class="top-side" id="top-side-right">
					<span>
						<img src="data:image/webp;base64,UklGRkwCAABXRUJQVlA4TD8CAAAvOUAOEM/DoJEkRXX+LZ6Ph2PUwKBtJEfmj+z4lO8/g6Bt25g/0mPY/odh2zaOU5LyvSZoTXhFcGEgwg+xIQyEECHs2HBgIAZhEMIgCBHCjR1hg1gQxAYxCGJHWCAGDzasEBfEIIQLQQgRhNgxCDtE6YmWaI36oyVa8eyhFXEc8vnIf6Tz8s5Leh61ke7Hu5ZWpOtRE+GPVmiU79NAEaAmWlDzaQkFINq2bbq5D7HN2rbtxk56atvu74fn3tMPiOi/A7eRFCk5Zmj8AvtvSopWbzCaTCajQa9VJYG36K2+4cWtTAkA9rLbSyN+q17MDYo9NJ2BRuZmmuwq/yV31w7gjHR7FL6joyMCeGOdTp5bA6vA53oQ/SRjTwJ4TfeacUfbBIhw0o452udAjAuIl7DMgygXbY2O2ikQ56yh/lHuB5EOKXXjPJgUSrpFqoN5A8S6WecxSh+IdlCtwRUHnAcX52gS3przAUB68vOEBkY11dGODvbj1wc8qaq75TYgANqVMpplElYNZfQFEopWxqQwkACtEpPGiBhXmbxCxJqOybtERA1MyQPa/dd7HgpGpuxBA09v356rffl4f67x8xpxMDEFGnl29/tV48dH7Sf4u0GC96jBzSj2OB7CT56IgpH0hSgjkDDqKTONMLtJKwpXFTv5fuSrYlyV8/Dqkqty8lVrAOCu1swVF35MeEm7EmEnpOy+hB2fcMognGwIpynCCY5waiScVOmmY7qJXMAWEMZsAbPNdpVu86Dcdv6XDAA">
						Aádir horario
					</span>
				</div>
			</div>
			<div class="clear"></div>
		
			<div id="top-filter">
				<span>FILTRAR POR:</span>
				<?php for($ey = 0; $ey < 5; $ey++){ ?>
				<div class="top-filter-select">
					<select>
						<option>Select Option</option>
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
						<option>Option 4</option>
					</select>
				</div>
				<?php } ?>
				<span>OCUPACIÓN</span>
				<div class="clear"></div>
			</div>
		</div>
		<div id="main-content">
			<div id="time-container">
				<?php for($x = 9; $x < 15; $x++){ ?>
				<div class="class-schedule">
					<div class="time-hour"><?php echo $x; ?>:00</div>
					<div class="time-min">15</div>
					<div class="time-min">-30</div>
					<div class="time-min">45</div>
				</div>
				<?php } ?>
			</div>
			<div id="schedules">
				<?php for($x = 0; $x < 6; $x++){ ?>
				<div class="week">
					<div class="week-name">Lunes</div>
					<div class="week-activity"><span>Play Music</span></div>
					<?php for($xx = 1; $xx < rand(2,5); $xx++){ ?>
					<div class="day-schedule">
						<div class="day-class-student">Ray Charles</div>
						<?php for($ix = 9; $ix < 15; $ix++){ ?>
							<div class="day-class <?php echo $bg_color[rand(0,4)]; ?>">
								<div clas="day-class-time"><?php echo $ix; ?>:00 - <?php echo $ix + 1; ?>:00</div>
								<img src="img/guitarra.png">
								<div class="day-class-action">Batería 10</div>
								<div class="day-class-text">Marta Castillo, Juan Gomerta Castillo, Juan Gomerta Castillo, Juan Gome</div>
								<div class="day-class-by">Mick Jagger</div>
								<div class="day-class-rate">(2/4)</div>
							</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
				<?php } ?>
			</div>
		</div>
		<div id="main-footer">
			footer
		</div>
	</div>
</body>
</html>