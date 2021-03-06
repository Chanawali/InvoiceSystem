@include('basic.header')
@include('user.userdesign.menu')
    <div id="content">
        @include('user.userdesign.horizontalmenu')  
           <h5>Contact</h5>
           <div>
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                  <a href="{{'/addcontacts'}}">
                    <i class="fas fa-plus"></i>
                      <span>Add Contact</span>
                  </a>
                </button>
                <button type="button" id="sidebarCollapse" class="btn btn-info">
                  <a href="{{'/trashcontact'}}">
                    <i class="fas fa-trash"></i>
                      <span>Trash</span>
                  </a>
                </button>
            </div>
            <br/>
            <table class="table table-striped table-hover" id="myTable" width="100%">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Type </th>
                        <th scope="col">Company Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td><a href='{{"/viewdetailcontact/{$row['id']}"}}' class="btn btn-success">-></a></td>
                        <td>{{$row['type']}}</td>
                        <td>{{$row['company']}}</td>
                        <td>{{$row['mobile']}}</td>
                        <td><a href='{{"/editcontact/{$row['id']}"}}' class="btn btn-warning">Edit</a></td>
                        <td>
                            <form method="post" class="delete_form" action="{{url('/deletecontact',array($row['id']))}}">
                                {{csrf_field()}}
                                <input type="text" name="status" id="status" class="form-control" value="0" required hidden>
                                <button type="submit" id="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </tr>
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
    </div>
@include('basic.footer')