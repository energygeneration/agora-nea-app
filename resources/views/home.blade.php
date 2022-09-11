@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (auth()->user()->is_admin == 1)
                            <a href="{{ url('admin/routes') }}">Admin</a>
                        @else
                            <div class=”panel-heading”>Normal User</div>
                        @endif
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Laravel 8 CRUD Example </h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('create') }}" title="Create a product"> <i
                                class="fas fa-plus-circle"></i>
                        </a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p></p>
                </div>
            @endif

            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>description</th>
                    <th>Price</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td></td>
                        <td>
                            <form action="" method="POST">

                                <a href="" title="show">
                                    <i class="fas fa-eye text-success  fa-lg"></i>
                                </a>

                                <a href="">
                                    <i class="fas fa-edit  fa-lg"></i>
                                </a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                    <i class="fas fa-trash fa-lg text-danger"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

            {{-- {!! $products->links() !!} --}}
        </div>
        </div>
    </div>
@endsection
