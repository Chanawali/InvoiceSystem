@include('user.userdesign.menu')
    <div id="content">
        @include('user.userdesign.horizontalmenu')  
           <h5>Add Estimates</h5>
           <div class="container">
                <form action="/addestimate" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <section>
                        <div class="panel panel-header">
                            <div class="form-group">
                                <table class="table table-borderless">
                                <tr>
                                    <td>Estimate Number</td>
                                    <td><input type="text" name="estimateid" id="estimateid" class="form-control" value="EST" required></td>
                                </tr>
                                <tr>
                                    <td>Type</td>
                                    <td><select name="type" id="type" class="form-control">
                                        <option value="supplier">Supplier</option>
                                        <option value="dealer">Dealer</option>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Company Name</td>
                                    <td><select name="companyid" id="companyid" class="form-control">
                                        <option>Select Company Name</option>
                                        @foreach($data1 as $row)
                                            <option value="{{$row['id']}}">{{$row['company']}}</option>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ordered by</td>
                                        <td><input type="text" name="customer" id="customer" class="form-control" placeholder="Customer Name" required></td>
                                </tr>
                                <tr>
                                    <td>Estimate Date</td>
                                    <td><input type="date" name="estdate" id="estdate" class="form-control" required></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-footer">
                        <table class="table table-borderless" id="dynamic_field">
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Rate per unit</th>
                                    <th>Amount</th>
                                    <th>Discount</th>
                                    <th>Total</th>
                                    <th> <button type="button" name="add" id="add" class="btn btn-danger">+</button></th>             
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><select name="itemcode[]" id="itemcode" class="form-control itemcode" requires>
                                        <option>Select Item Name</option>
                                        @foreach($data2 as $row)
                                            <option value="{{$row['id']}}">{{$row['itemname']}}</option>
                                        @endforeach 
                                    </td>
                                    <td><input type="text" name="quantity[]" class="form-control quantity" requires></td>
                                    <td><input type="text" name="rate[]" class="form-control rate" requires></td>
                                    <td><input type="text" name="amount[]" class="form-control amount" requires readonly></td>
                                    <td><input type="text" name="discount[]" class="form-control discount" requires></td>
                                    <td><input type="text" name="total[]" class="form-control total" requires readonly></td>
                                    <td><a href="" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i>X</a></td>
                                </tr>
                            <tbody>
                            <tfoot>
                                <tr>
                                    <td style="boarder:none"></td>
                                    <td style="boarder:none"></td>
                                    <td style="boarder:none"></td>
                                    <td style="boarder:none"></td>
                                    <td><b>Grand Total</b></td>
                                    <td><b class="grandtotal"></b></td>
                                    <td></td>
                                <tr>
                            </tfoot>                        
                        </table>
                        <div align="right">
                                <button type="submit" id="submit" class="btn btn-info">
                                        <span>Save</span>
                                    </button>
                                <button type="reset" id="reset">
                                        <span>Cancel</span>
                                </button> 
                        </div>
                    </div>
               </section>
           </form> 
        </div>
    </div>
</div>
    

    <script type="text/javascript">
        $('tbody').delegate('.quantity,.rate,.discount','keyup',function(){
            var tr = $(this).parent().parent();
            var quantity=tr.find('.quantity').val();
            var rate=tr.find('.rate').val();
            var discount=tr.find('.discount').val();
            var amount=(quantity*rate);
            tr.find('.amount').val(amount);
            var total=(amount)-(amount*discount)/100;
            tr.find('.total').val(total);
            grandtotal();
        });
        function grandtotal(){
            var grandtotal=0;
            $('.total').each(function(){
                var total=$(this).val()-0;
                grandtotal+=total;
            });
            $('.grandtotal').html("Rs "+grandtotal);
        }

        //add dynamic  rows in tables
        $(document).ready(function(){      
          var postURL = "<?php echo url('addmore'); ?>";
          var i=1;  
    
    
          $('#add').click(function(){  
               i++;  
               $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added">'+
                    '<td><select name="itemcode[]" id="itemcode" class="form-control itemcode" requires><option>Select Item Name</option>@foreach($data2 as $row)<option value="{{$row['id']}}">{{$row['itemname']}}</option>@endforeach</td>'+
                    '<td><input type="text" name="quantity[]" class="form-control quantity" requires></td>'+
                    '<td><input type="text" name="rate[]" class="form-control rate" requires></td>'+
                    '<td><input type="text" name="amount[]" class="form-control amount" requires readonly></td>'+
                    '<td><input type="text" name="discount[]" class="form-control discount" requires></td>'+
                    '<td><input type="text" name="total[]" class="form-control total" requires readonly></td>'+
                    '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');});
    
    
          $(document).on('click', '.btn_remove', function(){  
               var button_id = $(this).attr("id");   
               $('#row'+button_id+'').remove();  
          });  

          
        });  
        //end add dynamic  rows in tables
    </script>
               
    
    

    @include('basic.footer')