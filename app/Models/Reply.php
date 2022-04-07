<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get the ask associated with the Reply
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ask()
    {
        return $this->hasOne(Ask::class);
    }

    /**
     * Get the user that owns the Reply
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
