<?php
$input = intval($_POST["1"]);
$bazz = intval($_POST["2"]);
$number = intval($_POST["3"]);
     for($i=1; $i<$number; $i++)
    {
    	 if($i % $input==0 || $i % $bazz==0)
    	{
    	    if($i % $input==0)
    		 echo 'f';
    		if($i % $bazz==0)
    	 	 echo 'b' ;
    	 echo ' ';
        }
        else
        	echo $i, ' ';
    }
