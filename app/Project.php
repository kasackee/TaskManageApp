<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * プロジェクトに所属するユーザー
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    /**
     * 課題テーブル
     */
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
