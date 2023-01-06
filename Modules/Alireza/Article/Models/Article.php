<?php

namespace Alireza\Article\Models;

use Alireza\Category\Models\Category;
use Alireza\Comment\Models\Comment;
use Alireza\User\Models\User;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelLike\Traits\Likeable;

class Article extends Model implements Viewable
{
    use HasFactory, InteractsWithViews, Likeable;

    protected $fillable = [
        'user_id', 'category_id', 'title', 'slug', 'time_to_read', 'imageName', 'imagePath', 'score', 'status',
        'type', 'body', 'keywords', 'description',
    ];


    public const STATUS_ACTIVE = 'active';
    public const STATUS_PENDING = 'pending';
    public const STATUS_INACTIVE = 'inactive';

    public static array $statuses = [self::STATUS_ACTIVE, self::STATUS_PENDING, self::STATUS_INACTIVE];

    public const TYPE_VIP = 'vip';
    public const TYPE_NORMAL = 'normal';


    public static array $types = [self::TYPE_VIP, self::TYPE_NORMAL];


    public function user(){
        return $this->belongsTo(User::class, 'user_id');

    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');

    }
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function activeComments(){
        return $this->morphMany(Comment::class, 'commentable')
            ->where('status', Comment::STATUS_ACTIVE)
            ->with('comments')->whereNull('comment_id');
    }
    public function cssStatus(){
        if ($this->status === self::STATUS_ACTIVE) return 'success';
        else if ($this->status === self::STATUS_INACTIVE) return 'danger';
        else return 'warning';


    }

    public function path(){
        return route('articles.details',$this->slug);
    }
    public function getCommentCount(){
        if (is_null($this->comments)) return 0;
        return $this->comments->count();
    }
}
