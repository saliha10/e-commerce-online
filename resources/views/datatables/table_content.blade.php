<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
@elseif (Route::currentRouteName() == 'userlist' )
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Country</th>
            <th>City</th>
            <th>Address</th>
            <th>gender</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->country}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->addres}}</td>
                <td>{{$user->gender}}</td>
                <td><a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn rounded-pill btn-icon btn-primary">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a></td>
            </tr>
        @endforeach
    </tbody>
