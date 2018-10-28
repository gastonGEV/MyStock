@extends('layouts.main')

@section('content')
<h1 class="text-center">Details Products Combo {{$combo->name}}</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">BarCode</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Cant</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->barCode }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->type->name }}</td>
                    <td>{{ $product->pivot->cant_product }}</td>
                </tr>
            @empty
                <p>No hay productos!</p>
            @endforelse
        </tbody>
    </table>

@endsection