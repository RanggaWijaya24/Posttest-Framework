<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $fillable = ['no', 'nama'];
    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class);
    }
}
