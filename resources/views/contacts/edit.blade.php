@extends('master')

@section('content')
    <h1>Edit a Contact</h1>
    <form action="{{ route('contact.update', ['contact' => $contact->id]) }}" method="post">
        @csrf
        @method('PATCH')

        <input type="text" name="name" id="name" class="form-control" value="{{ $contact->name }}">
        <input type="text" name="number" id="number" class="form-control" value="{{ $contact->number }}">
        <button type="submit" class="btn btn-success">Edit</button>
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