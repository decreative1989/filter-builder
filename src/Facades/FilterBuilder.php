<?php
/**
 * Created by   : Ade Sanusi.
 * Signature    : bac1bad249559aa8c829adf5c08ae8d906991cfc
 * Email        : sansan.adesanusi@gmail.com
 * Date         : 2019-10-29
 * Time         : 16:50:17
 * Copyright    : MIT Licences © 2019
 */

namespace SanSan\FilterBuilder\Facades;

use Illuminate\Support\Facades\Facade;

class FilterBuilder extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'filterbuilder';
    }
}
