<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_colors');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_sizes');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    // Mutator for name attribute
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = json_encode([
            'name_ar' => $value['name_ar'],
            'name_en' => $value['name_en'],
        ]);
    }

    // Accessor for name_ar attribute
    public function getNameArAttribute($value)
    {
        $name = json_decode($this->attributes['name']);
        return $name->name_ar;
    }

    // Accessor for name_en attribute
    public function getNameEnAttribute($value)
    {
        $name = json_decode($this->attributes['name']);
        return $name->name_en;
    }

    // Mutator for name attribute
    public function setDetailsAttribute($value)
    {
        $this->attributes['details'] = json_encode([
            'details_ar' => $value['details_ar'],
            'details_en' => $value['details_en'],
        ]);
    }

    // Accessor for name_ar attribute
    public function getDetailsArAttribute($value)
    {
        $details = json_decode($this->attributes['details']);
        return $details->details_ar;
    }

    // Accessor for name_en attribute
    public function getDetailsEnAttribute($value)
    {
        $details = json_decode($this->attributes['details']);
        return $details->details_en;
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($product) {
            $product->images()->delete();
        });
    }
}
