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
    <a href="{{'/viewcontacts'}}">
          <i class="fas fa-arrow"></i>
            <span>back</span>
        </a>
      </button>


<table>
  <tr>

    <th>Company Name</th>
    <td><h2>{{ $contact->company }}</h2></td>
  </tr>
  <tr>
    <th>Type</th>
    <td>{{ $contact->type }}</td>
  </tr>
  <tr>
      <th>Owner's Name</th>
      <td>{{ $contact->fname }} &nbsp; {{ $contact->lname }}</td>
  </tr>
  <tr>
      <th>Contact Detail</th>
      <td>{{ $contact->mobile }} &nbsp;&nbsp;&nbsp;  {{ $contact->phone }}</td>
  </tr>
  <tr>
      <th>Email Id</th>
      <td>{{ $contact->emailid }}</td>
  </tr>
  <tr>
      <th>Office Address</th>
      <td>{{ $contact->bill_building }},&nbsp; {{ $contact->bill_street }},&nbsp; {{ $contact->bill_area }},&nbsp; {{ $contact->bill_city }} {{ $contact->company }}</td>
  </tr>
  <tr>
      <th>Shipping Address</th>
      <td>{{ $contact->ship_building }},&nbsp; {{ $contact->ship_street }},&nbsp; {{ $contact->ship_area }},&nbsp; {{ $contact->ship_city }},&nbsp; {{ $contact->company }}</td>
  </tr>
</table>

</body>
</html>
