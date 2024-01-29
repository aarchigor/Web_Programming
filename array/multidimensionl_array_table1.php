<?php
$students_master=array(array("id"=>1561242243,"rollno"=>35,"name"=>"aarchi","department"=>"cs&it","program"=>"bca","div"=>"B1","enrolmentno"=>220801125,"college"=>"atmiya","gender"=>"female","language"=>"gujrati"),
array("id"=>1561242244,"rollno"=>36,"name"=>"dharmi","department"=>"cs&it","program"=>"bsc.it","div"=>"B1","enrolmentno"=>220801126,"college"=>"atmiya","gender"=>"female","language"=>"gujrati" ),
array("id"=>1561242255,"rollno"=>34,"name"=>"shreya","department"=>"cs&it","program"=>"bca","div"=>"B2","enrolmentno"=>220801155,"college"=>"atmiya","gender"=>"female","language"=>"english"),
array("id"=>1561242240,"rollno"=>6,"name"=>"fena","department"=>"cs&it","program"=>"bca","div"=>"B3","enrolmentno"=>220801120,"college"=>"atmiya","gender"=>"female","language"=>"hindi"),
array("id"=>1561242230,"rollno"=>28,"name"=>"surbhi","department"=>"cs&it","program"=>"bca","div"=>"B4","enrolmentno"=>220801159,"college"=>"atmiya","gender"=>"female","language"=>"english"),
array("id"=>1561242260,"rollno"=>40,"name"=>"yatri","department"=>"cs&it","program"=>"bsc.it","div"=>"A1","enrolmentno"=>220801125,"college"=>"atmiya","gender"=>"female","language"=>"gujrati" ),
 array("id"=>1461242243,"rollno"=>5,"name"=>"pari","department"=>"cs&it","program"=>"bba","div"=>"e1","enrolmentno"=>221801125,"college"=>"atmiya","gender"=>"female","language"=>"english"),  
array("id"=>1551242243,"rollno"=>3,"name"=>"vrunda","department"=>"cs&it","program"=>"bsc.it","div"=>"e1","enrolmentno"=>210801125,"college"=>"atmiya","gender"=>"female","language"=>"english" ),
array("id"=>1561242444,"rollno"=>6,"name"=>"hetvi","department"=>"cs&it","program"=>"bca","div"=>"B1","enrolmentno"=>220881125,"college"=>"atmiya","gender"=>"female","language"=>"gujrati"),
array("id"=>1521242444,"rollno"=>6,"name"=>"margi","department"=>"cs&it","program"=>"bsc.it","div"=>"B5","enrolmentno"=>220781125,"college"=>"atmiya","gender"=>"female","language"=>"english"), );

//print_r($students_master);

echo '<table border="1",align="center">';
echo'<tr><th>id</th><th>rollno</th><th>name</th><th>department</th><th>program</th><th>div</th><th>enrolmentno</th><th>colloge</th><th>gender</th><th>language</th></tr>';
foreach( $students_master as $students_master )
{
   echo '<tr>';
   foreach( $students_master as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>