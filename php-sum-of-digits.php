<!DOCTYPE html>
<html>
<head>
	<title>Sum of Digit Program : PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<section id="sum_of_digit">
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
			<input type="number" name="number" value="" required>
			<button>Go</button>
			<input type="reset" name="" value="RESET">
		</form>
	</section>
	<section id="output">		
		<strong>Output:</strong><span><?php echo sumOfDigit(); ?></span>
	</section>
			</div>
		</div>	
	</div>
</body>
</html>
<?php 			
	function sumOfDigit()
	{
		$number= $_GET['number']; 
		//$number= 50;
		$no=0; 
		$sum=0;
		$no=$number%10;
		for ($i=0;$i<strlen($number);$i++)
		{
			$no=$number%10;
			$sum=$sum+$no;
			if($sum!=0)
			{
				$number=$number/10;
			}	
			
		}
		return $sum;	
	}			
?>