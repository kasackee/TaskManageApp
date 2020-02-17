<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Task
 *
 * @property int $id タスクID
 * @property int $project_id プロジェクトID
 * @property string $title タイトル
 * @property string|null $detail 詳細
 * @property string $status ステータス（未着手、進行中、解決済み、完了、保留）
 * @property int $priority 優先度
 * @property string|null $start_date 開始日
 * @property string|null $end_date 期限日
 * @property int|null $user_id 担当者ID
 * @property int|null $parent_task_id 親タスクID
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read \App\Project $projects
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereDetail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereParentTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Task whereUserId($value)
 * @mixin \Eloquent
 */
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
