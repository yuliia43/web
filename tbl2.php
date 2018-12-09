<?php
        print"<table height = ".($rows*30)."px border = 2 cellspacing = 0 width= 500px>";
			$j = $cols;
			for($i = 0; $i < $rows; $i++){

				print "<tr>";

				if(($i != $rows/2 && $i != ($rows-1)/2) || ($rows == $cols)){

					if($j != 1 && $i != 1){
						print "<th rowspan =" .($rows - $i)." > </th>";
					}
					else if($i == 1){
						print "<th height = 30px rowspan =" .($rows - $i)." >Fourth cell </th>";
					}
			
					if($j > 0){
						print "<th colspan = " .($j - 1)." >  </th>";
					}
					else if($j == 0){
						for($k=0; $k < ($cols-$rows-1); $k++){
							print "<tr><th></th></tr>";
						}
					}
					$j--;
				}

				else{
					print "<th colspan = " .($j)." >  </th>";
				} 
			}
			?>
		</table>