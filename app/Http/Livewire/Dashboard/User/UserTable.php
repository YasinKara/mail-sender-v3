<?php

namespace App\Http\Livewire\Dashboard\User;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public $data;

    public function mount()
    {
        $this->data = User::query()
            ->with([
                'teamLeader' => function ($query) {
                    $query->select('id', 'name as team_lead');
                }
            ])
            ->with([
                'roleRelation' => function ($query) {
                    $query->select('id', 'name as role');
                }
            ])
            ->select([
            'team_leader_id',
            'role_id',
            'name as full_name',
            'email',
            'username',
            'password',
            'signature_title as titles',
                'is_passive as status',
        ])->limit(50)->get()->toJson();

    }

    public function render()
    {
        return view('livewire.dashboard.user.user-table');
    }
}
