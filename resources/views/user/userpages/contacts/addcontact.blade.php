@include('basic.header')
@include('user.userdesign.menu')
    <div id="content">
        @include('user.userdesign.horizontalmenu')  
           <h5>Add Contact</h5>
           <div class="container">
                <form action="/add" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
		    	    <table class="table table-borderless">
                        <tr>
                            <td>Type</td>
                            <td><select name="type" id="type" class="form-control">
                                <option value="supplier">Supplier</option>
                                <option value="dealer">Dealer</option>
                            </td>
                        </tr>
                        <tr>
                            <td>Company Name</td>
                            <td><input type="text" name="company" id="company" class="form-control" placeholder="Company Name" required></td>
                        </tr>
                        <tr>
                            <td>Primary Contact</td>
                            <td><input type="text" name="fname" id="fname" class="form-control" placeholder="First Name" required></td>
                            <td><input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name" required></td>
                        </tr>
                        <tr>
                            <td>Contact Number</td>
                            <td><input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" required></td>
                            <td><input type="text" name="phone" id="phone" class="form-control" placeholder="Work Number" required></td>
                        </tr>
                        <tr>
                            <td>Email Id</td>
                            <td><input type="text" name="emailid" id="emailid" class="form-control" placeholder="Email Id" required></td>
                        </tr>
                        <tr>
                            <td>Billing Address</td>
                            <td><input type="text" name="bill_building" id="bill_building" class="form-control" placeholder="Building Number/Name " required></td>   
                            <td>
                                <input type="text" name="bill_street" id="bill_street" class="form-control" placeholder="Street name" required>
                            </td>
                        </tr>
                        <tr> 
                            <td></td>
                            <td><input type="text" name="bill_area" id="bill_area" class="form-control" placeholder="Area name" required></td>
                            <td><input type="text" name="bill_city" id="bill_city" class="form-control" placeholder="City" required></td>
                        </tr>
                        <tr>
                            <td>Shipping Address</td>
                            <td><input type="text" name="ship_building" id="ship_building" class="form-control" placeholder="Building Number/Name " required></td>   
                                <td><input type="text" name="ship_street" id="ship_street" class="form-control" placeholder="Street name" required></td>
                            </tr>
                            <tr> 
                                <td></td>
                                <td><input type="text" name="ship_area" id="ship_area" class="form-control" placeholder="Area name" required></td>
                                <td><input type="text" name="ship_city" id="ship_city" class="form-control" placeholder="City" required></td>
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