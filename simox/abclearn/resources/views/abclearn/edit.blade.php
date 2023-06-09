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
    <form method="post" action="{{ route('abclearn.store') }}"  enctype="multipart/form-data" >
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name : </label>
            <input value="{{$abclearn->name}}" type="text" name="name" class="form-control " id="name" >
        </div>
        
        <div class="mb-3">
            <label for="niveau" class="form-label">Niveau : </label>
            <input value="{{$abclearn->niveau}}" type="text" name="niveau" class="form-control " id="name" >
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">Photo : </label>
            <input type="file" name="photo" class="form-control " id="name" >
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
</div>
@endsection
