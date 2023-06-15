@extends('auth')
@section('content')

<div class="container">
    @if($errors->any())
        @foreach ($errors->all() as $item)
        <div class="alert alert-danger" role="alert">
            {{ $item }}
        </div>
        @endforeach
    @endif
</div>

<div class="container">
    <form method="post" action="{{ route('action.register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" class="form-control" id="name" name="name" />
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email" />
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" id="password" name="password" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection