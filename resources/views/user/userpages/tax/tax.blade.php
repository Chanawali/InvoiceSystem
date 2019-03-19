@include('basic.header')

    <div id="content">
        
           <h5>Add Tax</h5>
           <div class="container">
                <form action="/addtax" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <table class="table table-borderless">
                            <tr>
                                <td>Master id</td>
                                <td><input type="text" name="group_id" id="group_id" value="<?php echo $tax->id ?>" class="form-control" readonly></td>
                            </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="tax_name" id="tax_name" class="form-control" placeholder="Name of tax" required></td>
                        </tr>
                        <tr>
                            <td>percentage</td>
                            <td><input type="text" name="percentage" id="percentage" class="form-control" placeholder="Tax Percentage" required></td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td colspan="2">
                                <button type="submit" id="submit" class="btn btn-info">
                                    <span>Add</span>
                                </button>
                                <button type="reset" id="reset" class="btn btn-normal">
                                    <span>Cancel</span>
                                </button>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
                
    </div>
@include('basic.footer')