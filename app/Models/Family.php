<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Family extends OrmApiBaseModel
{
    protected $table = 'families';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'creator' => [],
            'updater' => []
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
            'children' => [],
            'family_memberships' => [],
            'school_family_enrollments' => []
        ];
    }

    public function rules()
    {
        return [
            'name' => 'sometimes:required',
            'creator_id' => 'nullable',
            'updater_id' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'creator_id',
        'updater_id',
        'created_at',
        'updated_at'
    ];

        public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

        public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updater_id');
    }

        public function children(): HasMany
    {
        return $this->hasMany(Child::class, 'family_id');
    }

        public function family_memberships(): HasMany
    {
        return $this->hasMany(FamilyMembership::class, 'family_id');
    }

        public function school_family_enrollments(): HasMany
    {
        return $this->hasMany(SchoolFamilyEnrollment::class, 'family_id');
    }

    
}