<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/tenancy/assets/{path?}', 'Stancl\Tenancy\Controllers\TenantAssetsController@asset')
    ->where('path', '(.*)')
    ->name('stancl.tenancy.asset');

Route::get('tenancy/shell', 'Stancl\Tenancy\Controllers\TenantBaseController@shell');
