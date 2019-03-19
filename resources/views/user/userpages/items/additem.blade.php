@include('basic.header')
@include('user.userdesign.menu')
    <div id="content">
        @include('user.userdesign.horizontalmenu')  
           <h5>Add Items</h5>
           <div class="container">
                <form action="/additem" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
		    	    <table class="table table-borderless">
                        <tr>
                            <td>Suppkier's Name</td>
                            
                            <td><select name="companyid" id="companyid" class="form-control">
                                <option>Select Company Name</option>
                            @foreach($data as $row)
                                <option value="{{$row['id']}}">{{$row['company']}}</option>
                            @endforeach
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Item Code</td>
                            <td><input type="text" name="itemcode" id="itemcode" class="form-control" placeholder="Item Code" value="Item" required></td>
                        </tr>
                        <tr>
                            <td>Item Name</td>
                            <td><input type="text" name="itemname" id="itemname" class="form-control" placeholder="Item Name" required></td>
                        </tr>
                        <tr>
                            <td>Units</td>
                            <td><select name="units" id="units" class="form-control">
                                <option>Select unit</option>
                                <option value="dozen">Dozen</option>
                                <option value="piece">Piece</option>
                                <option value="meter">Meter</option>
                            </td>
                        </tr>
                        <tr>
                            <td>Rate per Unit</td>
                            <td><input type="text" name="rate" id="rate" class="form-control rate" placeholder="Item Name" required></td>
                        </tr>
                        <tr>
                            <td>Tax </td>
                            <td><select name="taxgroupid" id="taxgroupid" placeholder="Select Tax group" class="form-control">
                                <option>Select Tax group</option>
                                <option value="1">GST</option>
                            </td>
                            <td><select name="taxid" id="taxid" placeholder="Select Tax group" class="form-control">
                                <option>Select Tax </option>
                                <option value="1">SGST</option>
                                <option value="2">CGST</option>
                            </td>
                            <td><input type="text" name="percentage" id="percentage" class="form-control percentage" placeholder="Percentage" required></td>
                        </tr>
                        <tr>
                            <td>Total Amount</td>
                            <td><input type="text" name="total" id="total" class="form-control total" placeholder="" required></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><textarea name="description" id="description" class="form-control" placeholder="Description"></textarea></td>
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
    <script type="text/javascript">
        $('tbody').delegate('.rate,.percentage','keyup',function(){
            var tr = $(this).parent().parent();
            var rate=tr.find('.rate').val();
            var percentage=tr.find('.percentage').val();
            var total=(rate)+(rate*percentage)/100;
            tr.find('.total').val(total);
        });
    </script>
@include('basic.footer')