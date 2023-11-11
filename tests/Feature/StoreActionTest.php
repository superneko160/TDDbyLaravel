<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreActionTest extends TestCase
{
    use RefreshDatabase;

    public function testStoreSuccess(): void
    {
        $requestData = [
            'title' => 'タイトル',
            'content' => 'メモ内容'
        ];
        $url = route('memo.store');

        // assertion1
        $this->post($url, $requestData)
            ->assertJson(
                [
                    'message' => '登録完了'
                ]
            );

        // assertion2
        // memosテーブルに以下のデータが登録されているか検証
        $this->assertDatabaseHas('memos', [
            'title' => 'タイトル',
            'content' => 'メモ内容'
        ]);
    }

    public function testStoreFailed(): void
    {
        $requestData = [
            'title' => '',
            'content' => 'メモ内容'
        ];
        $url = route('memo.store');

        // assertion3
        $this->post($url, $requestData)
            ->assertJson(
                [
                    'message' => '登録失敗'
                ]
            );
    }
}
