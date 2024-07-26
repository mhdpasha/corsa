<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IncomingRequest extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function requestor(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function receiver(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function message(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    public function getSimpleCreatedAtAttribute()
    {
        return $this->created_at->translatedFormat('j / F / Y');
    }

    public function getDetailedCreatedAtAttribute()
    {
        return $this->created_at->translatedFormat('j/m/y');
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}             


// l = hari
// j = tanggal
// F = bulan
// Y = tahun
