<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class LogUpdate extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function students(): MorphTo
    {
        return $this->morphTo();
    }
}
