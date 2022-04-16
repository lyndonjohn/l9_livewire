<div>
    <div class="form-group">
        <label for="anytext">Any Text</label>
        <div class="row">
            <div class="col-sm-6">
                <input autocomplete="off" wire:model="anytext" type="text" id="anytext" class="form-control"
                       placeholder="Type any text here...">
                @if($anytext)
                    <div class="mt-2 bg-light p-2 rounded small">
                        {{ $anytext }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="form-group mt-4">
        <label>Radio Buttons</label>
        <div class="form-check">
            <input wire:model="gender" class="form-check-input" type="radio" id="male" value="Male">
            <label class="form-check-label" for="male">
                Male
            </label>
        </div>
        <div class="form-check">
            <input wire:model="gender" class="form-check-input" type="radio" id="female" value="Female">
            <label class="form-check-label" for="female">
                Female
            </label>
        </div>
        @if($gender)
            <div class="mt-2 bg-light p-2 rounded small">
                {{ $gender }}
            </div>
        @endif
    </div>

    <div class="form-group mt-4">
        <label>Checkboxes</label>
        <div class="form-check">
            <input wire:model="favorites" class="form-check-input" type="checkbox" id="blue" value="Blue">
            <label class="form-check-label" for="blue">
                Blue
            </label>
        </div>
        <div class="form-check">
            <input wire:model="favorites" class="form-check-input" type="checkbox" id="red" value="Red">
            <label class="form-check-label" for="red">
                Red
            </label>
        </div>
        <div class="form-check">
            <input wire:model="favorites" class="form-check-input" type="checkbox" id="green" value="Green">
            <label class="form-check-label" for="green">
                Green
            </label>
        </div>
        @if($favorites)
            <div class="mt-2 bg-light p-2 rounded small">
                <ul>
                    @foreach($favorites as $color)
                        <li>{{ $color }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="form-group mt-4">
        <label>Dropdown Select</label>
        <div class="row">
            <div class="col-sm-6">
                <select wire:model="fruit" class="form-select">
                    <option>Select Fruit</option>
                    <option>Apple</option>
                    <option>Banana</option>
                </select>
                @if($fruit)
                    <div class="mt-2 bg-light p-2 rounded small">
                        {{ $fruit }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="form-group mt-4">
        <label>Counter Button</label>
        <div>
            <button wire:model="counter" wire:click="increment" class="btn btn-primary">Counter</button>
        </div>
        @if($counter)
            <div class="mt-2 bg-light p-2 rounded small">{{ $counter }}</div>
        @endif
    </div>
</div>
