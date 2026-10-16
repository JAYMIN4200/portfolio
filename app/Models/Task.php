<?php

namespace App\Models;

use Carbon\Carbon;
use Database\Factories\TaskFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    /** @use HasFactory<TaskFactory> */
    use HasFactory;

    public const STATUSES = [
        'pending' => 'Pending',
        'in_progress' => 'In Progress',
        'done' => 'Done',
        'hold' => 'On Hold',
    ];

    public const PRIORITIES = [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ];

    public const CATEGORIES = [
        'Development',
        'Design',
        'Content',
        'SEO',
        'Marketing',
        'Maintenance',
        'Admin',
        'Other',
    ];

    protected $fillable = [
        'user_id',
        'title',
        'category',
        'description',
        'priority',
        'status',
        'due_date',
        'completed_at',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'due_date' => 'date',
            'completed_at' => 'datetime',
            'is_active' => 'boolean',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    public function scopeStatus(Builder $query, ?string $status): Builder
    {
        if ($status && $status !== 'all') {
            return $query->where('status', $status);
        }

        return $query;
    }

    public function scopePriority(Builder $query, ?string $priority): Builder
    {
        return $priority ? $query->where('priority', $priority) : $query;
    }

    public function scopeCategory(Builder $query, ?string $category): Builder
    {
        return $category ? $query->where('category', $category) : $query;
    }

    public function scopeDueOn(Builder $query, ?string $date): Builder
    {
        return $date ? $query->whereDate('due_date', $date) : $query;
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query
            ->orderByRaw('due_date IS NULL')
            ->orderBy('due_date')
            ->orderByRaw("CASE priority WHEN 'high' THEN 0 WHEN 'medium' THEN 1 ELSE 2 END")
            ->orderByDesc('id');
    }

    public function statusLabel(): string
    {
        return self::STATUSES[$this->status] ?? ucfirst((string) $this->status);
    }

    public function priorityLabel(): string
    {
        return self::PRIORITIES[$this->priority] ?? ucfirst((string) $this->priority);
    }

    public function statusColor(): string
    {
        return match ($this->status) {
            'done' => 'green',
            'in_progress' => 'blue',
            'hold' => 'amber',
            default => 'slate',
        };
    }

    public function priorityColor(): string
    {
        return match ($this->priority) {
            'high' => 'red',
            'low' => 'slate',
            default => 'amber',
        };
    }

    public function isOverdue(): bool
    {
        return (bool) (
            $this->due_date
            && $this->status !== 'done'
            && $this->due_date->isPast()
            && ! $this->due_date->isToday()
        );
    }

    public function daysRemaining(): ?int
    {
        if (! $this->due_date) {
            return null;
        }

        return (int) Carbon::today()->diffInDays($this->due_date, false);
    }
}
