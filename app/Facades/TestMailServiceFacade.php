<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TestMailServiceFacade  extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'testmailservice';
    }
}
?>