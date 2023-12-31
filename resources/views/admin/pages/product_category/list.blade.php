@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product Category List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product Category List</li>
                        </ol>
                    </div>
                    @if (session('message'))
                        <div class="col-sm-12 alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        {{-- <form action="" method="get">
                                            <input type="text" value="{{ $keyword }}" name="keyword"
                                                placeholder="Search...">
                                            <select name="orderBy">
                                                <option value="">---Please Select---</option>
                                                <option {{ $sortBy === 'lasted' ? 'selected' : '' }} value="lasted">Lasted
                                                </option>
                                                <option {{ $sortBy === 'oldest' ? 'selected' : '' }} value="oldest">Oldest
                                                </option>
                                            </select>
                                            <button type="submit">Search</button>
                                        </form> --}}
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a class="btn btn-primary "
                                            href="{{ route('admin.product_category.create') }}">Add</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($productCategories as $productCategory)
                                            <tr>
                                                <td>{{ $loop->iteration }} </td>
                                                <td>{{ $productCategory->name }} </td>
                                                <td>
                                                    <div
                                                        class="{{ $productCategory->status ? 'btn btn-success' : 'btn btn-danger' }}">
                                                        {{ $productCategory->status ? 'Show' : 'Hide' }}
                                                    </div>
                                                </td>
                                                <td>{{ $productCategory->created_at }}</td>
                                                <td>{{ $productCategory->updated_at }}</td>
                                                <td>
                                                    <form
                                                        action="{{ route('admin.product_category.destroy', ['product_category' => $productCategory->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button onclick="return confirm('Are You Sure???')" type="submit"
                                                            class="btn btn-danger">Delete</button>
                                                    </form>
                                                    <a class="btn btn-primary"
                                                        href="{{ route('admin.product_category.show', ['product_category' => $productCategory->id]) }}">Edit</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <td colspan="4">No Data</td>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{ $productCategories->links() }}
                            </div>
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
