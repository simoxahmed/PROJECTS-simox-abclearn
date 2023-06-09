@extends('base')
@section('titre')
    Edition du Theme
@endsection
@section('main')
   <div class="row">
    <div class="col-md-6  shadow p-3 ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('user.store') }}"  enctype="multipart/form-data" >
        @csrf

        <div class="mb-3">
            <label for="nm" class="form-label">Nom : </label>
            <input value="{{$user->nm}}" type="text" name="nm" class="form-control " id="name" >
        </div>
        
        <div class="mb-3">
            <label for="np" class="form-label">Prenom : </label>
            <input value="{{$user->np}}" type="text" name="np" class="form-control " id="name" >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email : </label>
            <input value="{{$user->email}}" type="text" name="email" class="form-control " id="name" >
        </div>
        
        <div class="mb-3">
            <label for="cin" class="form-label">Niveau</label>
            <select class="form-select" aria-label="Default select example" name="abclearn_id">
            <option selected>Open this select menu</option>

            @foreach ($abclearns as $a)
                <option {{ $a->id == $user->abclearns->id ? 'selected' : '' }} value="{{$a->id}}">{{$a->niveau}}</option>        
            @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
