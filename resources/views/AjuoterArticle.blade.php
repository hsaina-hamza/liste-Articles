{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{route('store')}}" mothel="POST">
        <div>
            <label>Date:</label>
            <input type="date">
        </div>
        <div>
            <label>Titre:</label>
            <input type="text">
        </div>
        <div>
            <label>Contenu:</label>
            <input type="text">
        </div>
        <div>
            <button><a href="#">Ajoute</a></button>
        </div>




    </form>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Article</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 30px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <form action="{{ route('store')}}"  method="POST"
    >
        @csrf

        <div>
            <label for="date">Date:</label>
            <input type="date" name="date"  required>
        </div>

        <div>
            <label for="title">Titre:</label>
            <input type="text" name="title"  required>
        </div>

        <div>
            <label for="content">Contenu:</label>
            <input type="text" name="content"  required>
        </div>

        <div>
            <button type="submit"><a href="{{ route('store') }}">Ajouter</a></button>
        </div>
    </form>
</body>

</html>
