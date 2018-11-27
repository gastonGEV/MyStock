@extends('layouts.main')

@section('content')
    <h1 class="text-center">Products</h1>

    <div id="chatBox">
        <table class="table table-bordered">
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
            <tbody class="inner">
                {{-- @forelse ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->barCode }}</td>
                        <td>{{ $product->type->name }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->cantMin.' units' }}</td>
                        @switch($product->stock->cant)
                            @case(0)
                                <td class="table-danger">{{ $product->stock->cant.' units' }}</td>
                                @break
                            @case($product->stock->cant <= $product->cantMin)
                                <td class="table-warning">{{ $product->stock->cant.' units' }}</td>
                                @break
                            @default
                                 <td>{{ $product->stock->cant.' units' }}</td>
                        @endswitch
                        <td>{{ '$ '.$product->cost }}</td>
                    </tr>
                @empty
                    <p>No hay productos!</p>
                @endforelse --}}
                {{-- <div class="inner"></div> --}}
                <!--Loading ANIMATION-->
                <div class="loader">
                    <img id="loader" src='http://opengraphicdesign.com/wp-content/uploads/2009/01/loader64.gif'>
                </div>
                <!--END Loading ANIMATION-->
            </tbody>
        </table>
    </div>

@endsection