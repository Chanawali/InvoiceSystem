<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>
</head>
<body>

    <button type="button" id="sidebarCollapse" class="btn btn-info">
    <a href="{{'/viewitems'}}">
          <i class="fas fa-arrow"></i>
            <span>back</span>
        </a>
      </button>


<table>
  <tr>

    <th>Item Code</th>
    <td><h2>{{ $item->itemcode }}</h2></td>
  </tr>
  <tr>
    <th>Supplier's Name</th>
    <td>{{ $item->companyid }}</td>
  </tr>
  <tr>
      <th>Item Name</th>
      <td>{{ $item->itemname }}</td>
  </tr>
  <tr>
      <th>Units</th>
      <td>{{ $item->units }} </td>
  </tr>
  <tr>
      <th>Rate</th>
      <td>{{ $item->rate }}</td>
  </tr>
  <tr>
      <th> Tax Percentage</th>
      <td>{{ $item->percentage }}</td>
  </tr>
  <tr>
      <th>Total Amount</th>
      <td>{{ $item->total }}</td>
  </tr>
  <tr>
        <th>Description</th>
        <td>{{ $item->description }}</td>
    </tr>
</table>

</body>
</html>