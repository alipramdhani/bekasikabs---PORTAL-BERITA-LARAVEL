<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataAdmin extends Model implements Authenticatable
{
    use HasFactory;
    protected $table = 'data_admins';
    protected $primaryKey = 'id_admin';
    use AuthenticableTrait;

    protected $fillable = [
        'id_admin', 'nama', 'username', 'email', 'password',
    ];
}
