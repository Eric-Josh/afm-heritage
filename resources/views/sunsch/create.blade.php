@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Sunday School Lesson </div>

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

                    <form method="POST" action="{{ route('sunsch.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control"  name="title">
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="lessno">Lesson No</label>
                                    <input type="text" class="form-control"  name="lessno">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label for="bref">Brief</label>
                                    <input type="text" class="form-control"  name="bref">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="classv">Class No</label>
                            <select class="custom-select" name="classv">
                                <option selected>Select Class No</option>
                                <option value="1">Senior</option>
                                <option value="2">Junior</option>
                                <option value="3">Elementary</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="mverse">Memory Verse</label>
                          <textarea class="form-control" id="mverse" name="mverse" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="cref">Reference</label>
                          <textarea class="form-control" id="cref" name="cref" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="notes">Notes</label>
                          <textarea class="form-control" id="notes" name="notes" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="ques">Questions</label>
                          <textarea class="form-control" id="ques" name="ques" rows="4"></textarea>
                        </div>

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
                          <!-- <label for="bk">BK</label> -->
                          <input class="form-control" id="bk" name="bk" type="hidden" >
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
