@include('basic.header')
@include('user.userdesign.menu')
    <div id="content">
        @include('user.userdesign.horizontalmenu')  
           <h5>Items</h5>
            <div>
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <a href="{{'/viewitems'}}">
                        <span><- Back</span>
                    </a>
                </button>
                
            </div>
            <br/>
            <table class="table table-striped table-hover" id="myTable" width="100%">
                <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Company </th>
                        <th scope="col">Item code</th>
                        <th scope="col">Item Name</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td><a href='{{"/viewdetailitem/{$row['id']}"}}' class="btn btn-success">-></a></td>
                        <td>{{$row['companyid']}}</td>
                        <td>{{$row['itemcode']}}</td>
                        <td>{{$row['itemname']}}</td>
                        <td><form method="post" class="restore_form" action="{{url('/restoreitems',array($row['id']))}}">
                            {{csrf_field()}}
                            <input type="text" name="status" id="status" class="form-control" value="1" required hidden>
                            <button type="submit" id="submit" class="btn btn-danger">Restore</button>
                           </form>
                          </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    <!--live table-->
            <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
            <script>
            //Data table for first table
              $(document).ready(function(){
                    $('#myTable').DataTable({
                      language: 
                        {
                          lengthMenu:"Display _MENU_ records per page",
                          infoFiltered:"(filtered from _MAX_ total records)"
                        },
                        scrollX:true
                    });
                });
        
            </script>
    <!--Button-->
        <script>
            $(document).ready(function(){
             $(".delete_form").on('submit', function(){
              if(confirm("Are you sure you want to delete it?"))
              {
               return true;
              }
              else
              {
               return false;
              }
             });
            });
            </script>
@include('basic.footer')
