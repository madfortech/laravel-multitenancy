<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\TenentScope;

class Department extends Model
{
    use HasFactory;

    protected $gurared = [

    ];
     

    protected $fillable = [
        'name',
       
    ];

    protected static function booted(): void
    {
        static::addGlobalScope(new TenentScope);
        static::creating(function ($department) {

            if(session()->has('tenant_id'))
            {

                $department->tenant_id = session()->get('tenant_id'); 
            }
       });
    }
}
