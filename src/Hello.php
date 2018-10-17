<?php
namespace Mosagx;

use Mosagx\TestPackageInterface;

class Hello implements TestPackageInterface
{
    public static function PHP()
    {
        return 'Hello PHP. This is my composer package !';
    }

    public static function test()
    {
        return ['code' => 200, 'msg' => 'Test package success !'];
    }
}