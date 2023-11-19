<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Service;

class Assistant extends Model
{
    use HasFactory;

    public $with = ['services'];

    /**
     * Get the services for the assistant.
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
