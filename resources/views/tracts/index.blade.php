@extends('layouts.app')

@section('content')
<div class="container">
  <!-- <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="form-group">
        <label for="title">Tract Title</label>
        <input type="text" class="form-control" id="filter_title" name="filter_title">
      </div>
    </div>
    <div class="col-md-2">
      <div class="">
      <input type="button" class="btn btn-info" id="filter" name="filter" value="Filter">
      </div>
    </div>
    <div class="col-md-2">
      <div class="">
        <input type="button" class="btn btn-warning" id="reset" name="reset" value="Reset">
      </div>
    </div>
  </div> -->
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
              <div class="card-header">Index of Tracts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('tracts.create') }}" type="button" class="btn btn-success">New Tract</a> <br><br>
                    <table class="table table-hover table-bordered" id="tracts-data">
                      <thead class="thead-dark">
                        <tr>
                        <th scope="col">@sortablelink('id')</th>
                          <th scope="col">@sortablelink('title')</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($tracts as $tract)
                        <tr>
                          <th scope="row">{{ $tract->id }}</th>
                          <td><a href="{{ route('tracts.show', $tract->id) }}">{{ $tract->title }}</a></td>
                          <td><a href="{{ route('tracts.edit', $tract->id) }}">Edit</a></td>
                          <td>
                            <form method="POST" action="{{ route('tracts.destroy', $tract->id) }}">
                              @csrf
                              @method('delete')
                              <button onclick="return confirm('Are you very sure?')" class="btn btn-outline-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $tracts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
