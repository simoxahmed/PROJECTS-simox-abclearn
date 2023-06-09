@extends('base')
@section('titre')
    {{ $titre }}
@endsection
@section('main')
    <table class="table" id="example">
        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Niveau</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abclearns as $a)
                
            <tr>
                <th scope="row">{{$a->id}}</th>
                <th scope="col">{{$a->name}}</th>
                <th scope="col">{{$a->niveau}}</th>
                <th scope="col"><img src="{{asset('storage/'.$a->photo)}}" width="150" class="img-thumb" alt=""></th>
                <th scope="col">
                    <a href="{{url('abclearn/'.$a->id.'/show')}}" class="btn btn-info">Show</a>
                    <a href="{{url('abclearn/'.$a->id.'/edit')}}" class="btn btn-primary">Edit</a>
                    <form action="{{url('abclearn/'.$a->id.'/delete')}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Supprimer?')" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </th>
            </tr>
            
            @endforeach
        </tbody>
    </table>
@endsection
<script>
    function alerti() {
        swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: '#DD6B55',
    confirmButtonText: 'Yes, I am sure!',
    cancelButtonText: "No, cancel it!"
 }).then(

       function () { return false; });
    }
</script>
