@extends('master')

@section('content')
    <h1>Create a Contact</h1>
    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        <input type="text" name="name" id="name" class="form-control">
        <input type="text" name="number" id="number" class="form-control">
        <button type="submit" class="btn btn-success">Submit</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection