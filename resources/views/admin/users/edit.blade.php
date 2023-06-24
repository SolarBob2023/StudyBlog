@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
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
                <form action="{{route('admin.user.update', $user->id)}}" method="POST" class="form-group col-4">
                    @csrf
                    @method('PATCH')
                    <input type="text" class="form-control" placeholder="Логин пользователя" name="name"
                        value="{{$user->name}}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <input type="email" class="form-control" value="{{$user->email}}" placeholder="test@mail.ru" name="email">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group col-4">
                        <label>Выберите роль</label>
                        <select class="form-control" name="role">
                            @foreach($roles as $id => $role)
                                <option value="{{ $id }}"
                                    {{ $id == $user->role ? "selected" : ""}}
                                >{{ $role }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('role')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="submit" class="btn btn-primary mt-2 w-25" value="Обновить">
                </form>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
