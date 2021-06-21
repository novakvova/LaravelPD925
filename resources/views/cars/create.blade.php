<h1>Add auto</h1>
<form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="images[]" multiple >
    <input type="submit" value="додати">
    <img src="{{asset('/storage/files/profile-60d08b8281d5a.jpg')}}" alt="">
</form>
