<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreActionTest extends TestCase
{

    public function testStoreSuccess(): void
    {
        $requestData = [
            'title' => 'タイトル',
            'content' => 'メモ内容'
        ];
        $url = route('memo.store');
        $this->post($url, $requestData)
            ->assertJson(
                [
                    'message' => '登録完了'
                ]
            );
    }

    public function testStoreFailed(): void
    {
        $requestData = [
            'title' => '',
            'content' => 'メモ内容'
        ];
        $url = route('memo.store');
        $this->post($url, $requestData)
            ->assertJson(
                [
                    'message' => '登録失敗'
                ]
            );
    }
}
