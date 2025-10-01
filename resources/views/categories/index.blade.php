<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Listar categorías</h1>

    @foreach ($categories as $category)
    <tr>
        <br>
        <td>{{$category->name}}</td><br>
        <td>{{$category->urlImg}}</td><br>
        <td> <iframe src="{{ 'http://localhost/larav3066446/public/storage/public/images/'.$category->urlImg }}" frameborder="0"></iframe></td>
        <td><a href="{{route('categories.show',$category->id)}}">Mostrar</a></td>
        <td><a href="{{route('categories.edit',$category->id)}}">Editar</a></td>
         <form action="{{route('categories.destroy',$category->id)}}" method="POST">
            @csrf
            @method('delete')
          <button type="submit">Eliminar</button>
        </form>

        <br>

    </tr>
@endforeach

</body>
</html>
