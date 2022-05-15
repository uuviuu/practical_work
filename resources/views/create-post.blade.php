<!doctype html>
<html lang="en">

<head>
    <title> Создание поста </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
</head>

<body>

    <x-app-layout>
        <x-slot name="header">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-xl-12 text-right">
                        <a href="{{ route('post') }}" class="btn btn-danger" target="_blank"> Просмотр постов </a>
                    </div>
                </div>
                <form action="{{ route('save-post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
                            @if (Session::has('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    {{ Session::get('success') }}
                                </div>
                            @elseif(Session::has('failed'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    {{ Session::get('failed') }}
                                </div>
                            @endif
                            <div class="card shadow">
        
                                <div class="card-header">
                                    <h4 class="card-title"> Создание постов </h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label> Заголовок </label>
                                        <input type="text" class="form-control" name="title" placeholder="Введите заголовок">
                                    </div>
                                    <div class="form-group">
                                        <label> Анонс </label>
                                        <input type="text" class="form-control" name="anons" placeholder="Введите анонс">
                                    </div>
                                    <div class="form-group">
                                        <label> Текст </label>
                                        <textarea class="form-control" placeholder="Введите текст" name="description"></textarea>
                                    </div>
                                </div>
        
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success"> Создать </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </x-slot>
    </x-app-layout>
    
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
