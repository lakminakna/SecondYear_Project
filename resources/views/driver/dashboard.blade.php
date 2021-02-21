<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 6 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('drivervehicle.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>type</th>
            <th>Model</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($vehicles as $vehicle)
        <tr>
            <td>{{ $vehicle->number }}</td>
            <td>{{ $vehicle->type }}</td>
            <td>{{ $vehicle->model }}</td>
            <td>
                <form action="{{ route('drivervehicle.destroy',$vehicle->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('drivervehicle.edit',$vehicle->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    
      
