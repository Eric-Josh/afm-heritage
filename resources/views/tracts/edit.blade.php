@extends('layouts.app')

@section('head')
<!-- <script src="https://cdn.tiny.cloud/1/bx12j7lyhe2k34sdrrudmrvipfgk6ziogfevn07xw0vw650n/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form method="POST" action="{{ route('tracts.update', $tract->id) }}">
                    @csrf
                    @method('put')
                    <div class="card-header">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $tract->title }}">
                        </div>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="lang">Language</label>
                        <select class="custom-select" name="lang">
                          <option selected>Select Language</option>
                          @foreach ($lang as $langs)
                          <option value="{{ $langs->id }}" {{ $tract->lang == $langs->id ? 'selected' : '' }}>{{ $langs->type }}</option>
                          @endforeach
                        </select>
                      </div>
                    
                      <div class="form-group">
                        <label for="body">Body</label>
                        <textarea class="form-control" id="body" name="body" rows="30" required>{!! $tract->content !!}</textarea>
                      </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>     
                           
            </div>
        </div>
    </div>
</div>
@endsection
<!-- <script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak code',
    toolbar_mode: 'floating',
  });
</script> -->