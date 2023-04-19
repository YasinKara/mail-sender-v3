<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{

    public function index()
    {
        return view('dashboard.user.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function dataTable()
    {
        $user = User::with(['teamLeader', 'roleRelation'])->get();
        return DataTables::of($user)
            ->addColumn('full_name', function ($user) {
                return '
                <div class="d-flex justify-content-start align-items-center user-name">
                <div class="avatar-wrapper">
                <div class="avatar avatar-sm me-3">
                <span class="avatar-initial rounded-circle bg-label-info">EB</span>
                </div>
                </div>
                <div class="d-flex flex-column">
                <a href="app-user-view-account.html" class="text-heading text-truncate"><span class="fw-semibold">' . $user->name . '</span></a>
                <small class="text-muted">' . $user->username . '</small>
                </div>
                </div>
                ';
            })
            ->addColumn('team_lead', function ($user) {
                return $user->teamLeader->name ?? 'Takım Lideri Yok';
            })
            ->addColumn('username', function ($user) {
                return $user->username;
            })
            ->addColumn('password', function ($user) {
                return $user->password;
            })
            ->addColumn('title', function ($user) {
                return $user->signature_title;
            })
            ->addColumn('status', function ($user) {
                return $user->is_passive ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>';
            })
            ->addColumn('role', function ($user) {
                return $user->role;
            })
            ->addColumn('action', function ($user) {
                return '
                <div class="d-inline-block text-nowrap">
                <button class="btn btn-sm btn-icon btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-20px"></i></button>
                <div class="dropdown-menu dropdown-menu-end m-0">
                <a href="" class="dropdown-item"><i class="mdi mdi-eye-outline me-2"></i><span>View</span></a>
                <a href="javascript:;" class="dropdown-item"><i class="mdi mdi-pencil-outline me-2"></i><span>Edit</span></a>
                <a href="javascript:;" class="dropdown-item delete-record"><i class="mdi mdi-delete-outline me-2"></i><span>Delete</span></a>
                </div>
                </div>';
            })
            ->rawColumns([
                'full_name',
                'team_lead',
                'username',
                'password',
                'title',
                'status',
                'role',
                'action',
            ])->make(true);

    }
}
