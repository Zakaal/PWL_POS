<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'levels'; // Nama tabel yang digunakan oleh model ini

    protected $primaryKey = 'id'; // Nama primary key dari tabel yang digunakan oleh model ini

    protected $fillable = [
        'name', // Kolom yang dapat diisi secara massal
        'description',
    ];

    // Jika ada relasi dengan model lain, Anda dapat mendefinisikannya di sini
    public function users()
    {
        return $this->hasMany(UserModel::class);
    }
}
