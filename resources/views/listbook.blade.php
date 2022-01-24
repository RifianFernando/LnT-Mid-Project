
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>create book</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">judul</th>
            <th scope="col">penulis</th>
            <th scope="col">jumlah halaman</th>
            <th scope="col">terbit</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
            <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->penulis }}</td>
            <td>{{ $book->jumlahhalaman }}</td>
            <td>{{ $book->terbit }}</td>
            <td>
                <a href="{{route('vieweditbook', ['id'=>$book->id])}}"><button type="submit" class="btn btn-success">Edit</button></a>

                {{-- <form action="{{route('deletebook', ['id' => $book->id])}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> --}}

            </td>
            </tr>
        @endforeach
        </tbody>
      </table>
      <br>

    <form method="get" action="/">
        <button type="submit">Home</button>
    </form>
</body>
</html>
