<?php
	$team[0] = 25;
	$team[1] = 32;
	$team[2] = 11;
	$team[3] = 23;
	
?>
	<html>
	
		<head>
			<title> ZwemClub PHP </title>
		</head>	
		
		<body>
			<p> super-awesome-zwemblub-tabel-o-matic-1.1</p>
			<table border="1" style="border-collapse:collapse; border:10px solid black;">
				<tr>
						<td style="background-color:#ccccb3; padding:10px;">	De Spartelkuikens</td>
						<td style="padding:10px;">												<? echo $team[0] ?></td>
						<td style="padding:10px;">
							<?php
								echo floor ($team[0] / 5 );
								for($i=0; $i <= $team[0] / 6; $i++){
									print "<img src='/img/ZwemIcoon.png'>";
								}
							?>
						</td>
					</tr>
					<tr>
						<td style="background-color:#ccccb3; padding:10px;">	De Waterbuffels</td>
						<td style="padding:10px;">												<? echo $team[1] ?></td>
						<td style="padding:10px;">
							<?php
								echo floor ($team[1] / 5 );
								for($i=0; $i <= $team[1] / 6; $i++){
									print "<img src='/img/ZwemIcoon.png'>";
								}
							?>
						</td>
						
					</tr>
					<tr>
						<td style="background-color:#ccccb3; padding:10px;">	Plonsmderin</td>
						<td style="padding:10px;">												<? echo $team[2] ?></td>
						<td style="padding:10px;">
							<?php
								echo floor ($team[2] / 5 );
								for($i=0; $i <= $team[2] / 6; $i++){
									print "<img src='/img/ZwemIcoon.png'>";
								}
							?>
						</td>
					</tr>
					<tr>
						<td style="background-color:#ccccb3; padding:10px;">	Bommetje</td>
						<td style="padding:10px;">												<? echo $team[3] ?></td>
						<td style="padding:10px;">
							<?php
								echo floor ($team[3] / 5 );
								for($i=0; $i <= $team[3] / 6; $i++){
									print "<img src='/img/ZwemIcoon.png'>";
								}
							?>
						</td>
					</tr>
		</body>
		</html>
