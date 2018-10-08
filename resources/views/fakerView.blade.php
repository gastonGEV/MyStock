@extends('layouts.main')

@section('content')
    <h1 class="text-center">Products</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">BarCode</th>
                <th scope="col">Name</th>
                <th scope="col">CantMin</th>
                <th scope="col">Stock</th>
                <th scope="col">Cost</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->barCode }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->cantMin.' units' }}</td>
                    <td>{{ $product->cant.' units' }}</td>
                    <td>{{ '$ '.$product->cost }}</td>
                </tr>
            @empty
                <p>No hay productos!</p>
            @endforelse
        </tbody>
    </table>

@endsection