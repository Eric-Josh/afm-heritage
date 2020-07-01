@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Bible Study Outline</div>

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

                    <form method="POST" action="{{ route('bstudies.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lesson_no">Lesson No</label>
                                    <input type="text" class="form-control"  name="lesson_no">
                                </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="no">Class No</label>
                                  <select class="custom-select" name="class">
                                      <option selected>Select Class No</option>
                                      <option value="1">Senior</option>
                                      <option value="2">Junior</option>
                                      <option value="3">Elementary</option>
                                  </select>
                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="title">Outline Title</label>
                          <input type="text" class="form-control"  name="title">
                        </div>
                        <div class="form-group">
                          <label for="text">Text</label>
                          <textarea class="form-control" id="text" name="text" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="mverse">Memory Verse</label>
                          <textarea class="form-control" id="mverse" name="mverse" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="intro">Introduction</label>
                          <textarea class="form-control" id="intro" name="intro" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="items">Items</label>
                          <textarea class="form-control" id="items" name="items" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="conclusion">Conclusion</label>
                          <textarea class="form-control" id="conclusion" name="conclusion" rows="5"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="lang">Language</label>
                            <select class="custom-select" name="lang">
                              <option selected>Select Outline Language</option>
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
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
