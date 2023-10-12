@extends('admin/admintemplate')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Product</h4>

    <div class="row">
        <div class="col-md-12">

            <form method="post" action="{{url('/admin/edit-product/' . $products['id'])}}" enctype="multipart/form-data">
                @csrf
                <div class="card mb-4">
                    <!-- <h5 class="card-header">Add Services</h5> -->
                    <!-- Account -->
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <div class="button-wrapper">
                                <label for="photo" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="photo" name='photo' class="account-file-input" hidden accept="image/png, image/jpeg" />
                                </label>
                                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reset</span>
                                </button>

                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                            {{-- <div class="img_thumbnail productlist">
                                <img src="{{ $product['photo'] }}" class="img-fluid w-40 h-30"> --}}
                            <div class="mb-3">
                                <label for="product_feature" class="form-label">Feature on Home page</label>
                                <select class="form-select" id="product_feature" name="product_feature">
                                  <option selected="" value="{{$products['product_feature']}}">Select one</option>
                                  <option value="yes">Yes</option>
                                  <option value="no">No</option>
                                </select>
                        </div>
                            <x-input name="product_name" title="Name" value="{{$products['product_name']}}" id="product_name" type="text" required/>
                            <x-input name="product_description" value="{{$products['product_description']}}" title="Description" id="product_description" type="text" required/>
                            <x-input name="price" title="Price" value="{{$products['price']}}" id="price" type="text" required/>
                            <x-input name="product_quantity" value="{{$products['product_quantity']}}" title="Quantity" id="product_quantity" type="text" required/>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                    </div>
                    <!-- /Account -->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
