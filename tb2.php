	<html>
	<head>
		/*cols == rows || cols = rows-1*/
	</head>

	<body>
		<table align = center width = 100% cellspacing = 0 border = 1>
			<?php
			$cols = 7;
			$rows = $cols;
			$j = $cols;
			for($i = 0; $i < $rows; $i++){

				print "<tr>";

				if(($i != $rows/2 && $i != ($rows-1)/2) || ($rows == $cols)){

					if($j != 1){
						print "<th height = 50px rowspan =" .($rows - $i)." > </th>";
					}


					if($j > 0){
						print "<th height = 50px colspan = " .($j - 1)." >  </th>";
					}
					else if($j == 0){
						for($k=0; $k < ($cols-$rows-1); $k++){
							print "<tr><th height = 50px></th></tr>";
						}
					}
					$j--;
				}

				else{
					print "<th height = 50px colspan = " .($j)." >  </th>";
				} 
			}
			?>
		</table>
	</body>

	</html>