@include('basic.header')
@include('user.userdesign.menu')
    <div id="content">
        @include('user.userdesign.horizontalmenu')  
           <h5>Tax Settings</h5>
           <div class="container">
                <form action="/addtaxgroup" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <table class="table table-borderless">
                        <tr>
                            <td><input type="text" name="taxgroup" id="taxgroup" placeholder="Tax Group Name" class="form-control"></td>
                            <td><button type="submit" id="submit" class="btn btn-info"><span>Add</span></button></td>
                        </tr>
                    </table>
                </form>
            </div>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Tax group Id</th>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row['id']}}</td>
                        <td>{{$row['taxgroup']}}</td>
                        <td><a href='{{"/viewaddtax/{$row['id']}"}}' class="btn btn-primary">Add</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@include('basic.footer')
