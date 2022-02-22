@extends('master')

@section('content')
    <h1>Contacts</h1>
    <a href="{{ route('contact.create')}}" class="btn btn-primary">Create</a>
    <br>

    @foreach ($contacts as $contact)
    <div class="card">
        <div class="card-body">
            <h3>{{$contact->name}}</h3>
            <p>{{$contact->number}}</p>
            <a href="{{ route('contact.edit', ['contact' => $contact->id ])}}" class="btn btn-warning">Edit</a>
            <form action="/contacts/{{ $contact->id }}" method="POSt">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>
        </div>
    </div>
    @endforeach
@endsection