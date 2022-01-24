<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

    <h1>update form</h1>

    <form action="{{route('editbook', ['id' => $book->id])}}"  method="get" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Judul Buku</label>
            <input name="judul" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->judul}}" placeholder="input title" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Penulis Buku</label>
            <input name= "penulis" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->penulis}}" placeholder="input author" required>
        </div>

        <div class="mb-3">
            <label for="release" class="form-label">Jumlah halaman buku</label>
            <input name= "jumlahhalaman" type="numeric" class="form-control" id="formGroupExampleInput" value="{{$book->jumlahhalaman}}" placeholder="input release" required>
        </div>

        <div class="mb-3">
            <label for="Price" class="form-label">Tahun terbit buku</label>
            <input name= "terbit" type="date" class="form-control" id="formGroupExampleInput" value="{{$book->terbit}}" placeholder="input price" required>
        </div>
        @error('jumlahhalaman')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror

        @error('penulis')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror

        @error('required')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
            <button type="submit" class="btn btn-success">Update</button>
        </form>
        <br>
        <form action="{{route('deletebook', ['id' => $book->id])}}" method="get">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
<br>
    <form method="get" action="/listbook">
        <button type="submit">Back</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
