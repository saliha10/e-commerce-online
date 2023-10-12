<div class="mb-3 col-md-6">
    <label for="{{$id}}" class="form-label">{{$title}}</label>
    <input class="form-control" type="{{$type}}" id="{{$id}}" name="{{$name}}" value="" autofocus @if($required) required @endif />
</div>
