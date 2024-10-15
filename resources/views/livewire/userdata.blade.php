
    <!-- Content Start -->
        <!-- Table Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h3 class="mb-4">Information</h3>
                            <a class="btn btn-primary btn-sm" href="{{route('adduser')}}">
                               <i class="fas fa-folder">
                                 </i>
                                  Create User
                                 </a>
                                 <br><br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                      <tr>
                                          <td>
                                              {{$item->id}}
                                          </td>
                                          <td>
                                              {{$item->name}}

                                              <br/>
                                          </td>
                                          <td>
                                          {{$item->email}}
                                          </td>
                                          <td class="project_progress">

                          <img alt="Avatar" class="table-avatar" src="{{asset('storage')}}/{{$item->profile_photo_path}}">


                  </td>
                  <td class="project-state">
                      <span class="badge badge-success">Success</span>
                  </td>
                  <td class="project-actions text-right">
                    <a class="btn btn-outline-info btn-sm mx-1" href="{{ route('viewuser', ['id' => $item->id]) }}">
                        <i class="fas fa-eye"></i> View
                      </a>
                      <a class="btn btn-info btn-sm" href="{{route('edituser',['id'=>$item->id]) }}">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                      </a>
                      <a class="btn btn-danger btn-sm" wire:click='delete({{$item->id}})' href="#">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                      </a>
                  </td>
              </tr>
            @endforeach

            </tbody>
            </table>
            <div>

            </div>
            </div>

            </div>
            </div>
            <div>
                {{$data->links()}}
            </div>
            </div>
        </div>
        <!-- Table End -->
    <!-- Content End -->
