<?php

namespace App\Models;

use App\Actions\Translation\TranslationAction;

use App\Traits\HasTranslationAuto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use HasTranslationAuto;

    protected $fillable = ['parent_id', 'published', 'slug', 'type'];


    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    private array $translatable = ['title'];




}
