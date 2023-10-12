@extends('admin/admintemplate')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<style>
.card {
	background-color: #800000;
	border: 1px solid white;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	border-radius: 4px;
     width: 80%;
     height: 60%
     color: #E5B80B;
}


.card-body {
	padding: 20px;
    text-align: center;
    color: #E5B80B;
    width: 80%;
     height: 60%
}
</style>
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col">
				<p class="bread"><span><a href="{{URL('/')}}">Home</a></span> / <span>Contact</span></p>
			</div>
		</div>
	</div>
</div>

<div id="colorlib-contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="container text-center text-primary">CONTACT INFORMATION</h3>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tables as $table)
                                <tr>
                                    <td>{{$table->id}}</td>
                                    <td>{{$table->addres}}</td>
                                    <td>{{$table->email}}</td>
                                    <td>{{$table->phone}}</td>
                                    <td><a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn rounded-pill btn-icon btn-primary">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a></td>
                                </tr>
                            @endforeach
                        </tbody>
					</div>

				</div>
			</div>
		</div>
</div>

	@endsection
