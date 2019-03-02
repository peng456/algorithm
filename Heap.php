<?php
// 大根堆的实现。利用PHP 的SPL  (http://php.net/manual/en/class.splmaxheap.php)
class MySimpleHeap extends SplHeap
{
    public function  compare( $value1, $value2 ) {
        return ( $value1 - $value2 );
    }
}

$obj = new MySimpleHeap();
$obj->insert( 4 );
$obj->insert( 8 );
$obj->insert( 1 );
$obj->insert( 0 );

foreach( $obj as $number ) {
    echo $number."\n";
}
