<?php

namespace App\Models;

use Spatie\Image\Manipulations;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;

class product extends Model implements HasMedia

{
    use HasFactory;
    use SoftDeletes;
    use HasRoles;
    use HasApiTokens;
    use InteractsWithMedia;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [
    ];

    protected $casts = [
        "category" => 'array',
        'allergens' => 'array',


     ];

     public function registerMediaConversions(Media $media = null): void
     {

         $this->addMediaConversion('fotos')
               ->performOnCollections('escortfotos')
               ->width(368)
               ->height(232)
               ->sharpen(10)
               ->withResponsiveImages()
               ->nonQueued();

         $this->addMediaConversion('thumbs-fotos')
               ->performOnCollections('escortfotos')
               ->crop('crop-center', 90, 40) // Trim or crop the image to the center for specified width and height.
               ->border(1, 'black', Manipulations::BORDER_OVERLAY)
               ->sharpen(10)
               ->nonQueued();

         $this->addMediaConversion('hintergrund')
               ->performOnCollections('escorthintergrund')
               ->width(368)
               ->height(232)
               ->sharpen(10)
               ->nonQueued();

         $this->addMediaConversion('thumbs-hintergrund')
               ->performOnCollections('escorthintergrund')
               ->crop('crop-center', 60, 80) // Trim or crop the image to the center for specified width and height.
               ->border(2, 'red', Manipulations::BORDER_OVERLAY)
               ->sharpen(10)
               ->nonQueued();


         $this->addMediaConversion('thumbs-productpic')
              ->performOnCollections('productpic')

             ->crop('crop-center', 264, 264) // Trim or crop the image to the center for specified width and height.
            // ->border(2, 'red', Manipulations::BORDER_OVERLAY)
             ->nonQueued();
     }


}
