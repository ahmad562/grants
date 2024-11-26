<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class ModulesModel extends Model
{
    use HasFactory;


    protected $table = 'modules';

    protected $fillable = [
        'name',
        'status',
    ];

    public function permission()
    {
        return $this->hasMany(Permission::class, 'module_id');
    }

}

