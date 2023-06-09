<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Abclearn extends Model
{
    use HasFactory;
    protected $fillable=['name','niveau','photo'];
    /**
     * Get all of the comments for the User_abc
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User_abc::class, 'abclearn_id');
    }
}
