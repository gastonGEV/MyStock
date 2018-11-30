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
    <div class="div-btn">
        <button class="btn-up" type="button" onclick="upScroll()" title="up to first element">
            <span class="">up</span>
        </button>
    </div>
    
    <!--Loading ANIMATION-->
    <div hidden id="loader">
        <div id="circle">
        <div class="loader">
        <div class="loader">
            <div class="loader">
                <div class="loader"></div>
            </div>
            </div>
            </div>
        </div> 
    </div>
    <!--END Loading ANIMATION-->
@endsection