<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Asset;

use Illuminate\Http\Request;

use App\Http\Requests;

class AssetController extends Controller
{

    public function __construct()
    {
        // 执行 auth 认证
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = Asset::orderBy('created_at', 'asc');
        return $this->pagination($query->paginate());
    }

    public function store(Request $request)
    {
        return $this->failure();
    }

    public function show(Request $request, $event_id)
    {
        return $this->success($data);
    }

    public function update(Request $request)
    {
        return $this->failure();
    }

    public function destroy(Request $request)
    {
        return $this->failure();
    }

}