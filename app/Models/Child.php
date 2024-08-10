<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Child extends OrmApiBaseModel
{
    protected $table = 'children';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'family' => [],
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
            'attendances' => []
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'family_id' => 'required',
            'created_by' => 'nullable',
            'updated_by' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'family_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

        public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class, 'family_id');
    }

        public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

        public function updated_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

        public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class, 'child_id');
    }

    
}