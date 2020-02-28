<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Comment
 *
 * @property int $id コメントID
 * @property int $project_id プロジェクトID
 * @property string $user_id コメント記入者
 * @property string $message コメント内容
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Task $tasks
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUserId($value)
 * @mixin \Eloquent
 */
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
