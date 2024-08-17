<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends OrmApiBaseModel
{
    protected $table = 'events';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'school' => [],
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
            'attendances' => []
        ];
    }

    public function rules()
    {
        return [
            'name' => 'sometimes:required',
            'start_datetime' => 'sometimes:required',
            'end_datetime' => 'sometimes:required',
            'school_id' => 'sometimes:required',
            'creator_id' => 'nullable',
            'updater_id' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'start_datetime',
        'end_datetime',
        'school_id',
        'creator_id',
        'updater_id',
        'created_at',
        'updated_at'
    ];

        public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }

        public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

        public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updater_id');
    }

        public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class, 'event_id');
    }

    
}