<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     * 課題テーブル
     */
    public function tasks()
    {
        return $this->belongsTo('App\Task');
    }
}
