<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class ParticipantStaffAssignment extends Model
{
    use HasFactory;

    use HasUuids;

    protected $keyType = 'string';

    public $incrementing = false;

    /**
     * Define the relationship to the User model.
     *
     * @return BelongsTo<User, self>
     */
    public function staff(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Define the relationship to the Participant model.
     *
     * @return HasOneThrough<Participant, self>
     */
    public function participant(): HasOneThrough
    {
        return $this->hasOneThrough(
            Participant::class,
            User::class,
            'id',
            'user_id',
            'participant_user_id',
            'id'
        );
    }

    /**
     * Define the relationship to the User model for participant.
     *
     * @return BelongsTo<User, self>
     */
    public function participantUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'participant_user_id');
    }


}
