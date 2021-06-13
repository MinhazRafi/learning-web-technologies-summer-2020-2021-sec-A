<?php
    
	$element = ['rafi', "masud" , "khaled", "kader" ,12,23,45,67,89];	
	$search='masud';
	echo "Element to search = $search ; <br>";
	for($i=0; $i<count($element); $i++)
	{
	 if($element[$i]==$search){
	 	
	 	 $a=0;
		 $a+=1;
	 }
	 
	}
	if($a==1){
		echo "Element is found <br>";
	}
	else{
		echo "Element is not found";
	}
?>