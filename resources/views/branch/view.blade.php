@extends('layout.app-master')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Product</strong> View</h1>
        
        <div class="row">
            <div class="col-md-2 my-4">
                <a class="btn btn-primary" href="{{route('branch.index')}}">Back</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered text">
                    <tr>
                        <td>ID</td>
                        <td>{{$branches->id}}</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{$branches->branch_name}}</td>
                    </tr>
                   
                    
                </table>
    
            </div>
        </div>

    </div>
</main>

    
@endsection