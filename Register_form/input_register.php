<html>

<head>
    <title> Registration Page </title>
</head>



<body>
 
		  
<form action="output_register.php" method="get">
<table align="center"  cellpadding="5" cellspacing="0" bgcolor="pink">
<tr>
   <td><th align="center"><h1><u> Registration Form</h1></u></th></td>
   </tr>
		 
<tr>
     <td><label>Username:</label></td>
	  
     <td><input type="text" name="user" style="border-color:red"></td><br>
</tr>
<tr>
     <td> <label>Password:</label></td>
	  
     <td><input type="text" name="pass"style="border-color:red"></td><br>
</tr>

<tr>
     <td> <label>Name:</label></td>
	  
     <td><input type="text" name="nm"style="border-color:red"></td><br>
</tr>
<tr>
     <td> <label>Address<label></td>
	  
     <td><input type="text" name="add"style="border-color:red"></td><br>
</tr>
<tr> 
             <td>
                 <label><b>country:</b></label>
             </td>
             <td>
                 <select name="selcountry" id="selcuntry" required>
                      <option value="coun">-- (Plese select a country)--</option>
                     <optgroup label="country">
                         <option value="India">India </option>
                         <option value="New york">New york</option>
                         <option value="China">China</option>   
                     </optgroup>
					 
					</select> 
<tr>
            <td>
                 <label> ZIP_code:</label>
             </td>
             <td>
                 <input type="text" required name="z_code" id="z_code"style="border-color:red"><br>
             </td>
         </tr>
		<tr>
     <td> <label>Email<label></td>
	  
     <td><input type="email" style="border-color:red" name="my_email"></td><br>
</tr> 
<tr>
             <td>
                 <label> Sex:</label>
             </td>
             <td>
                 <input type="radio" style="border-color:red" name="sex" id="Male" style="border-color:red">Male
                 <input type="radio" style="border-color:red" name="sex" id="Female" style="border-color:red">Female
             </td>
         </tr>
		 
<tr>
             <td>
                 <label>Language:</label>
             </td>
             <td>
                 <input type="checkbox" name="eng" style="border-color:red" id="lan">English
                 <input type="checkbox" name="non-eng" style="border-color:red" id="lan">Non English
             </td>
         </tr>
		 <tr>
             <td>
                 <label>About:</label>
             </td>
             <td>
                 <textarea type=""style="border-color:red" name="abo"rows="5" cols="20"></textarea>
				 </td>
				 <tr>
	 
     <td><label><input type="submit" style="border-color:red"name="submit"></label></td>
</tr>	
		 
</table>
</body>
</html>








<?php

?>