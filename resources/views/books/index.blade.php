@foreach($books as $book)
    <li>{{$book->title}} by {{$book->user->name}} </li>
@endforeach