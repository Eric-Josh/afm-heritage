@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $cgs->title }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>CGS No: {!! $cgs->cgs_no !!}</div>
                    
                    <div>Selected Language: 
                        @if ( $cgs->lang == 1 )
                            English
                        @elseif ( $cgs->lang == 2 )
                            French
                        @elseif($cgs->lang == 3) 
                            Yoruba
                        @elseif($cgs->lang == 4) 
                            Igbo
                        @elseif($cgs->lang == 5) 
                            Hausa
                        @elseif($cgs->lang == 6) 
                            Efik
                        @elseif($cgs->lang == 7) 
                            Lingali
                        @elseif($cgs->lang == 8) 
                            Edo
                        @elseif($cgs->lang == 9) 
                            Egun
                        @endif
                    </div><br>

                    <div><h3>Lyrics</h3>
                        <p>{!! $cgs->lyrics !!}</p>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection