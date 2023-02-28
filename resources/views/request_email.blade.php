<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Please Check Request For Pricing</h2>
<table>
  <tr>
    <td>Customer Name</td>
    <td>{{$name}}</td>
  </tr>
  <tr>
    <td>Customer Email</td>
    <td>{{$email}}</td>
  </tr>
  <tr>
    <td>Customer Contact No.</td>
    <td>{{$contact_no}}</td>
  </tr>
  <tr>
    <td>Customer Message</td>
    <td>{{$user_message}}</td>
  </tr>
</table>

</body>
</html>
