<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    // protected $table = "app_companies";
    // protected $primaryKey = "_id";
    protected $fillable = ['name', 'email', 'address', 'website'];

    public function contacts()
    {
    return $this->hasMany(Contact::class);
    }

}