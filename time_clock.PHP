<html>
<body>
<head>

 <style>

  .a{
	    background-color: black;
		color:red;
		font-size:60px;
		text-align:center;
		border-color:white;
	  font-family:digital-7;
  }
.d
{
border:1;
color:red;
align:center;
}	

.c{
	border-style: solid;
border-color: gray;
align:center;
}

.b
{
	font-size:40;
	color:gray;
	align:center;
	
}
  
 
  @font-face
  {
	   font-family:digital-7;
		src:url(digital-7.ttf);
  }
 
  </style>
</head>

<body>
<div>

<?php

header ("refresh:1");
echo "<table border=1 border-color=red class=a  align=center>";

/*echo"<tr>";
echo"<td>";

date_default_timezone_set('Asia/Kolkata');
 echo date('H:i:s');
 echo "<br>";
 
echo "hours";
echo "<br>";
echo "minutes";
echo"</td>"; 

 echo"</tr>";
echo"</table>";
*/

echo "<tr class=b>";
echo "<td>";
echo "Date";
echo "</td>";
echo "<td>";
echo "Month";
echo "</td>";
echo "<td>";
echo "Year";
echo "</td>";
echo "<tr class=d>";
echo "<tr>";
echo "<td class=c>";
echo date("d:");
echo "</td>";
echo "<td class=c>";
echo date("m:");
echo "</td>";
echo "<td class=c>";
echo date("Y");
echo "</td>";
echo "</tr>";
echo "<tr class=b>";
echo "<td>";
echo "Hour";
echo "</td>";
echo "<td>";
echo "Miniute";
echo "</td>";
echo "<td>";
echo "Second";
echo "</td>";
echo "</tr>";
echo "<tr class=d>";
echo "<td class=c>";
date_default_timezone_set('Asia/calcutta');
echo date('h:');
echo "</td>";
echo "<td class=c>";
date_default_timezone_set('Asia/calcutta');
echo date('i:');
echo "</td>";
echo "<td class=c>";
date_default_timezone_set('Asia/calcutta');
echo date('s');
echo "</td>";
echo "</tr>";
echo "</table>";
?>
</div>
</body>
</html>