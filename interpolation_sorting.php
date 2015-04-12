<?


  //interpolation
  function interpolation_search($list, $target){
	  //setting margin
	  $l = 0;
	  $r = count($list);
	  
	  while( $l <= $r ){
		//check the current data
		if( $list[$l] == $list[$r]){
			//comparasion
			if($list[$l] == $target){
				echo $l; //echo index
			}else{
				echo 'not found';
			}
		}else{
			// do nothing and its not supposed to be here
			echo 'not found';
		}

		//set the partio
		$col = ($target - $l) / ($r - $l);
		//check the partio
		if( $col <= 0 || $col > 1){
			echo 'error happened';
		}
		
		//get round start
		//setting the real position 
		$mid = round( $l + ( $col * ($r - $l)));
		
		if( $list[$mid] < $target){
			$l += 1;
		}
		else if( $list[$mid] > $target)
		{
			$r -= 1;
		}else{
			echo 'find it';
		}
	  }
  }
  

?>
