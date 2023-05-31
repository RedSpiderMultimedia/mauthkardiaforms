<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assessment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'members' => 'array',
        'type_of_help' => 'array',
        'substances_used' => 'array',
        'psych_medications' => 'array',
        'suicide_attempts' => 'array',
        'psych_hospitalizations' => 'array',
        'med_hospitalizations' => 'array',
        'child_conditions' => 'array',
        'family_stressors' => 'array',

    ];
}
