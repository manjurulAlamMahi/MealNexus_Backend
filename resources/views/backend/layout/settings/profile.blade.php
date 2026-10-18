@extends('backend.master')

@section('title', 'Profile Settings')

@section('content')
    @php
        $passwordTabHasErrors = $errors->has('curr_password') || $errors->has('password') || $errors->has('password_confirmation');
    @endphp

    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-setting-img">
            <img src="{{ $profile->banner ? asset($profile->banner) : asset('assets/images/profile-bg.jpg')}}"
                class="profile-wid-img" alt="">
            <div class="overlay-content">
                <div class="text-end p-3">
                    <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                        <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input">
                        <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                            <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-3">
            <div class="card mt-n5">
                <div class="card-body p-4">
                    <div class="text-center">
                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                            <label for="profile-img-file-input" class="d-inline-block" style="cursor: pointer;">
                                <img src="{{$profile->avatar ? asset($profile->avatar) : asset('frontend/default-avatar-profile.jpg') }}"
                                    class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                            </label>
                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                <input id="profile-img-file-input" type="file" class="profile-img-file-input avatar-input @error('avatar') is-invalid @enderror">
                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                    <span class="avatar-title rounded-circle bg-light text-body">
                                        <i class="ri-camera-fill"></i>
                                    </span>
                                </label>
                            </div>
                        </div>
                        @error('avatar')
                            <small class="text-danger d-block mb-2 avatar-error">{{ $message }}</small>
                        @enderror
                        <small class="text-danger d-none mb-2 avatar-error"></small>
                        <h5 class="fs-16 mb-1">{{$user?->name ?? ''}}</h5>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-9">
            <div class="card mt-xxl-n5">
                <div class="card-header">
                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link {{ $passwordTabHasErrors ? '' : 'active' }}" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                <i class="fas fa-home"></i> Personal Details
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $passwordTabHasErrors ? 'active' : '' }}" data-bs-toggle="tab" href="#changePassword" role="tab">
                                <i class="far fa-user"></i> Change Password
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="card-body p-4">
                    <div class="tab-content">
                        <div class="tab-pane {{ $passwordTabHasErrors ? '' : 'active' }}" id="personalDetails" role="tabpanel">
                            <form action="{{route('settings.profile.update')}}" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="firstnameInput"
                                                placeholder="Enter your firstname" value='{{old('name',$user->name)}}'>
                                            @error('name')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="phone" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Enter your phone number" value='{{old('phone',$profile->phone)}}'>
                                            @error('phone')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="emailInput"
                                                placeholder="Dhaka, Bangladesh" value='{{old('address',$profile->address)}}'>
                                            @error('address')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <!--end col-->
                                    <div class="col-lg-12">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="submit" class="btn btn-primary">Updates</button>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                        <!--end tab-pane-->
                        <div class="tab-pane {{ $passwordTabHasErrors ? 'active' : '' }}" id="changePassword" role="tabpanel">
                            <form action="{{route('auth.reset.post')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="currentpassword" class="form-label">Current Password</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <input type="password" class="form-control @error('curr_password') is-invalid @enderror" id="currentpassword"
                                                name="curr_password" placeholder="Enter your current password">
                                            <button class="btn btn-outline-secondary password-toggle" type="button"
                                                data-target="#currentpassword" aria-label="Toggle current password">
                                                <i class="ri-eye-off-line"></i>
                                            </button>
                                        </div>
                                        @error('curr_password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="newpassword" class="form-label">New Password</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="newpassword" name="password" placeholder="Enter your new password">
                                            <button class="btn btn-outline-secondary password-toggle" type="button"
                                                data-target="#newpassword" aria-label="Toggle new password">
                                                <i class="ri-eye-off-line"></i>
                                            </button>
                                        </div>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-3">
                                        <label for="confirmpassword" class="form-label">Confirm Password</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="confirmpassword"
                                                name="password_confirmation" placeholder="Enter your confirm password">
                                            <button class="btn btn-outline-secondary password-toggle" type="button"
                                                data-target="#confirmpassword" aria-label="Toggle confirm password">
                                                <i class="ri-eye-off-line"></i>
                                            </button>
                                        </div>
                                        @error('password_confirmation')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </form>
                        </div>
                        <!--end tab-pane-->
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
@endsection

@push('scripts-bottom')
    <script>
        $(document).ready(
            function () {
                $('.avatar-input').on('change', function () {
                    console.log('ggs')
                    $('.avatar-error').addClass('d-none').text('');
                    const formData = new FormData();
                    formData.append('avatar', $(this)[0].files[0]);
                    formData.append('_token', "{{csrf_token()}}");
                    formData.append('profile_id', "{{$profile->id}}")

                    $.ajax({
                        url: "{{route('settings.profile.avatar.upload')}}",
                        method: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            if (response.success) {
                                $('.user-profile-image').attr('src', response.url);
                                $('.header-profile-user').attr('src', response.url);
                                Swal.fire({
                                    toast: true,
                                    position: "top-end",   // top-end, top-start, bottom-end, bottom-start
                                    icon: "success",
                                    title: response.message || "Profile updated successfully",
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true
                                });
                            }
                            else {
                                Swal.fire({
                                    toast: true,
                                    position: "top-end",
                                    icon: "error",
                                    title: response.message || "Something went wrong",
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true
                                });
                            }
                        },
                        error: function (xhr) {
                            let response = xhr.responseJSON;
                            const avatarError = response?.errors?.avatar?.[0] || response?.error || response?.message || "Something went wrong";
                            $('.avatar-error').removeClass('d-none').text(avatarError);
                            Swal.fire({
                                toast: true,
                                position: "top-end",
                                icon: "error",
                                title: response?.message || "Server Error",
                                text: avatarError,
                                showConfirmButton: true
                            });
                        }
                    });
                });
            }
        );
    </script>

    <script>
        $(document).ready(
            function () {
                $('.profile-foreground-img-file-input').on('change', function () {
                    console.log('banner')
                    const formData = new FormData();
                    formData.append('banner', $(this)[0].files[0]);
                    formData.append('_token', "{{csrf_token()}}");
                    formData.append('profile_id', "{{$profile->id}}")

                    $.ajax({
                        url: "{{route('settings.profile.banner.upload')}}",
                        method: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            if (response.success) {
                                $('.profile-wid-img').attr('src', response.url);
                                Swal.fire({
                                    toast: true,
                                    position: "top-end",   // top-end, top-start, bottom-end, bottom-start
                                    icon: "success",
                                    title: response.message || "Profile updated successfully",
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true
                                });
                            }
                            else {
                                Swal.fire({
                                    toast: true,
                                    position: "top-end",
                                    icon: "error",
                                    title: response.message || "Something went wrong",
                                    showConfirmButton: false,
                                    timer: 3000,
                                    timerProgressBar: true
                                });
                            }
                        },
                        error: function (xhr) {
                            let response = xhr.responseJSON;
                            Swal.fire({
                                toast: true,
                                position: "top-end",
                                icon: "error",
                                title: response?.message || "Server Error",
                                text: response?.error || "Something went wrong",
                                showConfirmButton: true
                            });
                        }
                    });
                });
            }
        );
    </script>

    <script>
        $(document).ready(function () {
            $(document).on('click', '.password-toggle', function () {
                const target = $(this).data('target');
                const $input = $(target);
                const $icon = $(this).find('i');
                const isPassword = $input.attr('type') === 'password';

                $input.attr('type', isPassword ? 'text' : 'password');
                $icon.toggleClass('ri-eye-off-line ri-eye-line');
            });
        });
    </script>
@endpush
