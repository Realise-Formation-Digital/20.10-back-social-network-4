<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comments',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'post_id',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
  //  protected $casts = [
  //      'email_verified_at' => 'datetime',
 //   ];

 public function post()
 {
     return $this->belongsToMany(Post::class);
 }

 public function user()
 { 
     return $this->belongsToMany(User::class); 
 }
}
