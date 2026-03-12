@extends('layouts.master')
@section('content')
    @foreach($products as $product)
    <div class="card mt-2">
        <div class="card-body">
            <div class="row">
                <div class="col col-sm-12 col-lg-8 mt-3">
                    <h3>{{$product->name}}</h3>
                    <table class="table table-striped">
                        <tr><th width="20%">Name</th><td>{{$product->name}}</td></tr>
                        <tr><th>Description</th><td>{{$product->description}}</td></tr>
                        <tr><th>Status</th><td>{{$product->status}}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection