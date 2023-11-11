<?php

namespace App\Http\Controllers\Api\Memo;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MemoRequest;
use App\Models\Memo;

class MemoController extends Controller
{
    
    public function store(MemoRequest $request): JsonResponse
    {
        return response()->json([
            'message' => '登録完了',
        ]);
    }
}
