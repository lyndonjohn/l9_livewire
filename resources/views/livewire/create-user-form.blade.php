<div>
    <form wire:submit.prevent="submitForm">
        <div class="form-group">
            <label for="name">Name</label>
            <input
                wire:model="name"
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                name="name" id="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mt-3">
            <label for="email">Email</label>
            <input
                wire:model="email"
                type="email"
                class="form-control @error('email') is-invalid @enderror"
                name="email" id="email">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mt-3">
            <label for="password">Password</label>
            <input
                wire:model="password"
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                name="password" id="password">
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mt-3">
            <label for="password_confirmation">Confirm Password</label>
            <input
                wire:model="password_confirmation"
                type="password"
                class="form-control"
                name="password_confirmation" id="password_confirmation">
        </div>

        <div class="form-group mt-3">
            <label for="gender">Gender</label>
            <div class="form-check">
                <input wire:model="gender" class="form-check-input @error('gender') is-invalid @enderror" type="radio" id="male" value="Male">
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input wire:model="gender" class="form-check-input @error('gender') is-invalid @enderror" type="radio" id="female" value="Female">
                <label class="form-check-label" for="female">
                    Female
                </label>
                @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group mt-3">
            <label for="cars">Favorite Cars</label>
            <div class="form-check">
                <input wire:model="cars" class="form-check-input @error('cars') is-invalid @enderror" type="checkbox" id="honda" value="honda">
                <label class="form-check-label" for="honda">
                    Honda
                </label>
            </div>
            <div class="form-check">
                <input wire:model="cars" class="form-check-input @error('cars') is-invalid @enderror" type="checkbox" id="toyota" value="toyota">
                <label class="form-check-label" for="toyota">
                    Toyota
                </label>
            </div>
            <div class="form-check">
                <input wire:model="cars" class="form-check-input @error('cars') is-invalid @enderror" type="checkbox" id="nissan" value="nissan">
                <label class="form-check-label" for="nissan">
                    Nissan
                </label>
                @error('cars')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
