<?

  //insertion sorting
  
  function insertion_sorting(/*array*/ $list )
  {
	$len = count($list);
	
	//loop every items
	for( $i = 0; $i < $len; $i ++ ){
		//current item
		$tmp = $list[ $i ];
		$index = $i;
		
		for($j = $index+1; $j < ($len-1); $j++){
			if( $list[$j] < $tmp ){
				//swap data
				$list[$index] = $list[$j];
				$index--;
			}
		}
		$list[ $index ] = $tmp;
	}
  }
  
  $list = array(90, 45, 70, 65, 30);
  var_dump( insertion_sorting( $list ));

?>
