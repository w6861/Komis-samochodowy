@include('layouts.customerApp')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1">
            <div class="row">
                <div class="col-md-12">
                    <div class="userd">
                        <form action="{{ route('profile_update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-name">First Name</label>
                                <input class="form-control" type="text" id="name" name="name"
                                       value="{{ Auth::user()->name }}" autofocus placeholder="First Name" />
                                <small class="name-error fs-5 text-danger"></small>
                            </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-lname">Last name</label>
                                <input class="form-control" type="text" name="lname" id="lname"
                                       value="{{ @$myProfile->lname }}" placeholder="Last Name" />
                                @error('lname')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-email">Email</label>
                                <input class="form-control" type="text" id="email" name="email"
                                       value="{{ Auth::user()->email }}" placeholder="email@example.com" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                                <label class="form-label" for="basic-default-name">Date of birth</label>
                                <input type="date" class="form-control" id="dob" name="dob"
                                       @if ($myProfile->dob != null) value="{{ $myProfile->dob }}" @else value="{{ date(now()->format('Y-m-d')) }}" @endif />
                                @error('dob')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone" class="phone form-control"
                                       placeholder="59 325 8547" value="{{ $myProfile->phone }}" />
                                <small class="phone-error text-danger"></small>
                            </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                       placeholder="Address" value="{{ $myProfile->address }}" />
                                <small class="address-error fs-5 text-danger"></small>
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label" for="gender">Gender</label>
                                <select id="gender" class="select2 form-select">
                                    <option value="">Select</option>
                                    <option value="Male" @if ($myProfile->gender == 'Male') selected @endif>Male
                                    </option>
                                    <option value="Female" @if ($myProfile->gender == 'Female') selected @endif>Female
                                    </option>
                                </select>
                                <small class="gender-error fs-5 text-danger"></small>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="text" class="form-label">National ID</label>
                                <input type="text" class="national_id form-control" id="national_id"
                                       name="national_id" placeholder="National ID"
                                       value="{{ $myProfile->national_id }}" />
                                <small class="national_id-error text-danger"></small>
                            </div>
                            <div class="col-md-12 col-sm-12 mb-3 text-center">
                                <button type="submit" class="btn  btn-primary ">
                                    <span class="tf-icons bx bxs-save"></span> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <h5 class="card-header">Update Password</h5>
                <div class="card-body">
                    <form action="{{ route('profile_UpdatePass') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-4 col-sm-12 form-password-toggle">
                                <label class="form-label" for="old_password">Old Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="old_password"
                                           class="form-control  @if (session('password')) is-invalid @endif"
                                           name="old_password"
                                           placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                           aria-describedby="old_password" value="{{ old('old_password') }}" />
                                    <span class="input-group-text cursor-pointer"><i
                                            class="bx bx-hide"></i></span>
                                    @if (session('password'))
                                        <span class="invalid-feedback" role="alert">
                                                    <strong>{{ session('password') }}</strong>
                                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 form-password-toggle">
                                <label class="form-label" for="password">New Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                           aria-describedby="password" value="{{ old('password') }}" />
                                    <span class="input-group-text cursor-pointer"><i
                                            class="bx bx-hide"></i></span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col form-password-toggle">
                                <label class="form-label" for="password">password confirm</label>
                                <div class="input-group input-group-merge">
                                    <input id="password-confirm" type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password_confirmation"
                                           placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                           aria-describedby="password" value="{{ old('password_confirmation') }}" />
                                    <span class="input-group-text cursor-pointer"><i
                                            class="bx bx-hide"></i></span>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary d-grid">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
