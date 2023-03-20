<?php

namespace App\Traits;

/**
 * trait DumpAndDie
 * @package App\Traits
 */
trait DumpAndDie
{
    /**
     * /endpoint?debug=1
     * @param $var
     * @return void
     */
    public function debug($var): void
    {
        if (request()->input('debug') && config('app.env') != 'production') {
            dd($var);
        }
    }
}
