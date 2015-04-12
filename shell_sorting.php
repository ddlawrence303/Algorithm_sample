<?
// shell sorting
  
  function shell_sorting(/*array*/ $list )
  {
	$size = count($list);
	
	//setting the sec to be the custom shell dimen
	$sec = floor( $size/ 2 );
	
	for( $i = $sec; $i > -1; $i++){
		$tmp = $list[ $i ]; //value
		$key = $i; // index
		
		//loop every item
		while( $key >=0 && $list[ $key - $sec ] < $tmp ){
			//swap data
			$list[ $key ] = $list[ $key - $sec ];
			$key -= $sec;
		}
		$list[$key] = $tmp;
	}
  }
  

    
  //main logic
  $list = array(60, 50, 90, 100, 45, 11);
  
  //execute quick sorting
  $res = shell_sorting($list);
  
  var_dump( $res );
  
?>
