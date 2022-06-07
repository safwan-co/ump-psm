<x-header />
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container-fluid">
    <div class="row" style="margin-top: 50px; margin-bottom: 70px; margin-left: 200px; margin-right: 200px; background-color: lightblue;">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">

            <div>
                <form action="user_login" method="post">
                    <div class="form-group">
                        <img class="w-100 h-100" src="./images/UMP2.png" alt="PSM System UMP" />
                    </div>
                    <hr />
                    <div class="form-group">
                        <label for="exampleInputEmail1">User ID</label>
                        <input type="text" class="form-control form-control-lg" id="userID" name="userID" placeholder=" User ID" value="{{old('user_id')}}">

                        @error('userID')
                        <span style="float: right;color: red">{{$message}}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                        @error('password')
                        <span style="float: right;color: red">{{$message}}</span>
                        <br>
                        @enderror
                        <small class="form-text" style="text-align: right; padding-right: 20px;"><a href="forgot" class="alert-link" style="color: #212529;">Forgot Password?</a></small>
                    </div>

                    {{@csrf_field()}}

                    <div style="text-align: center; padding-top: 20px;">
                        <button type="submit" class="btn btn-dark btn-lg btn-block">Submit</button>
                    </div>

                </form>
            </div>

        </div>
        <div class="col-lg-4"></div>
    </div>
</div>

<!-- <x-footer/> -->
<script>
    @error('password')
    $flashdata = "{{$message}}";
    if ($flashdata) {
        Swal.fire({
            title: 'Wrong Password!',
            text: $flashdata,
            icon: 'error',
            confirmButtonText: 'Close'
        })
    }
    @enderror
</script>
