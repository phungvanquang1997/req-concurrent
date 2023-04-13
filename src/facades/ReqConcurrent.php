<?php

namespace Http\ReqConcurrent\Facades;

use Illuminate\Support\Facades\Facade;
use Http\ReqConcurrent\ReqConCurrent;

class ReqConcurrent extends Facade
{
   /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        self::clearResolvedInstance(ReqConCurrent::class);

        return ReqConCurrent::class;
    }
}