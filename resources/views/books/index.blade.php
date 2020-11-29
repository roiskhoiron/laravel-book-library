<html>
<head>
    <title>Book list</title>
</head>

<body>
<div style="background: #388BF2; font-size: 24px; color: white">
    Simple Library app
</div>

<div style="margin-top: 20px; margin-bottom: 20px">
    <table border="1">
        <a href="/books/add"> Add new book</a>

        <thead>
        <td>No</td>
        <td>Title</td>
        <td>Author</td>
        <td>Publication</td>
        <td>Year</td>
        <td colspan="2">Action</td>
        </thead>

        <tbody>
        @foreach($books as $index => $book)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><a href="{{ url("/books", $book->id) }}"> {{$book->title}} </a></td>
                <td>{{$book->author }}</td>
                <td>{{$book->publication}}</td>
                <td>{{$book->year}}</td>
                <td><a href="{{ url("/books/edit", $book->id) }}"> Edit </a></td>
                <td>
                    <form method="POST" action="/books/{{$book->id}}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                        <div>
                            <input type="submit" value="Delete">
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div style="background: #31B057; font-size: 20px; color: white">
    Created with love and Willingness to learn
</div>
</body>
</html>
