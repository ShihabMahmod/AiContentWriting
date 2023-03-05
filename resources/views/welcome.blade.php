<form action="{{route('generate')}}" method="POST">
    @csrf
    <textarea name="query" cols="30" rows="10"></textarea>
    <input type="submit">
</form>