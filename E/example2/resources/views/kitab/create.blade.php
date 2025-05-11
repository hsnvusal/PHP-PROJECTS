<form enctype="multipart/form-data" action="{{route('kitab.ekle.post')}}" method="POST">
    @csrf
    Kitab Resmi:
    <br>
    <input type="file" name="image">
    Kitab ismi: <br>
    <input type="text" name="isim" value="{{old('isim')}}">
    <br>
    <button>Ekle</button>
</form>
