@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Steps to Deliverance</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('std.create') }}" type="button" class="btn btn-success">New Step to Deliverance</a> <br><br>
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
                        @foreach($std as $stds)
                        <tr>
                          <th scope="row">{{ $stds->id }}</th>
                          <td><a href="{{ route('std.show', $stds->id) }}">{{ $stds->title }}</a></td>
                          <td><a href="{{ route('std.edit', $stds->id) }}">Edit</a></td>
                          <td>
                            <form method="POST" action="{{ route('std.destroy', $stds->id) }}">
                              @csrf
                              @method('delete')
                              <button onclick="return confirm('Are you very sure?')" class="btn btn-outline-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $std->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
