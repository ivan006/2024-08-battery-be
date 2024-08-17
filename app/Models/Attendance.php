<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Attendance extends OrmApiBaseModel
{
    protected $table = 'attendances';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'event' => [],
            'child' => [],
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
            
        ];
    }

    public function rules()
    {
        return [
            'event_id' => 'sometimes:required',
            'child_id' => 'sometimes:required',
            'creator_id' => 'nullable',
            'updater_id' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'event_id',
        'child_id',
        'creator_id',
        'updater_id',
        'created_at',
        'updated_at'
    ];

        public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

        public function child(): BelongsTo
    {
        return $this->belongsTo(Child::class, 'child_id');
    }

        public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

        public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updater_id');
    }

    

    
}