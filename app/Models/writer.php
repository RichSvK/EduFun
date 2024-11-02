<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class writer extends Model
{
    use HasFactory;
    protected $table = 'writers';
    protected $guarded = [];

    public $incrementing = true;
    public $timestamps = true;
    protected $primaryKey = 'id';

    public function articles(): HasMany{
        return $this->hasMany(Article::class, 'writer_id', 'id');
    }
}
