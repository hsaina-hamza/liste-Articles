<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f2f5f7;
            padding: 30px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .add-new {
            background-color: #27ae60;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }

        .add-new:hover {
            background-color: #219a52;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background-color: #2c3e50;
            color: white;
            text-transform: uppercase;
            text-align: center;
        }

        tr:hover {
            background-color: #f0f8ff;
        }

        .actions {
            display: flex;
            gap: 5px;
            justify-content: center;
        }

        .btn {
            padding: 8px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
            color: white;
            text-decoration: none;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .btn-edit {
            background-color: #2980b9;
        }

        .btn-delete {
            background-color: #e74c3c;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="header">
            <h1>Liste des Articles</h1>
            <a href="{{ route('articles.create') }}" class="add-new">Ajouter un Article</a>
        </div>

        <table>
            @if ($articale->count() > 0)
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
                    <td class="actions">
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-edit">Modifier</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" style="text-align: center;">Aucun article trouvé</td>
                </tr>
            @endif
        </table>
    </div>
</body>
</html>
