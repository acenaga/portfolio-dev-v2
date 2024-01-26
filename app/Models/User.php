<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'profession',
        'phone',
        'greeting',
        'address',
        'about_me',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
        //'about_me_picture'
    ];

    public function professional_skills()
    {
        return $this->hasMany(ProfessionalSkill::class, 'user_id', 'id');
    }

    public function technical_skills()
    {
        return $this->hasMany(TechnicalSkill::class, 'user_id', 'id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'user_id', 'id');
    }

    public function featuredProjects()
    {
        return $this->hasMany(FeaturedProject::class, 'user_id', 'id');
    }

    public function education()
    {
        return $this->hasMany(Education::class, 'user_id', 'id');
    }

    public function experiences()
    {
        return $this->hasMany(WorkExperience::class, 'user_id', 'id');
        // return $this->hasMany(WorkExperience::class, 'user_id', 'id')->with('responsibilities');
    }

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class, 'user_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public function reviews()
    {
        return $this->hasMany(ClientReview::class, 'user_id', 'id');
    }

    public function social_medias()
    {
        return $this->hasMany(SocialMedia::class, 'user_id', 'id');
    }

    public function sections()
    {
        return $this->hasMany(Section::class, 'user_id', 'id');
    }

    public function name()
    {
        return $this->name.' '.$this->last_name;
    }

    public function profile_picture()
    {
        if ($this->profile_photo_path) {
            return url("storage/$this->profile_photo_path");
        }
    }
}
