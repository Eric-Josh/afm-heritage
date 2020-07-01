@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
                <form method="POST" action="{{ route('std.update', $std->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="card-header">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $std->title }}">
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="lang">Language</label>
                            <select class="custom-select" name="lang">
                                <option selected>Select Language</option>
                                <option value="1" {{ $std->lang == 1 ? 'selected' : '' }}>English</option>
                                <option value="2" {{ $std->lang == 2 ? 'selected' : '' }}>French</option>
                                <option value="3" {{ $std->lang == 3 ? 'selected' : '' }}>Yoruba</option>
                                <option value="4" {{ $std->lang == 4 ? 'selected' : '' }}>Igbo</option>
                                <option value="5" {{ $std->lang == 5 ? 'selected' : '' }}>Hausa</option>
                                <option value="6" {{ $std->lang == 6 ? 'selected' : '' }}>Efik</option>
                                <option value="7" {{ $std->lang == 7 ? 'selected' : '' }}>Lingala</option>
                                <option value="8" {{ $std->lang == 8 ? 'selected' : '' }}>Edo</option>
                                <option value="9" {{ $std->lang == 9 ? 'selected' : '' }}>Egun</option>
                            </select>
                        </div>

                      <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" name="body" rows="5" required>{!! $std->content !!}</textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    
                  
                </form>               
            </div>
        </div>
    </div>
</div>
@endsection
