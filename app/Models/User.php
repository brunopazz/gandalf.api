<?php
/*
 * This code was generated automatically by Nebo15/REST
 */
namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Nebo15\LumenApplicationable\Contracts\ApplicationableUser as ApplicationableUserContract;
use Nebo15\LumenApplicationable\Traits\ApplicationableUserTrait;
use Nebo15\LumenOauth2\Interfaces\Oauthable as OauthableContract;
use Nebo15\LumenOauth2\Traits\Oauthable;
use Nebo15\REST\Traits\ListableTrait;
use Nebo15\REST\Interfaces\ListableInterface;

class User extends Base implements
    ListableInterface,
    AuthenticatableContract,
    AuthorizableContract,
    OauthableContract,
    ApplicationableUserContract
{
    use ListableTrait, Authenticatable, Authorizable, Oauthable, ApplicationableUserTrait;

    protected $listable = [
        '_id', 'username'
    ];

    protected $visible = [];

    protected $fillable = ['username', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
