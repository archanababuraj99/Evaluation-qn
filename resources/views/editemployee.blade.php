@extends("theme")
@section("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>

<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<form action="/editemployee/{{$employee->id}}" method="post">
{{ csrf_field() }}
<table class="table">
<tr>
    <td>Emp Code</td>
    <td><input value="{{$employee->ecode}}" name="ecode" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Name</td>
    <td><input value="{{$employee->ename}}" name="ename" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Designation</td>
    <td><input value="{{$employee->edes}}" name="edes" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Salary</td>
    <td><input value="{{$employee->esalary}}" name="esalary" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Company Name</td>
    <td><input value="{{$employee->ecompany}}" name="ecompany" type="'text'" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-success">Submit</button></td>
</tr>
</table>
</form>
</div>

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
</div>
</div>

@endsection
