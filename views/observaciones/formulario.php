
<head>
    <head>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        padding: 30px;
    }

    form {
        width: 400px;
        margin: auto;
        background-color: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-top: 15px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
    }

    textarea {
        resize: vertical;
    }

    button {
        margin-top: 20px;
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        color: white;
        font-weight: bold;
        border: none;
        border-radius: 6px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

</head>
</head>

<h2><?= isset($observacion) ? 'Editar' : 'Nueva' ?> Observación</h2>
<form method="post" action="observaciones.php?accion=guardar">
    <input type="hidden" name="id" value="<?= $observacion['id'] ?? '' ?>">

    <label>Estudiante:</label>
    <input type="text" name="estudiante" required value="<?= $observacion['estudiante'] ?? '' ?>"><br><br>

    <label>Seguimiento:</label><br>
    <textarea name="seguimiento" rows="5" cols="40" required><?= $observacion['seguimiento'] ?? '' ?></textarea><br><br>

    <button type="submit">Guardar</button>
</form>

<a href="observaciones.php" style="
    display: inline-block;
    margin-left: 10px;
    padding: 8px 16px;
    background-color: #6c757d;
    color: white;
    text-decoration: none;
    border-radius: 5px;
">⬅️ Volver</a>

