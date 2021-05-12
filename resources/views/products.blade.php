@extends('layouts.app')

@section('title', 'Products')

@section('content')

    @foreach ($products as $product)
        <div>
            <h2> {{ $product['name'] }} </h2>
            <p> Color: {{ $product['color'] }}</p>
            <p> Size: @if ($product['size_num'])
                {{ $product['size_num'] }}
            @else
                {{ $product['size_string']}}
            @endif </p>

        </div>
    @endforeach
@endsection