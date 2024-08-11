<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends OrmApiBaseModel
{
    protected $table = 'users';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            
        ];
    }

    public function spouseRelationships()
    {
        return [
            
        ];
    }

    public function childRelationships()
    {
        return [
            'attendances_creator_id' => [],
            'attendances_updater_id' => [],
            'children_creator_id' => [],
            'children_updater_id' => [],
            'events_creator_id' => [],
            'events_updater_id' => [],
            'families_creator_id' => [],
            'families_updater_id' => [],
            'families_user_id' => [],
            'memberships_creator_id' => [],
            'memberships_updater_id' => [],
            'schools_creator_id' => [],
            'schools_updater_id' => [],
            'schools_user_id' => []
        ];
    }

    public function rules()
    {
        return [
            'old_id' => 'nullable',
            'name' => 'required',
            'email' => 'required',
            'email_verified_at' => 'nullable',
            'password' => 'required',
            'status' => 'required',
            'remember_token' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'old_id',
        'name',
        'email',
        'email_verified_at',
        'password',
        'status',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    

        public function attendances_creator_id(): HasMany
    {
        return $this->hasMany(Attendance::class, 'creator_id');
    }

        public function attendances_updater_id(): HasMany
    {
        return $this->hasMany(Attendance::class, 'updater_id');
    }

        public function children_creator_id(): HasMany
    {
        return $this->hasMany(Child::class, 'creator_id');
    }

        public function children_updater_id(): HasMany
    {
        return $this->hasMany(Child::class, 'updater_id');
    }

        public function events_creator_id(): HasMany
    {
        return $this->hasMany(Event::class, 'creator_id');
    }

        public function events_updater_id(): HasMany
    {
        return $this->hasMany(Event::class, 'updater_id');
    }

        public function families_creator_id(): HasMany
    {
        return $this->hasMany(Family::class, 'creator_id');
    }

        public function families_updater_id(): HasMany
    {
        return $this->hasMany(Family::class, 'updater_id');
    }

        public function families_user_id(): HasMany
    {
        return $this->hasMany(Family::class, 'user_id');
    }

        public function memberships_creator_id(): HasMany
    {
        return $this->hasMany(Membership::class, 'creator_id');
    }

        public function memberships_updater_id(): HasMany
    {
        return $this->hasMany(Membership::class, 'updater_id');
    }

        public function schools_creator_id(): HasMany
    {
        return $this->hasMany(School::class, 'creator_id');
    }

        public function schools_updater_id(): HasMany
    {
        return $this->hasMany(School::class, 'updater_id');
    }

        public function schools_user_id(): HasMany
    {
        return $this->hasMany(School::class, 'user_id');
    }

    
}