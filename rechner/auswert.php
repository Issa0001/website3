<html>
 <head>
  <title>auswertung</title>
  <link href="format.css"rel="stylesheet"/>
 </head>
  <body>
   <header><h1>liters table</h1>
   </header>
   <nav>

	<a href="rechner.html">to the calculator</a>
		
		
	</nav>
   <main>
		<?php
		$liter = $_POST['tfliter'];
		$tage = $_POST['tftage'];
		$verbrauch = $_POST['tfverbrauch'];
			print "<table>
						<tr>
						<th> Day </th>	
						<th> tanked liters </th>
						<th> consumption per 100 km km</th>
						<th> total consumption </th>
						<th> liters remaining at the end of the day</th>
						<th> How many killometers you can ride at the end of the day</th> 
						</tr>";
						$i=1;
						while($i<=$tage)
							{
								$vbprotag = $liter/$tage*$i;
								$rest = $liter-$vbprotag;
								$kilometer = ($rest*10)*($rest/100);
								$wieweit = $liter/$verbrauch*100*(($tage-$i)/$tage);
								
								print "<tr>
										<td>" .$i. "</td>
										<td>" .round($liter,2). "</td>
										<td>" .round($verbrauch,2). "</td>
										<td>" .round($vbprotag,2). "</td>
										<td>" .round($rest,2). "</td>
										<td>" .round($wieweit,2). "</td>
									</tr>";
									$i=$i+1;
							}
						
			print "</table>";
						
			
 ?>
		</main>
 </body>
</html>