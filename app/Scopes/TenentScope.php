<?php
 
namespace App\Scopes;
 
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
 
class TenentScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        //$builder->where('tenent_id', '<', now()->subYears(2000));
        if(session()->has('tenent_id'))
        {
            $builder->where('tenent_id', session()->get('tenent_id'));
        }
     
    }
}