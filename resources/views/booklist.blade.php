@include('partials/header')

<table class="table-auto ">
    <thead class="bg-blue-700 text-slate-200">
        <tr>
            <th class="px-4">ID</th>
            <th class="px-12">ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>Date Published</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $book)
            <tr class="{{ $key % 2 == 0 ? 'bg-blue-100' : 'bg-blue-200' }}">
                <td class="text-center">{{ $book->id }}</td>
                <td class="text-center">{{ $book->isbn }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->date_published }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@include('partials/footer')