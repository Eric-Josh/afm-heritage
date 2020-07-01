@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Tract</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form method="POST" action="{{ route('std.store') }}">
                        @csrf
                        <div class="form-group">
                          <label for="lang">Language</label>
                            <select class="custom-select" name="lang">
                              <option selected>Select Language</option>
                              <option value="1">English</option>
                              <option value="2">French</option>
                              <option value="3">Yoruba</option>
                              <option value="4">Igbo</option>
                              <option value="5">Hausa</option>
                              <option value="6">Efik</option>
                              <option value="7">Lingala</option>
                              <option value="8">Edo</option>
                              <option value="9">Egun</option>
                            </select>
                         </div>
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" id="no" name="title">
                        </div>
                        <div class="form-group">
                          <label for="content">Body</label>
                          <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
