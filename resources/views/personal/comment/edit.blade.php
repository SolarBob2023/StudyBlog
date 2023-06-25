@extends('personal.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Главная</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('personal.main.index') }}">Главная</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form action="{{route('personal.comment.update', $comment->id)}}" method="POST" class="form-group col-4">
                        @csrf
                        @method('PATCH')
                        <textarea class="form-control" name="message" rows="5">{{$comment->message}}</textarea>
                        @error('message')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="submit" class="btn btn-primary mt-2 w-25" value="Обновить">
                    </form>
                </div>
            </div>
        </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
