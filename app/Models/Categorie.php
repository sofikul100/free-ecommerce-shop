<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategorie;
use Carbon\Carbon;
class Categorie extends Model
{
    protected $fillable = [
        'name',
        'category_slug',
        'created_at'
    ];
    use HasFactory;


    public function getNameAttribute ($name){
        return  ucfirst($name);
    }

    public function getCategorySlugAttribute($category_slug){
        return ucfirst($category_slug);
    }


    public function getCreatedAtAttribute(){
        return  Carbon::parse($this->attributes['created_at'])->diffForHumans();
    }
    public function getUpdatedAtAttribute(){
        return  Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }

    public function subcategory(){
        return $this->hasMany(SubCategorie::class,'category_id','id');
    }
     
    
    
}
