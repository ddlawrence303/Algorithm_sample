<?

//jump search
  
  function jump_search( $list, $target )
  {
	//setting margin
	$left = 0;
	$right = count($list);
	$size = count($list);
	
	//start point
	$prev = 0;
	
	//setting the section
	$section = floor(sqrt( $right - $left));
	
	//step:: find the main sec
	while( $list[ ($section < $size ? $section : $size)] < $target ) {
		//add the next section
		$prev = $section;
		//add a part of partio
		$section += floor(sqrt( $right - $left));
		
		//check the margin
		if($prev >= $ $size){
			return false; //break;
		}
	}
	
	// step2:: find the target item in the section
	while( $list[ ($prev < $len ? $prev : $len)] < $target ){
		$prev ++;
		
		//check the margin
		if( $prev == ($section < $len ? $section : $len)){
			return false;
		}
	}
	
	//check data
	if( $list[$prev] == $target){
		echo $prev;// find it
	}
	  
  }
  
  
?>
