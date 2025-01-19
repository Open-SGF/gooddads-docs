<?php

namespace Database\Seeders;

use App\Models\Participant;
use App\Models\ParticipantStaffAssignment;
use App\Models\User;
use Illuminate\Database\Seeder;

class ParticipantStaffAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch existing Users and Participants
        $staffUsers = User::whereDoesntHave('participant')->get();
        $participants = Participant::with('user')->get();

        // Ensure we have staff users and participants before creating assignments
        if ($staffUsers->isEmpty() || $participants->isEmpty()) {
            $this->command->info('User or Participant is empty. Skipping ParticipantStaffAssignment creation.');

            return;
        }

        // Assign staff users to participants
        $participants->each(fn(Participant $participant) =>
            ParticipantStaffAssignment::factory()->create([
                'participant_user_id' => $participant->user->id,
                'staff_user_id' => $staffUsers->random()->id,
            ]));

    }
}
