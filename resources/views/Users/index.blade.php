@include('layouts.app')

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">All Users</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-striped" id="UserTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>role</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                            @if (count($users) > 0)
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $count++ }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->created_at->diffforhumans() }}</td>
                                        <td>{{ $user->updated_at->diffforhumans() }}</td>
                                        <td>
                                            <a href="{{ route('users_edit', ['id' => $user->id]) }}"
                                               id="{{ $user->id }}"
                                               class="btn btn-primary">Edit
                                                <span class="tf-icons bx bx-edit"></span>
                                            </a>
                                            <a href="{{ route('users_destroy', ['id' => $user->id]) }}" id=""
                                               class="btn btn-danger active">Delete
                                                <span class="tf-icons fa-solid fa-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalUsers" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Users Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <input type="hidden" name="id" id="id">
                        <label for="nameWithTitle" class="form-label">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Enter Name">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col mb-0">
                        <label for="emailWithTitle" class="form-label">Email</label>
                        <input type="email" id="email" disabled class="form-control" placeholder="xxxx@xxx.xx">
                    </div>
                    <div class="col mb-0">
                        <label for="roleWithTitle" class="form-label">Role</label>
                        <select name="role" id="role" class="form-select">
                            <option value="Administrator">Administrator</option>
                            <option value="Customer">Customer</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('users_edit', ['id' => $user->id]) }}"
                   id="{{ $user->id }}"
                   class="btn btn-primary">Edit
                    <span class="tf-icons bx bx-edit"></span>
                </a>
                <a href="{{ route('users_edit', ['id' => $user->id]) }}" id=""
                   class="btn btn-danger active">Delete
                    <span class="tf-icons fa-solid fa-trash"></span>
                </a>
            </div>
        </div>
    </div>
</div>
