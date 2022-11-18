<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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


}
