@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Sunday School Lesson </div>

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

                    <form method="POST" action="{{ route('sunsch.update', $sunsch->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control"  name="title" value="{{ $sunsch->title }}">
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="lessno">Lesson No</label>
                                    <input type="text" class="form-control"  name="lessno" value="{{$sunsch->lessno}}">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label for="bref">Brief</label>
                                    <input type="text" class="form-control"  name="bref" value="{{$sunsch->bref}}"> 
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="classv">Class No</label>
                            <select class="custom-select" name="classv">
                                <option selected>Select Class No</option>
                                <option value="1" {{ $sunsch->classv == 1 ? 'selected' : '' }}> Senior </option>
                                <option value="2" {{ $sunsch->classv == 2 ? 'selected' : '' }}> Junior</option>
                                <option value="3" {{ $sunsch->classv == 3 ? 'selected' : '' }}> Elementary</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="mverse">Memory Verse</label>
                          <textarea class="form-control" id="mverse" name="mverse" rows="4">{!! $sunsch->mverse !!}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="cref">Reference</label>
                          <textarea class="form-control" id="cref" name="cref" rows="4">{!! $sunsch->cref !!}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="notes">Notes</label>
                          <textarea class="form-control" id="notes" name="notes" rows="4">{!! $sunsch->notes !!}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="ques">Questions</label>
                          <textarea class="form-control" id="ques" name="ques" rows="4">{!! $sunsch->ques !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="lang">Language</label>
                            <select class="custom-select" name="lang">
                              <option selected>Select Language</option>
                              <option value="1" {{ $sunsch->lang == 1 ? 'selected' : '' }}>English</option>
                              <option value="2" {{ $sunsch->lang == 2 ? 'selected' : '' }}>French</option>
                              <option value="3" {{ $sunsch->lang == 3 ? 'selected' : '' }}>Yoruba</option>
                              <option value="4" {{ $sunsch->lang == 4 ? 'selected' : '' }}>Igbo</option>
                              <option value="5" {{ $sunsch->lang == 5 ? 'selected' : '' }}>Hausa</option>
                              <option value="6" {{ $sunsch->lang == 6 ? 'selected' : '' }}>Efik</option>
                              <option value="7" {{ $sunsch->lang == 7 ? 'selected' : '' }}>Lingala</option>
                              <option value="8" {{ $sunsch->lang == 8 ? 'selected' : '' }}>Edo</option>
                              <option value="9" {{ $sunsch->lang == 9 ? 'selected' : '' }}>Egun</option>
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
