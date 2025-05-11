<form action="/" method="POST">
    @csrf
    <input type="text" name="name">
    @if($errors->first('name'))
        {{$errors->first('name')}}
    @endif
    <input type="text" name="email">
    @if($errors->first('email'))
        {{$errors->first('email')}}
    @endif
    <button>Gonder</button>
</form>

