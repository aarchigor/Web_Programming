<?php
$Username= $_REQUEST['user'];
$Password= $_REQUEST['pass'];
$Name= $_REQUEST['nm'];
$Address= $_REQUEST['add'];
$country= $_REQUEST['coun'];
$ZIP_code= $_REQUEST['z_code'];
$Email= $_REQUEST['my_email'];
$Sex= $_REQUEST['sex'];
$eng=$_REQUEST['eng'];
$non_eng=$_REQUEST['non-eng'];
$About= $_REQUEST['abo'];

echo "<table border=1  border color='blue'>
<tr>
<td>Username:</td>
<td>$Username</td>
</tr>
<tr>
<td>Password:</td>
<td>$Passworde</td>
</tr>
<tr>
<td>Name:</td>
<td>$Name</td>
</tr>
<tr>
<td>Address:</td>
<td>$Address</td>
</tr>
<tr>
<td>country:</td>
<td>$country</td>
</tr>
<tr>
<td>ZIP_code:</td>
<td>$ZIP_code</td>
</tr>
<tr>
<td>Email:</td>
<td>$Email</td>
</tr>
<tr>
<td>Sex:</td>
<td>$Sex</td>
</tr>
<tr>
<td>Language:</td>
<td>$eng </td>
</tr>
<tr>
<td>About:</td>
<td>$About</td>
</tr>

?>