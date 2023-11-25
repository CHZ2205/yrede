<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial - yrede</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: space-between;
            background-color: #444;
            padding: 10px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .post {
            background-color: #fff;
            margin: 20px 0;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .post h2 {
            margin-top: 0;
        }
        .post hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #ccc;
        }
        .postagem {
            align-items:center;
            text-align: center; 
            margin-top: 20px;"
            display: inline-block; 
            padding: 10px 20px;
            background-color: blue; 
            color: #fff; 
            text-decoration: none; 
            border-radius: 5px;
            font-size:30px;
        }
    </style>
</head>
<body>

    <header>
        <h1>Bem-vindo</h1>
        <h3>site programado by Carlos</h2>
    </header>

    <nav>
        <div>
            <a href="/cadastra-usuario">Criar Conta</a>
            <a href="/login">Login</a>
        </div>
    </nav>

    <div>
            <a class="postagem" href="/cria-post">Nova Postagem</a>
    </div>

    <div class="container">
        <h2>Posts:</h2>
        @foreach ($posts as $post)
        <div class="post">
            <h2>Postagem - {{$post->id}}</h2>
            <p>{{$post->mensagem}}</p>
            <hr>
        </div>
        @endforeach
    </div>

</body>
</html>
