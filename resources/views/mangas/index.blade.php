<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga Library | Neo-Tokyo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            background-color: #0d0d1a;
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h1 {
            font-family: 'Orbitron', sans-serif;
            color: #ff00ff;
            text-shadow: 0 0 10px #ff00ff, 0 0 20px #ff00ff;
            text-transform: uppercase;
        }
        .card {
            background: rgba(20, 20, 40, 0.9);
            border: 2px solid #00f2ff;
            box-shadow: 0 0 15px rgba(0, 242, 255, 0.3);
            border-radius: 15px;
        }
        .table {
            color: #fff;
            border-color: #444;
        }
        .table thead {
            background-color: #00f2ff;
            color: #000;
        }
        .btn-neon-pink {
            background-color: transparent;
            border: 2px solid #ff00ff;
            color: #ff00ff;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-neon-pink:hover {
            background-color: #ff00ff;
            color: #fff;
            box-shadow: 0 0 20px #ff00ff;
        }
        .btn-neon-blue {
            background-color: transparent;
            border: 2px solid #00f2ff;
            color: #00f2ff;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-neon-blue:hover {
            background-color: #00f2ff;
            color: #000;
            box-shadow: 0 0 20px #00f2ff;
        }
        .badge-otaku {
            background: #ff00ff;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>My Manga Collection</h1>
        <a href="{{ route('mangas.create') }}" class="btn btn-neon-blue">+ Agregar Manga</a>
    </div>

    <div class="card p-4">
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Tomos</th>
                    <th>Género</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mangas as $manga)
                <tr style="vertical-align: middle;">
                    <td class="fw-bold" style="color: #00f2ff;">{{ $manga->titulo }}</td>
                    <td>{{ $manga->autor }}</td>
                    <td><span class="badge-otaku">{{ $manga->tomos }}</span></td>
                    <td>{{ $manga->genero }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('mangas.edit', $manga->id) }}" class="btn btn-sm btn-outline-info">Editar</a>
                            
                            <form action="{{ route('mangas.destroy', $manga->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-neon-pink" onclick="return confirm('¿Seguro que quieres borrar este manga?')">Borrar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        @if($mangas->isEmpty())
            <p class="text-center mt-3 text-muted">No hay mangas registrados en la base de datos de Neo-Tokyo.</p>
        @endif
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>