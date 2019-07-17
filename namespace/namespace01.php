<?php

namespace app\main {

class ClassA {
    
    public function show() {
        echo " class A <br>";
    }
    
}

class ClassB {
    
      public function show() {
         echo " class B <br>";
    }
}

}

namespace app\lib {
    class ClassC {
    
      public function show() {
         echo " class C <br>";
    }
}
}

namespace { //global namespace
    
use app\main\ClassA;
use app\main\ClassB;

var_dump(new ClassA);
var_dump(new ClassB);

}