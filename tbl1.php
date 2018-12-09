<?php
print "<script src= \"http://code.jquery.com/jquery-2.2.4.min.js\"></script>
 <script>
 	


        print"<table id = \"t1\"height = ".($rows*30)."px border = 2 cellspacing = 0 width= 500px>";	
		$j = $cols;
		for($i = 0; $i < $rows; $i++){
			print "<tr>";
			if($j != $cols && $j>=0){
				print "<th id = \"c\" rowspan =" .($rows - $i)." > <p></p> </th>";
			}
			if($j > 0 && $i != 1){
				print "<th id = \"c\" colspan = " .($j)." ><p></p></th>";
			}
			else if($i == 1){
				print "<th id = \"c\" height = 30px colspan = " .($j)." ><p></p>Fourth cell </th>";
			}
			else if($j == 0){
				for($k=0; $k < ($rows-$cols-1); $k++){
					print "<tr><th id = \"c\"></th></tr>";
				}
			}
			$j--;
		}
		
		?>
	</table>