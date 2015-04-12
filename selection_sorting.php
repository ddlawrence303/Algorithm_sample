<?

  // selection sorting
  function selection_sorting(/*array*/ $list)
  {
	$size = count($list);
	//loop every items
	for( $i =0; $i < $size; $i++){
		//get the current item
		$current = $list[ $i ];
		$key = $i;
		
		for($j = $key+1; $j < ($size-1); $j++){
			if( $list[$j] < $current ){
				//save the datas
				$current = $list[$j];
				$key = $j;
			}
		}
		//swap data
		$list[$key] = $list[$i] ; 
		$list[$i] = $current;
	}
  }

?>
