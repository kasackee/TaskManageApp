<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 255)->comment('プロジェクト名');
            $table->text('description')->nullable()->comment('プロジェクト概要');
            $table->bigInteger('create_user_id')->comment('プロジェクト作成者');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('users_projects', function (Blueprint $table) {
            $table->bigInteger('user_id')->comment('ユーザーID');
            $table->bigInteger('project_id')->comment('プロジェクトID');
            $table->enum('roll_type', ['administrator', 'member'])->comment('権限（管理者、メンバー）');
            $table->primary(['user_id', 'project_id']);
        });

        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('タスクID');
            $table->bigInteger('project_id')->comment('プロジェクトID');
            $table->char('title', 255)->comment('タイトル');
            $table->text('detail')->nullable()->comment('詳細');
            $table->enum('status', ['not_started', 'in_progress', 'resolved', 'completed', 'pending'])->comment('ステータス（未着手、進行中、解決済み、完了、保留）');
            $table->smallInteger('priority')->comment('優先度');
            $table->date('start_date')->nullable()->comment('開始日');
            $table->date('end_date')->nullable()->comment('期限日');
            $table->bigInteger('user_id')->nullable()->comment('担当者ID');
            $table->bigInteger('parent_task_id')->nullable()->comment('親タスクID');
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('コメントID');
            $table->bigInteger('project_id')->comment('プロジェクトID');
            $table->text('user_id')->comment('コメント記入者');
            $table->text('message')->comment('コメント内容');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
        Schema::dropIfExists('users_projects');
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('comments');
    }
}
