<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Pokedex Form</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
    <div class="container py-5">
        <h1>{{ isset($pokedex) ? 'แก้ไข Pokemon' : 'เพิ่ม Pokemon ใหม่' }}</h1>

        <form action="{{ isset($pokedex) ? route('pokedexs.update', $pokedex->id) : route('pokedexs.store') }}" method="POST">
            @csrf
            
            @if(isset($pokedex))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ isset($pokedex) ? $pokedex->name : '' }}" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" value="{{ isset($pokedex) ? $pokedex->type : '' }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Species</label>
                    <input type="text" name="species" class="form-control" value="{{ isset($pokedex) ? $pokedex->species : '' }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="form-label">HP</label>
                    <input type="number" name="hp" class="form-control" value="{{ isset($pokedex) ? $pokedex->hp : '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Attack</label>
                    <input type="number" name="attack" class="form-control" value="{{ isset($pokedex) ? $pokedex->attack : '' }}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label">Defense</label>
                    <input type="number" name="defense" class="form-control" value="{{ isset($pokedex) ? $pokedex->defense : '' }}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Height</label>
                    <input type="number" step="0.01" name="height" class="form-control" value="{{ isset($pokedex) ? $pokedex->height : '' }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Weight</label>
                    <input type="number" step="0.01" name="weight" class="form-control" value="{{ isset($pokedex) ? $pokedex->weight : '' }}">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Image URL</label>
                <input type="text" name="image_url" class="form-control" value="{{ isset($pokedex) ? $pokedex->image_url : '' }}">
            </div>

            <button type="submit" class="btn btn-success">
                {{ isset($pokedex) ? 'อัปเดตข้อมูล' : 'บันทึกข้อมูล' }}
            </button>
            <a href="{{ route('pokedexs.index') }}" class="btn btn-secondary">ยกเลิก</a>
        </form>
    </div>
</body>
</html>