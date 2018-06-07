<?php
namespace test;

class Foo
{
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';

    public function aMemberFunc()
    {
        print 'Inside `aMemberFunc()`';
    }
}

$foo = new Foo;
