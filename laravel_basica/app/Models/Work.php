<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    public function client() {
        return $this->belongsTo( \App\Models\Client::class);
    }

    public function tags() {
        return $this->belongsToMany(\App\Models\Tag::class, 'works_has_tags');
    }
}
