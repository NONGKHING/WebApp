<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-dark rounded h-100 p-4" style="border: 2px solid #ff4b4b; border-radius: 0.75rem; box-shadow: 0 0 20px rgba(255, 75, 75, 0.6);">
                <h3 class="mb-4 text-center" style="color: white; font-size: 1.8rem; text-transform: uppercase; letter-spacing: 2px; text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.8);">
                    Profile: {{ auth()->user()->name }}
                </h3>

                <div class="row align-items-stretch"> <!-- ทำให้ทั้งสองคอลัมน์มีความสูงเท่ากัน -->
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="bg-secondary rounded p-3" style="background-color: #2e2e2e; border: 1px solid #ff4b4b; border-radius: 0.75rem; box-shadow: 0 0 20px rgba(255, 75, 75, 0.4);">
                            <div class="card-body box-profile text-center">
                                <img class="profile-user-img img-fluid rounded-circle shadow"
                                     src="{{ asset('storage') }}/{{ auth()->user()->profile_photo_path }}"
                                     alt="User profile picture" style="border: 3px solid #ff4b4b; padding: 5px;">

                                <h3 class="profile-username mt-3 text-center" style="color: #ff4b4b; font-size: 1.2rem;">
                                    {{ auth()->user()->name }}
                                </h3>
                                <p class="text-muted">{{ auth()->user()->email }}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item bg-dark text-light">
                                        <b>Followers</b> <a class="float-right text-info">1,322</a>
                                    </li>
                                    <li class="list-group-item bg-dark text-light">
                                        <b>Following</b> <a class="float-right text-info">543</a>
                                    </li>
                                    <li class="list-group-item bg-dark text-light">
                                        <b>Friends</b> <a class="float-right text-info">13,287</a>
                                    </li>
                                </ul>

                                <a href="#" class="btn btn-outline-danger btn-block shadow"><b>Follow</b></a>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Settings -->
                    <div class="col-md-9">
                        <div class="bg-secondary rounded p-4" style="background-color: #888; border: 2px solid #ff4b4b; border-radius: 0.75rem; box-shadow: 0 0 20px rgba(255, 75, 75, 0.6); height: 100%;"> <!-- เพิ่ม height: 100% -->
                            <div class="card-header p-3 bg-danger text-white">
                                <h4>Settings</h4>
                            </div>

                            <div class="card-body bg-dark">
                                <form wire:submit.prevent="update" wire:ignore.self class="form-horizontal">
                                    <div class="form-group row mb-3">
                                        <label for="inputName" class="col-sm-2 col-form-label text-white">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" wire:model="username" class="form-control bg-light text-dark" id="inputName" placeholder="Name" style="background-color: #ccc;">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-3">
                                        <label for="inputEmail" class="col-sm-2 col-form-label text-white">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" wire:model="email" class="form-control bg-light text-dark" id="inputEmail" placeholder="Email" style="background-color: #ccc;">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label for="inputPhoto" class="col-sm-2 col-form-label text-white">Photo</label>
                                        <div class="col-sm-10">
                                            <input type="file" wire:model="photo" class="form-control bg-light text-dark" id="inputPhoto" style="background-color: #ccc;">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger shadow">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
