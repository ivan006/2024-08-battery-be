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
            'creator_id' => [],
            'updater_id' => []
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
            'creator_id' => 'nullable',
            'updater_id' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'user_id',
        'creator_id',
        'updater_id',
        'created_at',
        'updated_at'
    ];

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

        public function creator_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

        public function updater_id(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updater_id');
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
