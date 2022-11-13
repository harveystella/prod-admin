@extends('layouts.app')

@section('content')

<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <h2 class="card-title float-left">All Message Data</h2>
                        </div>

                        <div class="col-8">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped verticle-middle table-responsive-sm" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Sender Number</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $b)
                                <tr>
                                    <td>{{ $b->id }}</td>
                                    <td>{{ $b->mobile }}</td>
                                    <td>{{ $b->sender }}</td>
                                    <td>{{ $b->content }}</td>
                                    <td>{{ $b->created_at }}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    td{
        padding: 5px  10px !important;
    }
</style>

@endsection
