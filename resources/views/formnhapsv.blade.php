!<!doctype html>
<html lang="en">
    <head>
        <title>Nhap sinh vien</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <h1>Kiem tra du lieu</h1>

        {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }} </br>
                @endforeach
        @endif --}}

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<form method="post" class="p-3 border border-primary col-6 m-auto" action="{{route('sv_store')}}">
    @csrf
    <div class="mb-3">
        <label>Họ tên</label>
        <input value="{{old('ht')}}" class="form-control" name="ht">
        @error('ht')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label>Tuổi</label>
        <input value="{{old('tuoi')}}" class="form-control" name="tuoi">
        @error('tuoi')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label>Ngày sinh</label>
        <input value="{{old('ns')}}" class="form-control" name="ns">
        @error('ns')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label>CMND</label>
        <input value="{{old('cmnd')}}" class="form-control" name="cmnd">
        @error('cmnd')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input value="{{old('em')}}" class="form-control" name="em">
        @error('em')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary w-25">Xử lý</button>
    </div>
</form>
    </body>
</html>

