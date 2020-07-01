@extends('layouts.app')
<style>
  a{
    color: #ffffff;
  }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Bible Study Outline</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('bstudies.create') }}" type="button" class="btn btn-success">New Bible Study Outline</a> <br><br>
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
                        @foreach($bstudies as $bstudy)
                        <tr>
                          <th scope="row">{{ $bstudy->id }}</th>
                          <td><a href="{{ route('bstudies.show', $bstudy->id) }}">{{ $bstudy->title }}</a></td>
                          <td><a href="{{ route('bstudies.edit', $bstudy->id) }}">Edit</a></td>
                          <td>
                            <form method="POST" action="{{ route('bstudies.destroy', $bstudy->id) }}">
                              @csrf
                              @method('delete')
                              <button onclick="return confirm('Are you very sure?')" class="btn btn-outline-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $bstudies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
