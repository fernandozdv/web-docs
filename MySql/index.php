<?php  
	/*$enlace =mysqli_connect("localhost","root","","usuarios");
	if(!$enlace)
	{
		echo "ERROR";
	}
	else
	{
		echo "ÉXITO!";
	}
	mysqli_close($enlace);*/
class Foo { 
    public $aMemberVar = 'aMemberVar Member Variable'; 
    public $aFuncName = 'aMemberFunc'; 
    
    
    function aMemberFunc() { 
        print 'Inside `aMemberFunc()`'; 
    } 
} 

$foo = new Foo; 

$element = 'aMemberVar'; 
print $foo->aMemberFunc();
print $foo->aMemberVar;
print $foo->{$foo->aFuncName}();



 ?>