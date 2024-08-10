<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class School extends OrmApiBaseModel
{
    protected $table = 'schools';

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
            'events' => [],
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

        public function events(): HasMany
    {
        return $this->hasMany(Event::class, 'school_id');
    }

        public function memberships(): HasMany
    {
        return $this->hasMany(Membership::class, 'school_id');
    }

    
}