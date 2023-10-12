@extends('admin/admintemplate')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Service</h4>

    <div class="row">
        <div class="col-md-12">
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <form method="post" action="{{url('/admin/edit-service/' . $service['id'])}}">
                @csrf
                <div class="card mb-4">
                    <h5 class="card-header">Edit Services</h5>
                    <hr class="my-0" />
                    <div class="card-body">
                        <div class="row">
                            <x-input name="title" title="Name" id="name" type="text" required value="{{$service['title']}}"/>
                            <x-input name="description" title="Description" id="description" type="text" required value="{{$service['description']}}" />
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
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
