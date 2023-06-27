
<html>
<head>
    <title>Electricity Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<section id = "electric">
	
    <div class="container">
        <h1>Electricity Calculator</h1>
        <form method="post" >
		
            <div class="form-group">
                <label for="voltage">Voltage:</label>
				<p>
                <input type="number" class="form-control" id="voltage" name="voltage"  required>
				<br>
				</h6>Voltage (v)<h6/>
				<br>
            </div>
			
            <div class="form-group">
                <label for="current">Current (A):</label>
				<p>
                <input type="decimal" class="form-control" id="current" name="current" required>
				<br>
				</h6> Ampere (A) <h6/>
				<br>
            </div>
			
            <div class="form-group">
                <label for="rate">Current Rate:</label>
				<p>
                <input type="decimal" class="form-control" id="rate" name="rate" required>
				<br>
				</h6> sen/kWh <h6/>
            </div>
			
			
	
	<section id = "button">
	<center>
            <button type="submit" class="button ">Calculate</button>
	</section>		
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Electricity Calculator - Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<center>
    <div class="container">
        <h1>Electricity Calculator Result</h1>
       
			
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $voltage = $_POST['voltage'];
    $current = $_POST['current'];
    $rate = $_POST['rate'];
	

	

    function calculateElectricity($voltage, $current, $rate, ) {
		echo '<h3>Results:</h3>';
		
            echo '<p>Power: ' . $voltage * $current/1000 . ' Wh</p>';
            echo '<p>Rate: ' . $rate . ' RM</p>';
            echo '</tr>';
		for ($hour = 1; $hour <= 24; $hour++){
			 $power = $voltage * $current;
			$energy = ($power * $hour) / 1000;
			$totalCharge = $energy * ($rate / 100);
			echo '<center>';
			 echo '<table border = 1 , cellspacing 0, width = 500>';
				echo'<tr>';
				echo '<td> Hour: '.$hour.'</td>';
				echo '<td> Energy: '.$energy.'</td>';
				echo '<td> Total Charge:RM '.number_format($totalCharge, 2).'</td>';
			}
       
		

        return [
            'power' => $power,
            'energy' => $energy,
            'totalCharge' => $totalCharge,
			'rate' => $rate,
			
        ];
    }

    $result = calculateElectricity($voltage, $current, $rate, );
}
?>	
		
        
	
</body>
</html>

