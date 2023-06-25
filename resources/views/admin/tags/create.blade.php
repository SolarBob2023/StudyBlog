@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление тэга</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.tag.index') }}">Тэги</a></li>
                        <li class="breadcrumb-item">Добавление</li>
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
            <div class="row col-12">
                <form action="{{ route('admin.tag.store') }}" method="POST" class="form-group col-4">
                    @csrf
                    <input type="text" class="form-control" placeholder="Название тэга" name="title">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <input type="submit" class="btn btn-primary mt-2 w-25" value="Добавить">
                </form>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
