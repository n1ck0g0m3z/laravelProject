<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id'//Temporary
    ];
    
    protected $dates = ['published_at'];
    
    //scope____
    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }
    
    public function scopeUnpublished($query)
    {
        $query->where('published_at','>=',Carbon::now());
    }
    
    //set____Attribute
    public function setPublishedAtAttribute($date)
    {
        //$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
        $this->attributes['published_at'] = Carbon::parse($date);
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
