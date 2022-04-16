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
            <a href="" class="btn btn-primary">Create New</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th style="width: available;">Name</th>
                <th style="width: 10%;">Gender</th>
                <th style="width: 20%;">Cars</th>
                <th style="width: 20%;">Created At</th>
                <th style="width: 10%;"></th>
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
                        <button type="button" class="btn btn-sm btn-primary">Edit</button>
                        <button type="button" class="btn btn-sm btn-danger">Delete</button>
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
