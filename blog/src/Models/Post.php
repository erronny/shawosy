<?php
namespace Shawosy\Blog\Models;

use App\User;
use Shawosy\Blog\Models\Tag;
use Shawosy\Blog\Models\Comment;
use Shawosy\Blog\Models\Category;
use Shawosy\Blog\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $table = ('posts');
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if(is_null($post->user_id)) {
                $post->user_id = auth()->user()->id;
            }
        });

        static::deleting(function ($post) {
            // $post->comments()->delete();
            // $post->tags()->detach();
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeDrafted($query)
    {
        return $query->where('is_published', false);
    }

    public function getPublishedAttribute()
    {
        return ($this->is_published) ? 'Yes' : 'No';
    }

    public function getEtagAttribute()
    {
        return hash('sha256', "product-{$this->id}-{$this->updated_at}");
    }
}
