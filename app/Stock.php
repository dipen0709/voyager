<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [];
    
    public function companyId(){
        return $this->belongsTo(Company::class,'company_id');
    }
    public function productId(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
