<?

* binary search tree */
  class Node
  {
	private $data;
	private $key;
	private $parent;
	private $left;
	private $right;
	
	//constructor
	public function __construct( $key, $data)
	{
		$this->data = $data;
		$this->key = $key;
	}
	
	public function setParent($node, $root){
		$node->parent = $root;
	}
	  
	public function __toString(){
		var_dump($this->$data);
	}  
  }
  
  
  class BinaraySearchTree
  {
	  //setting root
	  private $root;
	  
	  public function __construct(){
		  //do sothing
	  }
	  
	  
	  // insert function implement
	  public function insert( $node ){
		  
	  }
	  
	  // search function implement
	  public function search( $target ){
		  
	  }
  }
  
  
?>
