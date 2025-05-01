<!DOCTYPE html>
<html>
<head>
    <title>Liste des Articles</title>
    <style>
        body { padding: 20px; }
        table { 
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td { 
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th { background-color: #4CAF50; color: white; }
        .btn {
            padding: 5px 10px;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin: 2px;
        }
        .btn-add { background-color: #4CAF50; }
        .btn-edit { background-color: #2196F3; }
        .btn-delete { background-color: #f44336; }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Liste des Articles</h2>
        <a href="/articles/create" class="btn btn-add">Ajouter Article</a>
    </div>

    <table>
        <tr>
            <th>Contenu</th>
            <th>Titre</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        @foreach ($articale as $article)
        <tr>
            <td>{{ $article->contenu }}</td>
            <td>{{ $article->titre }}</td>
            <td>{{ $article->date }}</td>
            <td>
                <a href="/articles/{{ $article->id }}/edit" class="btn btn-edit">Modifier</a>
                <form action="/articles/{{ $article->id }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
