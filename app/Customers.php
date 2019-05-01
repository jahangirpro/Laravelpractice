<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
 
   // protected $fillable = ['name','email','active'];  // Fillaable
    protected $guarded = []; // blank array means all data must be fillable and if we pass data thats means this is not fillable 
    public function scopeActive($query)//scope must be small letter
    {
        return $query->where('active','1');
    }

    public function scopeInactive($query)
    {
        return $query->where('active','0');
    }

    public function scopeParttime($query)
    {
        return $query->where('active','2');
    }
}
