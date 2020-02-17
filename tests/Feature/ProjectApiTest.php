<?php

namespace Tests\Feature;

use App\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class ProjectApiTest extends TestCase
{
    // データベース初期化
    use RefreshDatabase;

    protected $projects;

    /**
     * テスト開始前の処理
     */
    public function setUp(): void
    {
        parent::setUp();

        // fakerでダミーデータ作成
        factory(Project::class, 9)->create();
    }

    /**
     * テスト終了後の処理
     * @throws \Throwable
     */
    public function tearDown(): void
    {
        // DBのリフレッシュ
        Artisan::call('migrate:refresh');
        parent::tearDown();
    }

    /**
     * projectを取得できるか確認
     * @test
     * @return void
     */
    public function apiGet()
    {
        $response = $this->get('/api/project');
        Log::debug($response->json());

        $response->status();
        $response->assertStatus($response->status());
    }
}
