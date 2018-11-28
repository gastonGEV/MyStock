@extends('layouts.main')

@section('content')
    <h1 class="text-center">Products</h1>

    <table class="table ">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">BarCode</th>
                <th scope="col">Type</th>
                <th scope="col">Name</th>
                <th scope="col">CantMin</th>
                <th scope="col">Stock</th>
                <th scope="col">Cost</th>
            </tr>
        </thead>
        <tbody id="bodyTable" onscroll="scrolled()"></tbody>
    </table>
    <!--Loading ANIMATION-->
    <div class="loader">
        <img id="loader" src='http://opengraphicdesign.com/wp-content/uploads/2009/01/loader64.gif'>
    </div>
    <!--END Loading ANIMATION-->
@endsection