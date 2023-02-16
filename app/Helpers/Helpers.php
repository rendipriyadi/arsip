<?php

use Illuminate\Support\Facades\Route;

//buat helper untuk menu agar mendapat class aktif saat route dipilih
function isActive($routeNames)
{
    if (is_array($routeNames)) {
        foreach ($routeNames as $routeName) {
            if (Route::currentRouteName() == $routeName) {
                return 'active';
            }
        }
    } else {
        if (Route::currentRouteName() == $routeNames) {
            return 'active';
        }
    }

    return '';
}
