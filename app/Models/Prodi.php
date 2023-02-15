<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function nameToStripe($name)
    {
        return str_replace(' ', '-', $name);
    }
}
