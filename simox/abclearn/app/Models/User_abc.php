<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User_abc extends Model
{
    use HasFactory;
    protected $fillable=['nm','np','email','abclearn_id'];

    /**
     * Get the user that owns the User_abc
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function abclearn(): BelongsTo
    {
        return $this->belongsTo(Abclearn::class, 'abclearn_id');
    }
}
