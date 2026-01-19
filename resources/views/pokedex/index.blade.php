<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Pokedex List</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    <div class="container py-5">
        <h1>Pokedex List</h1>
        <div class="mb-3">
            <a href="{{ route('pokedexs.create') }}" class="btn btn-primary">+ เพิ่ม Pokemon ใหม่</a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>HP</th>
                    <th>ATK</th>
                    <th>DEF</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pokedexs as $poke)
                <tr>
                    <td>
                        @if($poke->image_url)
                            <img src="{{ $poke->image_url }}" style="height: 30px; margin-right: 5px;">
                        @endif
                        {{ $poke->name }}
                    </td>
                    <td><span class="badge bg-info text-dark">{{ $poke->type }}</span></td>
                    <td>{{ $poke->hp }}</td>
                    <td>{{ $poke->attack }}</td>
                    <td>{{ $poke->defense }}</td>
                    <td>
                        <a href="{{ route('pokedexs.edit', $poke->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('pokedexs.destroy', $poke->id) }}" method="POST" class="d-inline" onsubmit="return confirm('ยืนยันการลบ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>