<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    public const CATEGORIES = ['Hosting', 'Software', 'Marketing', 'Office', 'Equipment', 'Travel', 'Food', 'Other'];

    protected $fillable = ['title', 'amount', 'category', 'expense_date', 'notes'];

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
            'expense_date' => 'date',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function scopeCategory($query, ?string $category)
    {
        return $category ? $query->where('category', $category) : $query;
    }
}