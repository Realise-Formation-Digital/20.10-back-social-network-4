<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'job',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
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

 public function like()
 { 
     return $this->hasMany(Like::class); 
 }

 public function comment()
 { 
     return $this->belongsToMany(Comment::class); 
 }
}
