<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
   //mass assignment
   // protected $fillable = ['name','email','active'];  // Fillaable
    protected $guarded = []; // blank array means all data must be fillable and if we pass data thats means this is not fillable 
    
    // Relationship between customer table and compny table

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    // Mutators - get+others (getSomething) & get must be small letter
    public function getActiveAttribute($attribute)   
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 =>'Part Time',
        ][$attribute];
    }
}
