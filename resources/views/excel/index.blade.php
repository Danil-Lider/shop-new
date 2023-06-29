@extends('voyager::master')


@section('content')



<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

<main style='margin-left:2rem;'>
    
    <div class="row mb-2 panel-body">
        <div class="col-sm-8 offset-2">
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{ url('admin/import') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="inputGroupFile" required accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                <label class="custom-file-label" for="inputGroupFile">Выберите файл</label>
                            </div>
                            <div class="custom-file">
                                <button type="submit" class="btn btn-primary float-right mr-2">Импорт <i class="fa fa-upload"></i></button>
                            </div>
                            <!-- <div class="input-group-append"> -->
                              
                            <!-- </div> -->
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <!-- <a href="{{ url('admin/export') }}" class="btn btn-primary float-right @if(count($movies) == 0) disabled @endif" role="button" aria-disabled="true">
                        Экспорт <i class="fa fa-download"></i>
                    </a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 offset-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Марка и модель авто</th>
                        <th scope="col">Модель подъемника (уникальная)</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @forelse($movies as $movie)
                    <tr>
                        <th scope="row">{{ $movie->id }}</th>
                        <td>{{ $movie->name }}</td>
                        <td>{{ $movie->model }}</td>
                        <!-- <td>{{ $movie->director }}</td> -->
                        <td><span class="badge bg-warning text-dark">{{ $movie->rating }}</span></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No Movies Found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</main>


@endsection