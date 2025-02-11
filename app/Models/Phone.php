<?php

namespace App\Models;

use App\Scopes\TenentScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

     protected static function booted(): void
    {
        static::addGlobalScope(new TenentScope);
        static::creating(function ($model) {

            if(session()->has('tenant_id'))
            {

                $model->tenant_id = session()->get('tenant_id'); 
            }
       });
    }
}
