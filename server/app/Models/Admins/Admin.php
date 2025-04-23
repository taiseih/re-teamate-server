<?php

namespace App\Models\Admins;

use AdminBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public $guarded = 'admin';

    public function newEloquentBuilder($query): AdminBuilder
    {
        return new AdminBuilder($query);
    }
}
