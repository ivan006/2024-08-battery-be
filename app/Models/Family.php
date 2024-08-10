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
            'user' => [],
            'created_by' => [],
            'updated_by' => []
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
            'memberships' => []
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'user_id' => 'required',
            'created_by' => 'nullable',
            'updated_by' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'user_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

        public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

        public function updated_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

        public function children(): HasMany
    {
        return $this->hasMany(Child::class, 'family_id');
    }

        public function memberships(): HasMany
    {
        return $this->hasMany(Membership::class, 'family_id');
    }

    
}