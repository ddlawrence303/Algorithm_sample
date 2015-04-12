<?


  
  function heap_sorting(/*array*/ $list)
  {
	// build heap construct
	$size = count($list);
	build_heap( $list, $size );
	
	while( $size-- ){
		//swap items
		$temp = $list[ $size ]; //get the largest one
		$list[$size] = $list[0];
		$list[0] = $temp;
		//recursive to build heap 
		build_heap($list, $size);
	}
	
  }
  
  function build_heap( /*list data*/ $list, /*length*/ $size )
  {
	//loop every item in the list
	for( $i = 0; $i < $size; $i ++ ){
		$current = $i;
		heapify( $list, $current, $size);
	}
  } 
  
  
  function heapify( /*list data*/ $list, /*index*/ $current, /*length*/ $size )
  {
	//item
	$left = ($current * 2 ) + 1;
	$right = ($current * 2 ) + 2;
	
	//comparasion data => big heap
	$largest = '';
	if( $list[$current] < $list[ $left ]){
		$largest = $left;
	}else{
		$largets = $current;
	}
	
	if( $list[$largest] < $list[ $right ]){
		$largest = $right;
	}
	
	//check index and swap data
	if( $largest !== $current ){
		$tmp = $list[ $current ];
		$list[ $current ] = $list[ $largest ];
		$list[ $largest ] = $tmp;
	}
  }
  
    //main logic
  //heap sorting
  $list = array(5, 6, 9, 10, 8);
  
  //execute heap sorting
  heap_sorting($list);
  
  var_dump( $list );
  
  
?>
