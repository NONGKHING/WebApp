<div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Project Add</h3>
    </div>
    <form wire:submit.prevent="insert" wire:ignore.self >
        <div class="form-floating mb-3">
            <input type="text" wire:model="name" class="form-control" id="inputName" placeholder="Name">
            <label for="inputName">Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" wire:model="email" class="form-control" id="inputEmail" placeholder="Email">
            <label for="inputEmail">Email</label>
        </div>
        <div class="form-floating mb-4">
            <input type="password" wire:model="password" class="form-control" id="inputPassword" placeholder="Password">
            <label for="inputPassword">Password</label>
        </div>
        <div class="form-floating mb-4">
            <input type="file" wire:model="photo" class="form-control" id="img" >
            <label for="img">Images</label>
        </div>
        <div class="d-flex justify-content-end mb-3">
            <a href="#" class="btn btn-secondary me-2">Cancel</a>
            <button type="submit" class="btn btn-primary">Create new Project</button>
        </div>
    </form>
</div>
