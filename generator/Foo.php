<?php
namespace Generator;

class Foo
{
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';

    public function aMemberFunc($action = 'default')
    {
        print 'Inside `aMemberFunc()`';
        return $action . ' ok';
    }
}
