@extends('admin.admin_master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        
                        <h4 class="card-title">Edit Profile</h4>
                        <hr>
                        <form>
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" value="{{ $editData->name }}" class="form-control" type="text" placeholder="Name" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" value="{{ $editData->email }}" class="form-control" type="text" placeholder="Name" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                            <div class="col-sm-10">
                                <input name="username" value="{{ $editData->username }}" class="form-control" type="text" placeholder="Name" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                            <div class="col-sm-10">
                                <input name="profile_image" id="image" class="form-control" type="file" placeholder="Name" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img class="rounded avatar-lg" id="newImage" src="{{ asset('backend/assets/images/small/img-5.jpg') }}" alt="Card image cap">
                            </div>
                        </div>
                        <!-- end row -->

                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile" />
                        
                        </form>
                      
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#newImage').attr('src', e.target.result);
            }

            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection