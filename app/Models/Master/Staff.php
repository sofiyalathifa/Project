<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $fillable = ['name', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'jenis_kelamin', 'position_id', 'departement_id', 'no_hp'];
    protected $dates = ['deleted_at'];

    public function getNameAttribute($name)
    {
        return strtoupper($name);
    }

    public function getAddresAttribute($name)
    {
        return ucfirst($name);
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
