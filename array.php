<?php
// this is the collection of data
class MyCollection implements IteratorAggregate
{
    private $items = array();
    private $count = 0;

    // Required definition of interface IteratorAggregate
    public function getIterator() {
        return new MyIterator($this->items);
    }

    public function add($value) {
        $this->items[$this->count++] = $value;
    }
}

//these are required methods to enable itteration through an object using a foreach loop.
class MyIterator implements Iterator
{
    private $var = array();

    public function __construct($array)
    {
        if (is_array($array)) {
            $this->var = $array;
        }
    }

    public function rewind()
    {
        echo "rewinding\n";
        reset($this->var);
    }
  
    public function current()
    {
        $var = current($this->var);
        echo "current: $var\n";
        return $var;
    }
  
    public function key() 
    {
        $var = key($this->var);
        echo "key: $var\n";
        return $var;
    }
  
    public function next() 
    {
        $var = next($this->var);
        echo "next: $var\n";
        return $var;
    }
  
    public function valid()
    {
        $key = key($this->var);
        $var = ($key !== NULL && $key !== FALSE);
        echo "valid: $var\n";
        return $var;
    }

}

ini_set('display_errors', 'On');
$coll = new MyCollection();
$coll->add('value 1');
$coll->add('value 2');
$coll->add('value 3');

foreach ($coll as $key => $val) {
    echo "key/value: [$key -> $val]\n\n";
}
?>
