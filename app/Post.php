<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    public $fillable=['title','cover_img','content', 'category_id'];
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
