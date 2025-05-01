<!DOCTYPE html>
<html>
<head>
    <title>Modifier Article</title>
    <style>
        body { padding: 20px; }
        form { max-width: 500px; margin: auto; }
        input { width: 100%; padding: 8px; margin: 10px 0; }
        button { 
            background: #2196F3; 
            color: white; 
            padding: 10px 20px; 
            border: none; 
            cursor: pointer; 
        }
    </style>
</head>
<body>
    <form action="/articles/{{ $article->id }}" method="POST">
        @csrf
        @method('PUT')
        <h2>Modifier l'Article</h2>

        <div>
            <label>Date:</label>
            <input type="date" name="date" value="{{ $article->date }}">
        </div>

        <div>
            <label>Titre:</label>
            <input type="text" name="titre" value="{{ $article->titre }}">
        </div>

        <div>
            <label>Contenu:</label>
            <input type="text" name="content" value="{{ $article->contenu }}">
        </div>

        <button type="submit">Modifier</button>
    </form>
</body>
</html>
