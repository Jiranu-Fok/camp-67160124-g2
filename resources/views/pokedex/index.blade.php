<!DOCTYPE html>
<html>
<head>
    <title>Pokedex List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <a href="{{ url('/pokedex/create') }}" class="btn btn-success mb-3">Add Pokemon</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>HP</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pokedexs as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>{{ $p->type }}</td>
                <td>{{ $p->hp }}</td>
                <td>
                    <a href="{{ url('/pokedex/'.$p->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ url('/pokedex/'.$p->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>
