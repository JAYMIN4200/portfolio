<?php

namespace App\Models;

use Database\Factories\PaymentFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    /** @use HasFactory<PaymentFactory> */
    use HasFactory;

    public const STATUS_RECEIVED = 'received';

    public const STATUS_PENDING = 'pending';

    public const STATUSES = [
        self::STATUS_RECEIVED => 'Received',
        self::STATUS_PENDING => 'Pending',
    ];

    public const METHODS = [
        'cash' => 'Cash',
        'bank_transfer' => 'Bank Transfer',
        'upi' => 'UPI',
        'cheque' => 'Cheque',
        'card' => 'Card',
        'other' => 'Other',
    ];

    protected $fillable = [
        'client_id',
        'amount',
        'payment_date',
        'method',
        'status',
        'reference',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'amount' => 'decimal:2',
            'payment_date' => 'date',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function methodLabel(): string
    {
        return $this->method ? (self::METHODS[$this->method] ?? ucfirst($this->method)) : '—';
    }

    public function statusLabel(): string
    {
        return self::STATUSES[$this->status] ?? ucfirst((string) $this->status);
    }

    public function scopeStatus(Builder $query, ?string $status): Builder
    {
        return $status ? $query->where('status', $status) : $query;
    }

    public function scopeMethod(Builder $query, ?string $method): Builder
    {
        return $method ? $query->where('method', $method) : $query;
    }

    public function scopeReceived(Builder $query): Builder
    {
        return $query->where('status', self::STATUS_RECEIVED);
    }

    public function scopePending(Builder $query): Builder
    {
        return $query->where('status', self::STATUS_PENDING);
    }
}
