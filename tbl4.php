<?php
        print"<table height = ".($rows*30)."px border = 1 cellspacing = 0 width= 500px>";
		$rest = $cols%3;
		$rest2 = $rows%3;
		if($rest2 == 1){
			$rest2 = 3;
		}
		print "<tr>";
		for($j = 0; $j < $cols; ){
			if($j == 3){
						print "<th height =  30px rowspan = 3> Fourth cell </th>";
						$j++;
			}
			else{
				print "<th rowspan = 3></th>";
				$j++;
			}
			if($j < $cols){
				print "<th rowspan = 1></th>";
			}
			$j++;
			if($j < $cols){
				print "<th rowspan = 2></th>";
			}
			$j++;
		}
		print "</tr>";

		for($i = 0; $i < $rows-1; $i++){
			print "<tr>";
			if(($i <= ($rows-4) && $rest2 == 2) || (($i < ($rows-4))&& $rest2 == 0) || (($i < ($rows-4))&& $rest2 == 1)){
				$num = 3;
			}
			else{		
				if($rest2 == 0){
					$rest2 = 3;
				}
				$num = $rest2;
				$rest2--;
			}	
				for($k = 0; $k < ($cols-$rest)/3; $k++){
					if($cols == 3 && $k == 0 && $i == 0){
						print "<th rowspan = ".$num."> Fourth cell </th>";
					}
					else{
						print "<th rowspan = ".$num."> </th>";
					}

				}
				if($rest == 1 && $i%3==2){
					print "<th rowspan = ".$num."> </th>";
				}
				else if($rest == 2 && ($i%3==0 || $i%3==2)){
					print "<th rowspan = ".$num.">  </th>";
				}
			
			print "</tr>";

		}

print "</table>";
		?>