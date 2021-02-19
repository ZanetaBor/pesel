<!doctype html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="php functions, desain for study">
        <meta name="keywords" content="php">
        <title>Date of birth</title>

        <?php include ('function.php'); ?>
        
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    </head>

<body>
	<div class="container">

		<header><h1>Date of birth</h1></header>

		<section>
            <form action="" method="post">
				Pesel number:
				<input type="text" name="pesel">
				<input type="submit" name="button" value="send">
			</form>
            <div class="result">
                <?php 
                if(isset($_POST['button'])) {
                $pesel=$_POST['pesel'];
                peselNumb($pesel); 
                } ?>
            </div>	
	    </section>
	</div>
</body>
</html>
