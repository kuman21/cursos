<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{User,Post};

class Course extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the course.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the posts for the course.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the similar courses.
     */
    public function similar()
    {
        return $this->where('category_id', $this->category_id)->with('user')->take(2)->get();
    }

    /**
     * Get the course's excerpt.
     *
     * @return string
     */
    public function getExcerptAttributte()
    {
        return substr($this->description, 0, 80) . '...';
    }
}
