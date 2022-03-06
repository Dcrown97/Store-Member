@if ($message = Session::get('success'))
<div class = 'alert'>
    <button type="button">x</button>
    <strong>{{$message}}</strong>
</div>
@endif
@if ($message = Session::get('error'))
<div class = 'alert'>
    <button type="button">x</button>
    <strong>{{$message}}</strong>
</div>
@endif

@if ($errors->any())
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
@endif
