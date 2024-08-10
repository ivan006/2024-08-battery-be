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
            
        ];
    }

    public function rules()
    {
        return [
            'event_id' => 'required',
            'child_id' => 'required',
            'created_by' => 'nullable',
            'updated_by' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'event_id',
        'child_id',
        'created_by',
        'updated_by',
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

        public function created_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

        public function updated_by(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    

    
}