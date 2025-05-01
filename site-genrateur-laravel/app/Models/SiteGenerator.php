<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteGenerator extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_description',
        'site_colors',
        'logo_url',
        'contact_email',
        'contact_phone',
        'address',
        'footer_info',
        'template_type', 
        'user_id'
    ];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Relation avec le contenu du site
    public function content()
    {
        return $this->hasOne(SiteContent::class);
    }
}
