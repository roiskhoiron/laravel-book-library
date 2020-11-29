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
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
