<?

//quick sorting
  function quick_sorting(/*array*/ $list )
  {
	//choose a pivot :: the first or last one
	$pivot = $list[0];
	$size = count($list);
	
	//setting the left and right list
	$left_arr = $right_arr = array();
	
	//loop itmes
	for( $i = 1; $i < ($size -1); $i++ ){
		//comparasion
		if( $list[$i] < $pivot ){
			$left_arr[] = $list[$i];
		}
		else if( $list[$i] > $pivot )
		{
			$right_arr[] = $list[$i];
		}
	}
	
	//merge array
	return array_merge(
		$left_arr,
		array($pivot),
		$right_arr
	);
  }
  
  
  
  
  
  //main logic
  $list = array(60, 50, 90, 100, 45, 11);
  
  //execute quick sorting
  $res = quick_sorting($list);
  
  var_dump( $res );
  
?>
