@extends('layouts.app')

@section('head')

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Collected Gospel Songs </div>

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

                    <form method="POST" action="{{ route('cgs.update', $cgs->id) }}">
                        @method('PATCH') 
                        @csrf
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="cgs_no">CGS No</label>
                                    <input type="text" class="form-control"  name="cgs_no" value="{{ $cgs->cgs_no }}">
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                <input type="text" class="form-control"  name="title" value="{{ $cgs->title }}" >
                        </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lang">Language</label>
                            <select class="custom-select" name="lang">
                              <option selected>Select CGS Language</option>
                              <option value="1" {{ $cgs->lang == 1 ? 'selected' : '' }}>English</option>
                              <option value="2" {{ $cgs->lang == 2 ? 'selected' : '' }}>French</option>
                              <option value="3" {{ $cgs->lang == 3 ? 'selected' : '' }}>Yoruba</option>
                              <option value="4" {{ $cgs->lang == 4 ? 'selected' : '' }}>Igbo</option>
                              <option value="5" {{ $cgs->lang == 5 ? 'selected' : '' }}>Hausa</option>
                              <option value="6" {{ $cgs->lang == 6 ? 'selected' : '' }}>Efik</option>
                              <option value="7" {{ $cgs->lang == 7 ? 'selected' : '' }}>Lingala</option>
                              <option value="8" {{ $cgs->lang == 8 ? 'selected' : '' }}>Edo</option>
                              <option value="9" {{ $cgs->lang == 9 ? 'selected' : '' }}>Egun</option>
                            </select>
                        </div>

                        <div class="form-group">
                          <label for="lyrics">Lyrics</label>
                          <textarea class="form-control" id="text" name="lyrics" rows="10" required>{!! $cgs->lyrics !!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>          

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
