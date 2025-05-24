@extends('admin.layout.app')
@section('title', 'Create New User')
@push('styles')
    <style>
        .dropzone {
            border: 2px dashed #bbb;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            color: #666;
            max-width: 180px;
            margin: auto;
            position: relative;
        }

        .dropzone.hover {
            border-color: #333;
            background: #f8f8f8;
        }

        .dropzone img {
            max-width: 150px;
            max-height: 150px;
            object-fit: cover;
            display: none;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .dropzone input[type="file"] {
            display: none;
        }
    </style>
@endpush
@section('content')


    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="page-sub-header">
                        <h3 class="page-title">Add User</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="students.html">Users</a></li>
                            <li class="breadcrumb-item active">Add User</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card comman-shadow">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT') {{-- or PATCH --}}
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="form-title student-info">Edit User Information <span><a
                                                href="javascript:;"><i class="feather-more-vertical"></i></a></span></h5>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Name <span class="login-danger">*</span></label>
                                        <input name="name" class="form-control" type="text" placeholder="Enter Name"
                                            value="{{ old('name', $user->name) }}">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>E-Mail <span class="login-danger">*</span></label>
                                        <input name="email" class="form-control" type="text"
                                            placeholder="Enter Email Address" value="{{ old('email', $user->email) }}">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Phone <span class="login-danger">*</span></label>
                                        <input name="phone" class="form-control" type="text"
                                            placeholder="Enter Phone Number" value="{{ old('phone', $user->phone) }}">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms calendar-icon">
                                        <label>Date Of Birth <span class="login-danger">*</span></label>
                                        <input name="date_of_birth" class="form-control datetimepicker" type="text"
                                            placeholder="DD-MM-YYYY"
                                            value="{{ old('date_of_birth', \Carbon\Carbon::parse($user->date_of_birth)->format('d-m-Y')) }}">
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Region <span class="login-danger">*</span></label>
                                        <select name="region" class="form-control select">
                                            <option value="">Please Select Region</option>
                                            <option value="Hindu"
                                                {{ old('region', $user->region) == 'Hindu' ? 'selected' : '' }}>Hindu
                                            </option>
                                            <option value="Christian"
                                                {{ old('region', $user->region) == 'Christian' ? 'selected' : '' }}>
                                                Christian</option>
                                            <option value="Others"
                                                {{ old('region', $user->region) == 'Others' ? 'selected' : '' }}>Others
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Gender <span class="login-danger">*</span></label>
                                        <select name="gender" class="form-control select">
                                            <option value="">Select Gender</option>
                                            <option value="Female"
                                                {{ old('gender', $user->gender) == 'Female' ? 'selected' : '' }}>Female
                                            </option>
                                            <option value="Male"
                                                {{ old('gender', $user->gender) == 'Male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="Others"
                                                {{ old('gender', $user->gender) == 'Others' ? 'selected' : '' }}>Others
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Township <span class="login-danger">*</span></label>
                                        <select name="township" class="form-control select">
                                            <option value="">Please Select Section</option>
                                            <option value="B"
                                                {{ old('township', $user->township) == 'B' ? 'selected' : '' }}>B</option>
                                            <option value="A"
                                                {{ old('township', $user->township) == 'A' ? 'selected' : '' }}>A</option>
                                            <option value="C"
                                                {{ old('township', $user->township) == 'C' ? 'selected' : '' }}>C</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Password <small>(leave blank if you don’t want to change)</small></label>
                                        <input name="password" class="form-control pass-input" type="password"
                                            placeholder="New Password">
                                        <span class="profile-views feather-eye toggle-password"></span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group students-up-files">
                                        <label> User Photo (150px X 150px)</label>
                                        <div class="dropzone" id="photo-dropzone" style="cursor:pointer;">
                                            <p id="upload-text" style="margin-bottom: 10px; user-select:none;">Drag & Drop
                                                or Click to Upload</p>
                                            <input type="file" id="student-photo" accept="image/*" style="display:none;"
                                                name="photo" />
                                            @if ($user->photo)
                                                <img id="photo-preview" alt="Image Preview"
                                                    src="{{ asset('storage/' . $user->photo) }}"
                                                    style="max-width: 150px; max-height: 150px; border:1px solid #ccc; border-radius:4px; margin-bottom:10px;" />
                                            @else
                                                <img id="photo-preview" alt="Image Preview"
                                                    style="display:none; max-width: 150px; max-height: 150px; border:1px solid #ccc; border-radius:4px; margin-bottom:10px;" />
                                            @endif
                                            <button type="button" id="upload-btn"
                                                class="btn btn-primary btn-sm">Upload</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            var dropzone = $('#photo-dropzone');
            var inputFile = $('#student-photo');
            var preview = $('#photo-preview');
            var uploadText = $('#upload-text');
            var uploadBtn = $('#upload-btn');

            // Only trigger inputFile click when clicking on text or button, NOT the entire dropzone
            uploadText.on('click', function(e) {
                e.stopPropagation();
                inputFile.trigger('click');
            });

            uploadBtn.on('click', function(e) {
                e.stopPropagation();
                inputFile.trigger('click');
            });

            // Optional: drag/drop highlighting
            dropzone.on('dragover', function(e) {
                e.preventDefault();
                e.stopPropagation();
                dropzone.addClass('hover');
            });

            dropzone.on('dragleave drop', function(e) {
                e.preventDefault();
                e.stopPropagation();
                dropzone.removeClass('hover');
            });

            // Handle dropped files
            dropzone.on('drop', function(e) {
                e.preventDefault();
                e.stopPropagation();

                var files = e.originalEvent.dataTransfer.files;
                if (files.length > 0) {
                    inputFile.prop('files', files); // update input's files for form submission
                    previewFile(files[0]);
                }
            });

            // Handle file selected from dialog
            inputFile.on('change', function() {
                if (this.files && this.files[0]) {
                    previewFile(this.files[0]);
                }
            });

            function previewFile(file) {
                if (!file.type.startsWith('image/')) {
                    alert('Please upload an image file.');
                    preview.hide();
                    inputFile.val('');
                    uploadText.show();
                    return;
                }

                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.attr('src', e.target.result).show();
                    uploadText.hide();
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
@endpush
