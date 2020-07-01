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
                    <form method="POST" action="{{ route('tracts.store') }}">
                        @csrf
                        <div class="form-group">
                        <label for="lang">Language</label>
                        <select class="custom-select" name="lang">
                          <option selected>Select Tract Language</option>
                          @foreach ($lang as $langs)
                          <option value="{{ $langs->id }}">{{ $langs->type }}</option>
                          @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                          <label for="no">Tract No</label>
                          <input type="text" class="form-control" id="no" name="no">
                        </div>
                        <div class="form-group">
                          <label for="title">Tract Title</label>
                          <input type="text" class="form-control" id="no" name="title">
                        </div>
                        <div class="form-group">
                          <label for="content">Tract Body</label>
                          <textarea class="form-control" id="content" name="content" rows="20"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
