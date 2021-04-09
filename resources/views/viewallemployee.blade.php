!@extends("theme")
@section("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<table class="table">

<tr>
    <th>Code</th>
    <th>Name</th>
    <th>Designation</th>
    <th>Salary</th>
    <th>Company</th>
</tr>

@foreach($employee as $employee)
<tr>
    <td>{{$employee->ecode}}</td>
    <td>{{$employee->ename}}</td>
    <td>{{$employee->edes}}</td>
    <td>{{$employee->esalary}}</td>
    <td>{{$employee->ecompany}}</td>

    <td><a href="/employee/{{$employee->id}}/edit">Edit</a>
</tr>
  @endforeach
</table>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
</div>
</div>
@endsection