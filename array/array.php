<?php

$name = array("Ajay", "Gagan", "Kamal");

//echo "<pre>";
//print_r( $name);

for($x = 0; $x <= 2; $x++)
{
	echo "Value of x is: ".$name[$x]. "<br/>";
}


$student = array("name" => "Ajay", "age" => 23 );

//echo "<pre>";
//print_r($student);

foreach($student AS $studentkey => $studentvalue)
{
	if($studentvalue == 22)
	{
		continue;
	}
	else
	{
		echo "Value of ".$studentkey." is: ".$studentvalue. "<br/>";
	}
}

$students = array(
				array('id' => 1, 'name' => 'Ajay', 'age' => 22),
				array('id' => 2, 'name' => 'Gagan', 'age' => 23),
				array('id' => 3, 'name' => 'Kamal', 'age' => 24)
			);

echo "<pre>";
print_r($student);


