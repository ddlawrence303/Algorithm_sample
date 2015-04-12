<?

  //binary search :: recursive usage
  function binary_search( $list, $target , $left, $right )
  {
	//setting margin
	$l = $left;
	$r = $right;
	
	$mid = floor(($r - $l) /2);
	
	//comparasion data
	if( $list[ $mid ] > $target ){
		//recursive search
		binary_search( $list, $target,  $l, $mid - 1);
	}else if( $list[$mid] < $target ){}
		binary_search( $list, $target,  $mid + 1, $r);
	}else{
		echo ($list[ $mid] == $target);
	}
  }
  
  
  
    //main logic
  $list = array(60, 50, 90, 100, 45, 11);
  
  //execute binary sorting
  binary_search( $list, 50 ,  0, count($list)-1 );
  
?>
