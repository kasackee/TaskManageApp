<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * コメントテーブル
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * プロジェクトテーブル
     */
    public function projects()
    {
        return $this->belongsTo('App\Project');
    }
}
