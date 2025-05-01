{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        @if ($articale->count()>0)
        <tr>
            <th>contenu</th>
            <th>titre  </th>
            <th>date</th>
            <th colspan="3">Action</th>
        </tr>
    
    
    @foreach ($articale as $articale)
    <tr>
        <td>{{$articale->contenu}}</td>
        <td>{{$articale->titre  }}</td>
        <td>{{$articale->date}}</td>
        <td><button><a href="">Add</a></button></td>
        <td><button><a href="">delet</a></button></td>
        <td><button><a href="">update</a></button></td>
        
    </tr>
    @endforeach
        
    @endif
</table>
</body>
</html> --}}


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

        a {
            text-decoration: none;
            color: white;
        }

        button {
            padding: 8px 16px;
            margin: 0 2px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        button:hover {
            transform: scale(1.05);
        }

        button a {
            display: block;
        }

        button:nth-child(1) {
            background-color: #27ae60;
        }

        button:nth-child(2) {
            background-color: #e74c3c;
        }

        button:nth-child(3) {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<table>
    @if ($articale->count() > 0)
        <tr>
            <th>Contenu</th>
            <th>Titre</th>
            <th>Date</th>
            <th colspan="3">Actions</th>
        </tr>
        @foreach ($articale as $articale)
        <tr>
            <td>{{ $articale->contenu }}</td>
            <td>{{ $articale->titre }}</td>
            <td>{{ $articale->date }}</td>
            <td><button><a href="/Article/create">Add</a></button></td>
            <td><button><a href="/show/{{$articale->id}}">Delete</a></button></td>
            <td><button><a href="#">Update</a></button></td>
        </tr>
        @endforeach
    @endif
</table>

</body>
</html>
