@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Sunday School Lessons</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('sunsch.create') }}" type="button" class="btn btn-success">New Sunday School Lesson</a> <br><br>
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
                        @foreach($sunsch as $sunschs)
                        <tr>
                          <th scope="row">{{ $sunschs->id }}</th>
                          <td><a href="{{ route('sunsch.show', $sunschs->id) }}">{{ $sunschs->title }}</a></td>
                          <td><a href="{{ route('sunsch.edit', $sunschs->id) }}">Edit</a></td>
                          <td>
                            <form method="POST" action="{{ route('sunsch.destroy', $sunschs->id) }}">
                              @csrf
                              @method('delete')
                              <button onclick="return confirm('Are you very sure?')" class="btn btn-outline-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $sunsch->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
