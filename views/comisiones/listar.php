<head>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 30px;
    }

    h2 {
        color: #333;
        text-align: center;
    }

    a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }

    .nueva {
        display: inline-block;
        margin-bottom: 20px;
        padding: 10px 15px;
        background-color: #007bff;
        color: white;
        border-radius: 5px;
    }

    .nueva:hover {
        background-color: #0056b3;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    th, td {
        padding: 12px;
        border-bottom: 1px solid #ddd;
        text-align: center;
    }

    th {
        background-color: #f8f8f8;
    }

    td a {
        margin: 0 5px;
        font-size: 18px;
    }

    td a:hover {
        opacity: 0.7;
    }
</style>

</head>   

<h2>Listado de Comisiones</h2>
<a href="comisiones.php?accion=nuevo">➕ Nueva comisión</a>
<table border="1">
    <tr>
        <th>ID</th><th>Nombre Comisión</th><th>División</th><th>Acciones</th>
    </tr>
    <?php foreach ($comisiones as $c): ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= $c['nombre_comision'] ?></td>
            <td><?= $c['division'] ?></td>
            <td>
                <a href="comisiones.php?accion=editar&id=<?= $c['id'] ?>">✏️</a>
                <a href="comisiones.php?accion=eliminar&id=<?= $c['id'] ?>" onclick="return confirm('¿Eliminar?')">🗑️</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="index.php" style="
    display: inline-block;
    margin-bottom: 20px;
    padding: 8px 16px;
    background-color: #6c757d;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px;
">
    ⬅️ Volver al menú
</a>

