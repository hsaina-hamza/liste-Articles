<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Article</title>
    <style>
        body { padding: 20px; }
        form { max-width: 500px; margin: auto; }
        input { width: 100%; padding: 8px; margin: 10px 0; }
        button { 
            background: #4CAF50; 
            color: white; 
            padding: 10px 20px; 
            border: none; 
            cursor: pointer; 
        }
    </style>
</head>
<body>
    <form action="/articles" method="POST">
        @csrf
        <h2>Ajouter un Article</h2>

        <div>
            <label>Date:</label>
            <input type="date" name="date">
        </div>

        <div>
            <label>Titre:</label>
            <input type="text" name="titre">
        </div>

        <div>
            <label>Contenu:</label>
            <input type="text" name="content">
        </div>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
