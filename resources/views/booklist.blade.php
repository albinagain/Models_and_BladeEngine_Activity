@include('partials/header')

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Date Published</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->date_published }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@include('partials/footer')