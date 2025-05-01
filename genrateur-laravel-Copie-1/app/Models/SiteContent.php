<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    protected $fillable = ['site_generator_id', 'content', 'premium'];

    protected $casts = [
        'content' => 'array',
        'premium' => 'boolean'
    ];

    public function site()
    {
        return $this->belongsTo(SiteGenerator::class, 'site_generator_id');
    }
}
