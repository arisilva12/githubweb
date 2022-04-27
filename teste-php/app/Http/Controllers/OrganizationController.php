<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Organization;

class OrganizationController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->has('search') ? $request->search : NULL;
        $active = $request->has('active') ? $request->active : NULL;

        $users = DB::table('users');

        if (!is_null($search)) {
            $users = $users->where('name', '=', $active);
        }

        if (!is_null($active)) {
            $users = $users->where('active', '=', $active);
        }

        if (!is_null($active)) {
            $users = $users->where('active', '=', $active);
        }

        if (!is_null($active)) {
            $users = $users->where('active', '=', $active);
        }

        $users = $users->orderByDesc('createdAt')->select('name', 'email', 'active')->get();

        echo json_encode($users);
        exit;
    }
}
