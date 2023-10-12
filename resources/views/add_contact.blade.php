@extends('template')

@section('content')
<style>
    #name {
    border: 2px dotted #800000;
    outline: none;
  }

  #address {
    border: 2px dotted #800000;
    outline: none;
  }

    #email {
    border: 2px dotted #800000;
    outline: none;
  }

  #phone{
     border: 2px dotted #800000;
    outline: none;
  }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
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

            <form method="post" action="{{url('/admin/contact')}}">
                @csrf
                <div class="card mb-4">
                    <h5 class="card-header">Add Contact</h5>

                    <hr class="my-0" />
                    <div class="card-body" style="">
                        <div class="row">
                            <x-input name="name" title="name" id="name" type="text" required/>
                            <x-input name="address" title="Address" id="address" type="text" required/>
                            <x-input name="email" title="Email" id="email" type="text" required/>
                            <x-input name="phone" title="Phone" id="phone" type="text" required/>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2" style=" border: 2px dotted #800000;
                            outline: none;">Submit</button>
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
