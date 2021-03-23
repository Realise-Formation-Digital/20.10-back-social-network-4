<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city_name',
        'price_life',
        'internet_good',
        'city_save',
        'language',  
        'apartment_easy',
        'amusement',
        'country',  
        'continent',       
        'description',
        'image_city'      
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
  //  protected $casts = [
  //      'email_verified_at' => 'datetime',
 //   ];

 public function user()
 {
     return $this->belongsToMany(User::class);
 }

 public function like()
 { 
     return $this->belongsToMany(Like::class); 
 }

 public function comment()
 { 
     return $this->belongsToMany(Comment::class); 
 }
}