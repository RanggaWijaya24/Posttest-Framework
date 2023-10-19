<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = [ 'nama', 'harga', 'jenis', 'supplier','supplier_id'];
    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}
