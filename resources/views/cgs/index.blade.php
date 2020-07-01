@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Collected Gospel Songs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('cgs.create') }}" type="button" class="btn btn-success">New CGS</a> <br><br>
                    <table class="table table-hover table-bordered">
                      <thead class="thead-dark">
                        <tr>
                        <th scope="col">@sortablelink('id')</th>
                          <th scope="col">@sortablelink('title')</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($cgs as $cg)
                        <tr>
                          <th scope="row">{{ $cg->id }}</th>
                          <td><a href="{{ route('cgs.show', $cg->id) }}">{{ $cg->title }}</a></td>
                          <td><a href="{{ route('cgs.edit', $cg->id) }}">Edit</a></td>
                          <td>
                            <form method="POST" action="{{ route('cgs.destroy', $cg->id) }}">
                              @csrf
                              @method('delete')
                              <button onclick="return confirm('Are you very sure?')" class="btn btn-outline-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $cgs->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
