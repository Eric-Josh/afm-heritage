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

                    <form method="POST" action="{{ route('bstudies.update', $bstudies->id) }}">
                      @method('PATCH') 
                      @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="no">Lesson No</label>
                                    <input type="text" class="form-control" id="no" name="lesson_no" value='{{ $bstudies->lesson_no }}'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="no">Class No</label>
                                    <select class="custom-select" name="class">
                                        <option selected>Select class</option>
                                        <option value="1" {{ $bstudies->class == 1 ? 'selected' : '' }}> Senior </option>
                                        <option value="2" {{ $bstudies->class == 2 ? 'selected' : '' }}> Junior</option>
                                        <option value="3" {{ $bstudies->class == 3 ? 'selected' : '' }}> Elementary</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="title">Outline Title</label>
                          <input type="text" class="form-control" id="no" name="title" value='{{ $bstudies->title }}'>
                        </div>
                        <div class="form-group">
                          <label for="content">Text</label>
                          <textarea class="form-control" id="text" name="text" rows="4" required>{!! $bstudies->text !!}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="content">Memory Verse</label>
                          <textarea class="form-control" id="mverse" name="mverse" rows="4" required>{!! $bstudies->mverse !!}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="content">Introduction</label>
                          <textarea class="form-control" id="intro" name="intro" rows="4" required>{!! $bstudies->intro !!}</textarea>
                        </div>
                        <div class="form-group"> 
                          <label for="content">Items</label>
                          <textarea class="form-control" id="item" name="items" rows="5" required>{!! $bstudies->items !!}</textarea>
                        </div>
                        <div class="form-group">
                          <label for="content">Conclusion</label>
                          <textarea class="form-control" id="conclusion" name="conclusion" rows="5" required>{!! $bstudies->conclusion !!}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="lang">Language</label>
                            <select class="custom-select" name="lang">
                              <option selected>Select Language</option>
                              <option value="1" {{ $bstudies->lang == 1 ? 'selected' : '' }}>English</option>
                              <option value="2" {{ $bstudies->lang == 2 ? 'selected' : '' }}>French</option>
                              <option value="3" {{ $bstudies->lang == 3 ? 'selected' : '' }}>Yoruba</option>
                              <option value="4" {{ $bstudies->lang == 4 ? 'selected' : '' }}>Igbo</option>
                              <option value="5" {{ $bstudies->lang == 5 ? 'selected' : '' }}>Hausa</option>
                              <option value="6" {{ $bstudies->lang == 6 ? 'selected' : '' }}>Efik</option>
                              <option value="7" {{ $bstudies->lang == 7 ? 'selected' : '' }}>Lingala</option>
                              <option value="8" {{ $bstudies->lang == 8 ? 'selected' : '' }}>Edo</option>
                              <option value="9" {{ $bstudies->lang == 9 ? 'selected' : '' }}>Egun</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-md">Save<button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
