@extends('layouts.master')

<head>

    @section('style')

    @endsection

</head>

@section('nav')
<!-- NavBar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin / Edit Leave Type</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="AdminHomePage.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="LoginPage.html">Logout</a>
            </li>
        </ul>e-danger" role="button">Cancel</a>
        </form>
        <form class="form-inline my-2 my-lg-0">
            <a href="AdminHomePage.html" class="btn btn-outlin
    </div>
</nav>
<!-- **************************************************************************************************************** -->
@endsection

@section('content')

<!--Table to edit Leave-->
<table class="table table-hover">
    <thead>

    <tr class="table-dark">
        <th scope="row">Leave Type Name</th>
        <th>Days Available</td>
        <th>Warning Days</td>
        <th>Gender</td>
        <th>Other</td>
    </tr>
    <td><div contenteditable="true" >Sick</div></td>
    <td><div contenteditable="true" >10</div></td>
    <td><div contenteditable="true" >1</div></td>
    <td><div contenteditable="true" >Female</div></td>
    <td><div contenteditable="true" >Needs Dockter Certificate</div></td>
    </tbody>

    <!-- Footer for delete and update buttons -->
    <div class="card-footer p-0">

        <tr>
            <th colspan="8">
                <button type="button" class="btn btn-outline-warning">Edit</button>&nbsp &nbsp
            </th>
        </tr>
    </div>
</table>

<!-- **************************************************************************************************************** -->
@endsection
