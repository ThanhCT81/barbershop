@extends('admin.layout.master');
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">EDIT</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" enctype="multipart/form-data" method="post"
                                action="{{ route('admin.product.update', ['product' => $product->id]) }}">
                                @method('put')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input name="name" type="text" class="form-control  " id="name"
                                            placeholder="Enter name" value="{{ $product->name }}">
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input name="slug" type="text" class="form-control  " id="slug"
                                            placeholder="a-b-c" value="{{ $product->slug }}">
                                        @error('slug')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input name="price" type="number" class="form-control  " id="exampleInputEmail1"
                                            placeholder="Enter Price" value="{{ $product->price }}">
                                        @error('price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="discount_price">Discount Price</label>
                                        <input name="discount_price" type="number" class="form-control  "
                                            id="exampleInputEmail1" placeholder="Enter Discount Price"
                                            value="{{ $product->discount_price }}">
                                        @error('discount_price')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="short_description">Short Description</label>
                                        <textarea name="short_description" type="text" class="form-control " rows="3" id="short_description"
                                            placeholder="Enter Short Description" value="{{ old('short_description') }}">{{ $product->short_description }}</textarea>
                                        @error('short_description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="qty">Quantity</label>
                                        <input name="qty" type="number" class="form-control  " id="exampleInputEmail1"
                                            placeholder="Enter Quantity" value="{{ $product->qty }}">
                                        @error('qty')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="information">Information</label>
                                        <textarea name="information" type="text" class="form-control  " rows="3" id="information"
                                            placeholder="Enter Information" value="{{ old('information') }}">{{ $product->information }}</textarea>
                                        @error('information')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input name="image" type="file" class="form-control  " id="exampleInputEmail1"
                                            placeholder="Enter Image" value="{{ old('image') }}">
                                        @error('image')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="custom-select" name="status">
                                            <option value="">---Please Select---</option>
                                            <option {{ $product->status === 1 ? 'selected' : '' }} value="1">Show
                                            </option>
                                            <option {{ $product->status === 0 ? 'selected' : '' }} value="0">Hide
                                            </option>
                                        </select>
                                        @error('status')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Product Category</label>
                                        <select class="custom-select" name="product_category_id">
                                            <option value="">---Please Select---</option>
                                            @foreach ($productCategories as $productCategory)
                                                <option
                                                    {{ $productCategory->id == $product->product_category_id ? 'selected' : '' }}
                                                    value="{{ $productCategory->id }}">
                                                    {{ $productCategory->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('status')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('js-custom')
    <script>
        ClassicEditor
            .create(document.querySelector('#short_description'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#information'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#name').on('keyup', function() {
                var name = $('#name').val();
                console.log('name', name);

                $.ajax({
                    method: "POST",
                    url: "{{ route('admin.product.create.slug') }}",
                    data: {
                        'name': name,
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(res) {
                        $('#slug').val(res.slug);
                    }
                });
            });
        });
    </script>
@endsection
