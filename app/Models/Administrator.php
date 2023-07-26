<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;
    protected $table = "table_administrator";
    protected $primaryKey = "id_adm";
    protected $guarded = [''];
    protected $keyType = "string";
}
