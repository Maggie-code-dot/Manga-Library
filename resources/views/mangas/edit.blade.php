<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Manga | Neo-Tokyo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { background-color: #0d0d1a; color: #fff; font-family: 'Segoe UI', sans-serif; }
        h1 { font-family: 'Orbitron', sans-serif; color: #ff00ff; text-shadow: 0 0 10px #ff00ff; }
        .card { background: rgba(20, 20, 40, 0.9); border: 2px solid #00f2ff; border-radius: 15px; }
        .form-label { color: #00f2ff; font-weight: bold; }
        .form-control { background: #1a1a2e; border: 1px solid #444; color: #fff; }
        .form-control:focus { border-color: #ff00ff; box-shadow: 0 0 10px #ff00ff; }
        .btn-update { background: transparent; border: 2px solid #ff00ff; color: #ff00ff; font-weight: bold; }
        .btn-update:hover { background: #ff00ff; color: #fff; box-shadow: 0 0 20px #ff00ff; }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4">Editar Datos del Manga</h1>
            <div class="card p-4">
                <form action="{{ route('mangas.update', $manga->id) }}" method="POST">
                    @csrf
                    @method('PUT') {{-- Esto es vital para que Laravel sepa que es una edición --}}
                    
                    <div class="mb-3">
                        <label class="form-label">Título</label>
                        <input type="text" name="titulo" class="form-control" value="{{ $manga->titulo }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Autor</label>
                        <input type="text" name="autor" class="form-control" value="{{ $manga->autor }}" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tomos</label>
                            <input type="number" name="tomos" class="form-control" value="{{ $manga->tomos }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Género</label>
                            <select name="genero" class="form-control" required>
                                <option value="Shonen" {{ $manga->genero == 'Shonen' ? 'selected' : '' }}>Shonen</option>
                                <option value="Shojo" {{ $manga->genero == 'Shojo' ? 'selected' : '' }}>Shojo</option>
                                <option value="Seinen" {{ $manga->genero == 'Seinen' ? 'selected' : '' }}>Seinen</option>
                                <option value="Josei" {{ $manga->genero == 'Josei' ? 'selected' : '' }}>Josei</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sinopsis</label>
                        <textarea name="sinopsis" class="form-control" rows="3">{{ $manga->sinopsis }}</textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('mangas.index') }}" class="text-white mt-2">Cancelar</a>
                        <button type="submit" class="btn btn-update">Actualizar Registro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>