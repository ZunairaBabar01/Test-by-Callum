
	<html>

	<head>
	<title>Multiplication table in PHP</title>
		<style type="text/css">
		body {
			font-size:12px;
		}
		
		td {
			height: 24px;
			text-align: center;
			width: 24px;
		}
		
		td.gray {
			background-color: #ccc;
		}
		
		td.white {
			background-color: #fff;
		}
		
		td a {
			display: block;
			text-decoration: none;
		}
		
		td a:hover {
			background-color: #faa;
		}
		</style>
	</head>

	<body>

		<table border="1">
		
		<?php 
		  $col=12;
		for( $r = 1; $r <= 12; $r++)
		{
		echo "<tr>";
			for( $c=1; $c<=$col; $c++)
			{
			($c==$r) ? $bg = "gray" : $bg = "white";
			echo "<td class='$bg'><a href='#' title='$r x $c = ". $r * $c . " ' >" . $r*$c . "</a></td>" ;
			}		
		echo  "</tr>";
		}        
		?>
		</table>

	</body>

</html>

