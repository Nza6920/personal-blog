<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use Traits\HashIdHelper;

    protected $fillable = ['title', 'body'];

    protected $dates = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
