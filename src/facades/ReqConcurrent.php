<?php

namespace Http\ReqConcurrent\Facades;

use Illuminate\Support\Facades\Facade;
use Http\ReqConcurrent\ReqConcurrent as RequestCocurrent;

class ReqConcurrent extends Facade
{
   /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        self::clearResolvedInstance(RequestCocurrent::class);

        return RequestCocurrent::class;
    }
}