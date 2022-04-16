<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = [
        'refreshComponent' => '$refresh',
        'delete'
    ];

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public $perPage = 10;
    public $search = '';
    public $asc;
    public $sort;
    public $page = 1;

    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::search($this->search)
                ->when($this->sort, function ($query) {
                    $query->orderBy($this->sort, $this->asc ? 'asc' : 'desc');
                })->paginate($this->perPage)
        ]);
    }
}
