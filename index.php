<?php
	try{
		if (!file_exists('anti_ddos/start.php'))
			throw new Exception ('anti_ddos/start.php does not exist');
		else
			require_once('anti_ddos/start.php'); 
	} 
	//CATCH the exception if something goes wrong.
	catch (Exception $ex) {
		echo '<div style="padding:10px;color:white;position:fixed;top:0;left:0;width:100%;background:black;text-align:center;">The <a href="https://github.com/sanix-darker/antiddos-system" target="_blank">"AntiDDOS System"</a> failed to load properly on this Web Site, please de-comment the \'catch Exception\' to see what happening!</div>';
		//Print out the exception message.
		//echo $ex->getMessage();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/flottant.css">
		<title>Sample Website</title>
	</head>
	<body>
		<center>
			<div class="container">
				<a href="https://github.com/ronidianpatisa">
					<img src="https://raw.githubusercontent.com/ronidianpatisa/Anti-DDoS-System/master/img/icone.png" style="border-radius: 100%;width:200px;"><br>
					Roni Dian Patisa
				</a>
				<h1>Testing AntiDDoS</h1>
				<p>This Web Site is Protected by AntiDDOS-System.</p>
			</div>
		</center>
	</body>
</html>
