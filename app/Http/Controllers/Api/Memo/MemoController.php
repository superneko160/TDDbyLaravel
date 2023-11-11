<?php

namespace App\Http\Controllers\Api\Memo;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MemoController extends Controller
{
    
    public function store(Request $request): JsonResponse
    {
        $title = $request->get('title');
        $content = $request->get('content');
 
        if ($title === null || $content === null) {
            return response()->json([
                'message' => '登録失敗',
            ]);
        }
 
        // メモの作成処理を実装
        // ここでは、まだDBに接続しないため、処理を省略しています
 
        return response()->json([
            'message' => '登録完了',
        ]);
    }
}
