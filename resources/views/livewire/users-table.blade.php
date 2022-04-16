<div>
    <div class="row mb-2">
        <div class="col-sm-1">
            <select wire:model="perPage" class="form-control col-1">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>

        <div class="col-sm-5">
            <input wire:model.debounce.300ms="search" type="search" class="form-control col-5"
                   placeholder="Search users...">
        </div>
        <div class="col-sm-4">
            <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Create New</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th wire:click="sortBy('name')" style="width: available;cursor: pointer;">
                    Name
                    @if ($sort !== 'name')
                        <i class="fa fa-sort fa-fw text-primary cursor-pointer"></i>
                    @elseif ($asc)
                        <i class="fa fa-sort-up fa-fw text-primary"></i>
                    @else
                        <i class="fa fa-sort-down fa-fw text-primary"></i>
                    @endif
                </th>
                <th style="width: 10%;">Gender</th>
                <th style="width: 20%;">Favorite Cars</th>
                <th wire:click="sortBy('created_at')" style="width: 20%;cursor: pointer;">
                    Created At
                    @if ($sort !== 'created_at')
                        <i class="fa fa-sort fa-fw text-primary cursor-pointer"></i>
                    @elseif ($asc)
                        <i class="fa fa-sort-up fa-fw text-primary"></i>
                    @else
                        <i class="fa fa-sort-down fa-fw text-primary"></i>
                    @endif
                </th>
                <th style="width: 15%;"></th>
            </tr>
            </thead>
            <tbody>
            @forelse($users as $key => $user)
                <tr>
                    <td>{{ $users->firstItem() + $key }}.</td>
                    <td>
                        {{ $user->name }}
                        <div class="small fst-italic">{{ $user->email }}</div>
                    </td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ implode(', ', json_decode($user->cars)) }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary">
                            <i class="fa fa-fw fa-edit"></i> Edit
                        </button>
                        <button type="button" class="btn btn-sm btn-danger">
                            <i class="fa fa-fw fa-trash-alt"></i> Delete
                        </button>
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="6" class="text-muted text-center">No data found in table.</td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    @if($users->total() > $users->perPage())
        <div class="mt-2 d-flex justify-content-between">
            <div class="text-muted">
                Showing {{ $users->firstItem() }} to {{ $users->lastItem() }}
                of {{ $users->total() }} entries
            </div>
            {{ $users->links() }}
        </div>
    @endif
</div>
