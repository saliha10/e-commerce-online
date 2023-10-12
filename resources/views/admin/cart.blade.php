@extends('admin/admintemplate')
@section('content')
<table id="cart" class="table table-hover table-condensed">
<thead>
<tr>
<th style="width: 50%">Product</th>
<th style="width:10%">Price</th>
<th style="width: 8%">Quantity</th>
<th style="width:22%" class="text-center">Subtotal</th> <th style="width:10%"></th>
</tr>
</thead>
<tbody>
@php $total = 0 @endphp
@if(session('cart'))
@foreach(session('cart') as $id => $details)
@php $total += $details['price'] * $details['quantity'] @endphp
<tr data-id="{{ $id }}">
<td data-th="Product">
<div class="row">
<div class="col-sm-3 hidden-xs"><img src="{{ asset('img2') }}/{{ $details['photo'] }}" width="100" height="18 <div class="col-sm-9">
<h4 class="nomargin">{{ $details['product_name'] }}</h4>
</div>
</div>
</td>
<td data-th="Price">${{ $details['price'] }}</td>
<td data-th="Quantity">
</td>
<input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
<td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td> <td class="actions" data-th="">
<button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
</td>
</tr>
@endforeach
@endif
</tbody>
</table>
@endsection