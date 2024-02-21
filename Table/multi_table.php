<?php


$fno=$_REQUEST['sno'];
$lno=$_REQUEST['lno'];

for($i=$fno; $i<=$lno;$i++)
{
	 echo "<table border=2 cellpadding=4 cellspacing=4 align=center>";
	 for($j=1;$j<=10;$j++)
	 {
		    echo "<tr>" ;
			$mul= $i*$j;
			echo "<td>" .$i ."*" .$j." = ".$mul."</td>";
			echo "</tr>";
	 }
echo "<table><style> table{float:left;}</style>";
}	 
?>