<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Rsvp extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    public $incrementing = false;

    public static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    /**
     * fillable
     *
     * @var array
    */
    protected $fillable = [
        'client_id',
        'event_id',
        'barcode_id',
        'feedback_id',
        'breakout_id',
        'room_id',
        'customer_name',
        'company_name',
        'title',
        'email',
        'phone_number',
        'phone_office',
        'address_office',
        'city',
        'walk_in',
        'is_attend',
        'is_verified',
        'is_rejected',
        'row_status',
        'created_by',
        'updated_by'
    ];
}
