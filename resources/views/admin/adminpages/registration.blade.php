@include('basic.header')
@include('admin.admindesign.adminmenu')
    <div id="content">
        @include('admin.admindesign.adminhorizontalmenu')  
        <h5>Register</h5>
            <div class="container">
                <form action="/register" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table class="table table-borderless">
                    <tr>
                        <td>Employee Id</td>
                        <td><input type="text" name="employeeid" id="employeeid" class="form-control" placeholder="Employee Id" required></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" required></td>
                        <td><input type="text" name="lname" id="fname" class="form-control" placeholder="Last Name" required></td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" name="phonenumber" id="phonenumber" class="form-control" placeholder="Phone Number" required></td>
                    </tr>
                    <tr>
                        <td>Email Id</td>
                        <td><input type="text" name="email_id" id="email_id" class="form-control" placeholder="Email Id" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="password" id="password" class="form-control" value="xyz" readonly required></td>
                    </tr>
                    <tr>
                        <td>Role</td>
                        <td><input type="text" name="role" id="role" class="form-control" value="user" readonly required></td>
                    </tr>
                    <tr>
                        <!--Status-->
                        <td>
                            <input type="text" name="status" id="status" class="form-control" value="1" hidden required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td colspan="2">
                            <button type="submit" id="submit" class="btn btn-info">
                                <span>Save</span>
                            </button>
                            <button type="reset" id="reset">
                                <span>Cancel</span>
                            </button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>   
    </div>
@include('basic.footer')
