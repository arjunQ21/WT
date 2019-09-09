<?php 

$arr = ['post' => "Top 10 movies",
		'comments'=>[
						'title'=>'Ramro',
						'description'=>'Daami'
						],
		'rating'=> 5.0				
];
// echo "hi";
	// var_dump($arr) ;

foreach($arr as $key => $val ){
	echo "<br>$key = ";
	if(is_array($val)){
		foreach($val as $k => $v){
			echo "<br>$k = $v<br>" ;
		}
	}else{
		echo $val ."<br>" ;
	}


}

echo "<pre>" ;
print_r($_SERVER) ;
echo "</pre>";


?>