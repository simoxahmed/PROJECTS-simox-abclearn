@extends('base')
@section('titre')
    {{ $titre }}
@endsection
@section('main')
    <table class="table" id="example">
        <thead>

            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">Niveau</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $u)
                
            <tr>
                <th scope="row">{{$u->id}}</th>
                <th scope="col">{{$u->nm}}</th>
                <th scope="col">{{$u->np}}</th>
                <th scope="col">{{$u->email}}</th>
                <th scope="col">{{$u->abclearn->niveau}}</th>
                <th scope="col">
                    <a href="{{url('user/'.$u->id.'/show')}}" class="btn btn-info">Show</a>
                    <a href="{{url('user/'.$u->id.'/edit')}}" class="btn btn-primary">Edit</a>
                    <form action="{{url('user/'.$u->id.'/delete')}}" method="post" class="d-inline">
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
