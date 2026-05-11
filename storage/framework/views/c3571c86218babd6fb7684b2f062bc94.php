<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Manga | Neo-Tokyo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { background-color: #0d0d1a; color: #fff; font-family: 'Segoe UI', sans-serif; }
        h1 { font-family: 'Orbitron', sans-serif; color: #00f2ff; text-shadow: 0 0 10px #00f2ff; }
        .card { background: rgba(20, 20, 40, 0.9); border: 2px solid #ff00ff; border-radius: 15px; }
        .form-label { color: #ff00ff; font-weight: bold; }
        .form-control { background: #1a1a2e; border: 1px solid #444; color: #fff; }
        .form-control:focus { background: #1a1a2e; border-color: #00f2ff; color: #fff; box-shadow: 0 0 10px #00f2ff; }
        .btn-save { background: transparent; border: 2px solid #00f2ff; color: #00f2ff; font-weight: bold; }
        .btn-save:hover { background: #00f2ff; color: #000; box-shadow: 0 0 20px #00f2ff; }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4">Registrar Nuevo Manga</h1>
            <div class="card p-4">
                <form action="<?php echo e(route('mangas.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label">Título del Manga</label>
                        <input type="text" name="titulo" class="form-control" placeholder="Ej. Chainsaw Man" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Autor</label>
                        <input type="text" name="autor" class="form-control" placeholder="Ej. Tatsuki Fujimoto" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Tomos</label>
                            <input type="number" name="tomos" class="form-control" value="1" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Género</label>
                            <select name="genero" class="form-control" required>
                                <option value="Shonen">Shonen</option>
                                <option value="Shojo">Shojo</option>
                                <option value="Seinen">Seinen</option>
                                <option value="Josei">Josei</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Sinopsis (Breve descripción)</label>
                        <textarea name="sinopsis" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?php echo e(route('mangas.index')); ?>" class="text-white mt-2">Volver</a>
                        <button type="submit" class="btn btn-save">Guardar en la Base de Datos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH C:\Users\mackg\manga-library\resources\views/mangas/create.blade.php ENDPATH**/ ?>