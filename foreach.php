 
<pre>
 <?php 

 $array = [ 

		 	array(
			 	'one' => "coffe" ,
			 	'two' => "somucha" ,
			 	'three' => "vaat" ,
			 	'four' => "ruti" 

		 	),

		 	array(
			 	'one' => "2coffe" ,
			 	'two' => "2somucha" ,
			 	'three' => "2vaat" ,
			 	'four' => "2ruti" 
			 ),

		 	array(
			 	'one' => "3coffe" ,
			 	'two' => "2somucha" ,
			 	'three' => "2vaat" ,
			 	'four' => "2ruti" 
			 )
		];




$array2 =["one", "two", "three"];
echo "<pre>";

foreach ($array as $key ) {
	echo $key["one"].'<br>';
}


$i=0;
while($i<count($array2))
{
	echo $array2[$i]."<br>";
	$i++;
}

//while($row=mysqli_fetch_array($res));

/*for($i=0;$i<count($array2);$i++)
{
	echo $array2[$i]."<br>";
}*/

/*$i=0;
while($i<count($array))
{
	foreach($array[$i] as $k=>$v)
	{
		if($k=="two")
		{
			echo $k."=".$v."<br>";
		}
		
	}
	$i++;
}
*/
/*for($i=0;$i<count($array);$i++)
{
	foreach($array[$i] as $k=>$v)
	{
		if($k=="two")
		{
			echo $k."=".$v."<br>";
		}
		
	}
}*/

/*foreach($array as $internal)
{
	foreach($internal as $k=>$v)
	{
		echo "<p>".$k."=".$v."</p>";
	}
}

*/











// $a = [1,2,5,6,4];
// $b = [3,7,10,9,8];

// $ab = array_merge($a,$b);


// //print_r( $ab );

// echo "<br>";

// sort($ab);
// $count = count($ab);

// for($x = 0; $x<$count; $x++){

// 	echo $ab[$x];
// }

?>