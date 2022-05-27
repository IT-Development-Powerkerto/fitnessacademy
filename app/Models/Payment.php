<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['payment_detail'];

    /**
     * Get the user that owns the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }



    /**
     * Get all of the comments for the Payment
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payment_detail()
    {
        return $this->hasMany(PaymentDetail::class);
    }





}
