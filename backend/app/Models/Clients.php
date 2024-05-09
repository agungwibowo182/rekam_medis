<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Clients extends Model
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
        'row_status',
        'client_name',
        'client_phone',
        'client_email',
        'client_address',
        'client_groups',
        'created_by',
        'updated_by'
    ];
}
