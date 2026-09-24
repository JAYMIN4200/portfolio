<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    public const STATUSES = ['pending', 'confirmed', 'completed', 'cancelled'];

    public const SOURCES = ['public', 'admin'];

    public const TOPICS = ['Project Discussion', 'Website Design', 'Web Development', 'Mobile App Development', 'Consulting', 'Collaboration', 'Career Advice'];

    public const TOPIC_OTHER = 'other';

    protected $fillable = ['name', 'email', 'phone', 'company', 'meeting_date', 'meeting_time', 'duration', 'topic', 'notes', 'status', 'source'];

    protected function casts(): array
    {
        return [
            'meeting_date' => 'date',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function scopeStatus($query, ?string $status)
    {
        return $status ? $query->where('status', $status) : $query;
    }

    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }
}