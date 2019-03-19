<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 1500px;
	height: 606px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	width: 1500px;
	height: 219px;
	z-index: 2;
	background-color: #39F;
}
#apDiv3 {
	position: absolute;
	width: 200px;
	height: 95px;
	z-index: 1;
}
#apDiv4 {
	position: absolute;
	width: 134px;
	height: 53px;
	z-index: 2;
	left: 1200px;
	top: 1px;
}
#apDiv5 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 3;
	left: 2px;
	top: 100px;
}
#apDiv6 {
	position: absolute;
	width: 1096px;
	height: 291px;
	z-index: 2;
	left: 0px;
	top: 144px;
}
#apDiv7 {
	position: absolute;
	width: 1500px;
	height: 27px;
	z-index: 3;
	left: 2px;
	top: 670px;
	background-color: #39F;
}
}
</style>
</head>

<body>
<div id="apDiv1">
  <div id="apDiv2">
    <div id="apDiv3">
            <h3>Eye open technologies</h3>
                Archana Bhat
                archana7bhat@gmail.com
                7002142889
                Address:
                    XYZ
    </div>
    <div id="apDiv4">
        <h5>Estimate Number: {{ $est->estimateid }} </h5>
        To: {{ $est->company }}
        {{ $est->customer }}
        {{ $est->emailid }}
        {{ $est->phone }}
            Billing Address:
            {{ $est->bill_building }}
            {{ $est->bill_street }}
            {{ $est->bill_area }}
            {{ $est->bill_city }}
            <br />
            Shipping Address:
            {{ $est->ship_building }}
            {{ $est->ship_street }}
            {{ $est->ship_area }}
            {{ $est->ship_city }}
    </div>
    <div id="apDiv5">
       
      <div id="apDiv6">
            <table width="100%" border="1">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Amount</th>
                            <th>discount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{ $row['itemcode'] }}</td>
                            <td>{{$row['quantity'] }}</td>
                            <td>{{ $row['rate'] }}</td>
                            <td>{{ $row['amount'] }}</td>
                            <td>{{ $row['discount'] }}</td>
                            <td>{{ $row['total'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="1"></td>
                            <td align="left">Total</td>
                            <td align="left" class="gray">€15,-</td>
                        </tr>
                    </tfoot>
                </table>

      </div>
    </div>
  </div>
  <div id="apDiv7"></div>
</div>
</body>
</html>
