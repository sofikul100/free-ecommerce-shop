<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Categorie;
class SubCategorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_name',
        'subcategory_slug'
    ];

    public function getSubcategoryNameAttribute ($subcategory_name){
        return  ucfirst($subcategory_name);
    }

    public function getSubcategorySlugAttribute($category_slug){
        return ucfirst($category_slug);
    }

    public function category (){
        return $this->belongsTo(Categorie::class);
    }
}
