<html>

<head>
    <title> Registration Page </title>
</head>
<style>
input,textarea,select{
	  border-color: red;
}

</style>




<body>
 
		  
<form action="output_register.php" method="get">
<table align="center"  cellpadding="5" cellspacing="0" bgcolor="#D2B48C">
<tr>
   <td><th align="center"><h1><u> Registration Form</h1></u></th></td>
   </tr>
		 
<tr>
     <td><label>Username:</label></td>
	  
     <td><input type="text" name="user"/></td><br>
</tr>
<tr>
     <td> <label>Password:</label></td>
	  
     <td><input type="text" name="pass"/></td><br>
</tr>

<tr>
     <td> <label>Name:</label></td>
	  
     <td><input type="text" name="nm"/></td><br>
</tr>
<tr>
     <td> <label>Address<label></td>
	  
     <td><input type="text" name="add"/></td><br>
</tr>
<tr> 
             <td>
                 <label>country:</label>
             </td>
             <td>
                 <select name="selcountry" id="selcuntry" style="border-color=red" required>
                      <option value="sel_country">-- (Plese select a country)--</option>
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
                 <input type="text" name="z_code" id="z_code"/><br>
             </td>
         </tr>
		<tr>
     <td> <label>Email<label></td>
	  
     <td><input type="email"  name="my_email"/></td><br>
</tr> 
<tr>
             <td>
                 <label> Sex:</label>
             </td>
             <td>
                 <input type="radio"  name="gen" value="male"/>Male
                 <input type="radio"  name="gen" value="female"/>Female
             </td>
         </tr>
		 
<tr>
             <td>
                 <label>Language:</label>
             </td>
             <td>
                 <input type="checkbox" name="eng" value="eng"/>English
                 <input type="checkbox" name="eng"value="non-eng"/>Non English
             </td>
         </tr>
		 <tr>
             <td>
                 <label>About:</label>
             </td>
             <td>
                 <textarea type=""  name="abo" rows="5" style"border-color="red" cols="20"/></textarea>
				 </td>
				 <tr>
	 
     <td><label><input type="submit" name="submit"/></label></td>
</tr>	
		 
</table>
</body>
</html>


<?php

?>
