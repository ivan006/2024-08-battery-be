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
            'attendances_created_by' => [],
            'attendances_updated_by' => [],
            'children_created_by' => [],
            'children_updated_by' => [],
            'events_created_by' => [],
            'events_updated_by' => [],
            'families_created_by' => [],
            'families_updated_by' => [],
            'families_user_id' => [],
            'memberships_created_by' => [],
            'memberships_updated_by' => [],
            'schools_created_by' => [],
            'schools_updated_by' => [],
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

    

        public function attendances_created_by(): HasMany
    {
        return $this->hasMany(Attendance::class, 'created_by');
    }

        public function attendances_updated_by(): HasMany
    {
        return $this->hasMany(Attendance::class, 'updated_by');
    }

        public function children_created_by(): HasMany
    {
        return $this->hasMany(Child::class, 'created_by');
    }

        public function children_updated_by(): HasMany
    {
        return $this->hasMany(Child::class, 'updated_by');
    }

        public function events_created_by(): HasMany
    {
        return $this->hasMany(Event::class, 'created_by');
    }

        public function events_updated_by(): HasMany
    {
        return $this->hasMany(Event::class, 'updated_by');
    }

        public function families_created_by(): HasMany
    {
        return $this->hasMany(Family::class, 'created_by');
    }

        public function families_updated_by(): HasMany
    {
        return $this->hasMany(Family::class, 'updated_by');
    }

        public function families_user_id(): HasMany
    {
        return $this->hasMany(Family::class, 'user_id');
    }

        public function memberships_created_by(): HasMany
    {
        return $this->hasMany(Membership::class, 'created_by');
    }

        public function memberships_updated_by(): HasMany
    {
        return $this->hasMany(Membership::class, 'updated_by');
    }

        public function schools_created_by(): HasMany
    {
        return $this->hasMany(School::class, 'created_by');
    }

        public function schools_updated_by(): HasMany
    {
        return $this->hasMany(School::class, 'updated_by');
    }

        public function schools_user_id(): HasMany
    {
        return $this->hasMany(School::class, 'user_id');
    }

    
}