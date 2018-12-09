<?php
        print"<table height = ".($rows*30)."px border = 2 cellspacing = 0 width= 500px>";
		for($i = 0; $i < $rows; $i++){
			print "<tr>";
			$j = 0;
			if($i%2 != 0){
				if($i == 1 && $cols >=5 && $cols < 7){
					print "<th height = 30px > Fourth cell </th>";
				}
				else{
					print "<th></th>";
				}
				$j++;
			}
			for(; $j < $cols; $j+=2){
				if($j != ($cols - 1)){
					if(($i == 0 && $j == 6 && $cols >= 7) ||($cols < 5 && $i == 1 && $j == 1)){
						print "<th height = 30px colspan = 2> Fourth cell </th>";
					}
					else{
						print "<th colspan = 2></th>";
					}
				}
				else{
					if(($i == 0 && $j == 6) ||($cols < 5 && $i == 1 && $j == 1)){
						print "<th height = 30px> Fourth cell </th>";
					}
					else{
						print "<th></th>";
					}
				}
			}
			print "</tr>";
		}
		?>
</table>