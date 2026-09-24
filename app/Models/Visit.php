<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = ['path', 'ip_hash', 'user_agent', 'visit_date'];

    protected function casts(): array
    {
        return [
            'visit_date' => 'date',
        ];
    }
}
