@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $sunsch->title }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>Brief: {!! $sunsch->bref !!}</div>
                    
                    <div>Lesson No: {!! $sunsch->lessno !!}</div>
                    <div>Class: 
                        @if ( $sunsch->class == 1 )
                            Senior
                        @elseif ( $sunsch->class == 2 )
                            Junior
                        @else 
                            Elementary
                        @endif
                    </div>
                    <div>Selected Language: 
                        @if( $sunsch->lang == 1 )
                            English
                        @elseif( $sunsch->lang == 2 )
                            French
                        @elseif($sunsch->lang == 3) 
                            Yoruba
                        @elseif($sunsch->lang == 4) 
                            Igbo
                        @elseif($sunsch->lang == 5) 
                            Hausa
                        @elseif($sunsch->lang == 6) 
                            Efik
                        @elseif($sunsch->lang == 7) 
                            Lingali
                        @elseif($sunsch->lang == 8) 
                            Edo
                        @elseif($sunsch->lang == 9) 
                            Egun
                        @endif
                    </div><br>
                    <div><h3>Memory Verse</h3>
                        <p>{!! $sunsch->mverse !!}</p>
                    </div>
                    <div style="text-align:justify"><h3>Notes</h3>
                        <p>{!! $sunsch->notes !!}</p>
                    </div>
                    <div><h3>Questions</h3>
                        <p>{!! $sunsch->ques !!}</p>
                    </div>

                
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection