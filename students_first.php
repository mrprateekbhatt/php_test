<?php
$student = array(
    array("id" => "1", "name" => "Prateek", "dob" => "1580812642", "grade" => "12", "marks" => array("H" => "12","E"=>"22","S"=>"24")),
    array("id"=>"2","name"=>"Mahak","dob"=>"1580812642","grade"=>"11","marks"=>array("H"=>"18","E"=>"17","S"=>"24")),
    array("id"=>"3","name"=>"Kunal","dob"=>"1580812642","grade"=>"12","marks"=>array("H"=>"12","E"=>"22","S"=>"24")),
    array("id"=>"4","name"=>"Yogita","dob"=>"1580812642","grade"=>"10","marks"=>array("H"=>"0","E"=>"18","S"=>"24"))
);
$subject = array( 
    "12" => array(
        array("name" => "Hindi","code" =>"H","mm" => "20"), 
        array("name" => "English","code" =>"E","mm" => "20"), 
        array("name" => "Science","code" =>"S","mm" => "20")),
    "11" => array(
        array("name" => "Hindi","code" =>"H","mm" => "20"), 
        array("name" => "English","code" =>"E","mm" => "20"),
        array("name" => "Science","code" =>"S","mm" => "20")),
    "10" => array(
        array("name" => "Hindi","code" =>"H","mm" => "20"),
        array("name" => "English","code" =>"E","mm" => "20"),
        array("name" => "Science","code" =>"S","mm" => "20"))
    );
                            

foreach ($student as $key=>$value)
{
  $gra=$value['grade'];
  $arr=$value['marks'];

  $count=0;
  foreach ($arr as $key1=>$val)
  {
    for($x=0;$x<3;$x++)
    {
    if($subject[$gra][$x]['code']==$key1)
    { $student[$key]['mm'][$key1]=$subject[$gra][$x]['mm'];
      if($subject[$gra][$x]['mm']<=$arr[$key1])
      {
        $count=$count+1;
      }
    }
    }
  }
  if($count>=2)
  {
    $student[$key]['res']="Pass";
  }
  else
  {
    $student[$key]['res']="Fail";
  }
}
echo "<strong>FINAL RESULT</strong><br><table border=1><tr><th>name</th><th>dob</th><th>grade</th><th>subjects</th><th>result</th></tr>";
foreach ($student as $key=>$value)
{
  $arr=$value['marks'];
  $student[$key]['dob']=date('m/d/Y', $student[$key]['dob']);
  echo "<tr><td>".$student[$key]['name']."</td><td>".$student[$key]['dob']."</td><td>".$student[$key]['grade']."</td><td>";
  foreach ($arr as $key1=>$val)
  {
  echo $key1."(".$student[$key]['marks'][$key1].", ".$student[$key]['mm'][$key1].")<br>";
  }
 echo "</td><td>".$student[$key]['res']."</td></tr>";
}
echo "</table><br>";


function subdata (int $a,$array) {
    return $array[$a];
}
echo "<strong>ANSWER 2</strong><br>";
$show=subdata(12,$subject);
echo "<br><table  border=1><tr><th>subjectname</th><th>subject code</th><th>mm</th></tr>";
foreach ($show as $key=>$value)
{
echo "<tr><td>".$value['name']."</td><td>".$value['code']."</td><td>".$value['mm']."</td></tr>";
}
echo "</table><br>";


function studata (int $a,$array) {
  foreach ($array as $key=>$value)
  {
    if($array[$key]['id']==$a)
    {
    return $array[$key]["marks"];
    }
  }
}
echo "<br><br><br><strong>ANSWER 3</strong><br>";
print_r(studata(1,$student));



 ?>
