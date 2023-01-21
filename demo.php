<?php
//<----------------------------task1----------------------->
echo "php";
echo nl2br("\r\n You will find the \r\n newlines alots rrr \r\n on fire fox");
//<----------------------------task2--------------------->
$numbers = array(12, 45, 25,10);
$count = count($numbers);
echo nl2br ("\r\n the count of numbers = $count ");
$sum = array_sum($numbers);
echo nl2br ("\r\n the sum of numbers = $sum ");
$average = $sum / $count;
echo "<p>The Mean Average of the numbers is $average</p>";
rsort($numbers);
echo"<br>";
var_dump($numbers);
//<--------------------------task3---------------------->
$age = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40,"amed"=>200) ;
echo "<br>";
echo "sara is " . $age['Sara'] . " years old.";
//  arsort($age);
 asort($age);
// ksort($age);
// krsort($age);
echo "<br>";
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br>";
var_dump($age);
echo"<br>";
//<-----------------------task4----------------------->
$students = [
  ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
  ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
  ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
  ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
  ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
];
// echo"<table><th>
echo "<table  border=1;><tr><td>NAME</td><td>EMAIL</td><td>STATUS</td></tr>";
     foreach ($students as $std){
        if($std['status']=='PHP'){
            echo "<tr style='color:red'><td>".$std['name']."</td><td>".$std['email']."</td> <td>".$std['status']."</td></tr>";
          }
          else{
            echo "<tr><td>".$std['name']."</td><td>".$std['email']."</td> <td>".$std['status']."</td></tr>";
          }
    }
    echo "</table>";
?>