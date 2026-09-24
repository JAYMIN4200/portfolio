<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public const STATUSES = ['lead', 'active', 'completed', 'inactive'];

    protected $fillable = ['name', 'company', 'email', 'phone', 'project_type', 'status', 'notes'];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function scopeStatus($query, ?string $status)
    {
        return $status ? $query->where('status', $status) : $query;
    }
}