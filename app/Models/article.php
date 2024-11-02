<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $guarded = [];
    public $incrementing = true;
    public $timestamps = true;
    protected $primaryKey = 'id';

    public function writer(): BelongsTo{
        return $this->belongsTo(Writer::class);
    }
}
