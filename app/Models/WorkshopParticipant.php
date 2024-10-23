<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkshopParticipant extends Model
{
    use HasFactory, SoftDeletes;

   protected $table = 'workshop_participants';

    protected $fillable = [
        'name',
        'occupation', 
        'email', 
        'wokshop_id',
        'booking_transaction_id',
    ];

    public function workshop(): BelongsTo
    {
        return $this->belongsTo(Workshop::class, 'booking-transaction_id');
    }
}