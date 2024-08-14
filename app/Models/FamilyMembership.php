<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use QuicklistsOrmApi\OrmApiBaseModel;

class FamilyMembership extends OrmApiBaseModel
{
    protected $table = 'family_memberships';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'user' => [],
            'family' => []
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
            'user_id' => 'required',
            'family_id' => 'required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'user_id',
        'family_id',
        'created_at',
        'updated_at'
    ];

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

        public function family(): BelongsTo
    {
        return $this->belongsTo(Family::class, 'family_id');
    }




}
