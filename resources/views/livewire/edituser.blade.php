<div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>User Add</h3>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form wire:submit.prevent="insert" wire:ignore.self>
        <div class="form-floating mb-3">
            <input type="text" wire:model="name" class="form-control" id="inputName" placeholder="Name" required>
            <label for="inputName">Name</label>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="email" wire:model="email" class="form-control" id="inputEmail" placeholder="Email" required>
            <label for="inputEmail">Email</label>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-floating mb-4">
            <input type="password" wire:model="password" class="form-control" id="inputPassword" placeholder="Password" required>
            <label for="inputPassword">Password</label>
            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-floating mb-4">
            <input type="file" wire:model="photo" class="form-control" id="inputPhoto" placeholder="Photo" accept="image/*" required>
            <label for="inputPhoto">Photo</label>
            @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        @if ($photo)
            <div class="mb-3">
                <label>Show Photo:</label><br>
                <img src="{{ $photo->temporaryUrl() }}" class="img-thumbnail mt-2" style="max-width: 200px;" alt="Photo Preview">
            </div>
        @endif

        <div class="d-flex justify-content-end mb-3">
            <a href="#" class="btn btn-secondary me-2">Cancel</a>
            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                <span wire:loading.remove> Create New User </span>
                <span wire:loading> <i class="fa fa-spinner fa-spin"></i> Loading... </span>
            </button>
        </div>
    </form>
</div>

