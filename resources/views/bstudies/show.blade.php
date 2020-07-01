@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $bstudies->title }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>Lesson No: {!! $bstudies->lesson_no !!}</div>
                    <div>Class: 
                        @if ( $bstudies->class == 1 )
                            Senior
                        @elseif ( $bstudies->class == 2 )
                            Junior
                        @else 
                            Elementary
                        @endif
                    </div>
                    <div>Selected Language: 
                        @if ( $bstudies->lang == 1 )
                            English
                        @elseif ( $bstudies->lang == 2 )
                            French
                        @elseif($bstudies->lang == 3)
                            Yoruba
                        @elseif($bstudies->lang == 4) 
                            Igbo
                        @elseif($bstudies->lang == 5) 
                            Hausa
                        @elseif($bstudies->lang == 6) 
                            Efik
                        @elseif($bstudies->lang == 7) 
                            Lingali
                        @elseif($bstudies->lang == 8) 
                            Edo
                        @elseif($bstudies->lang == 9) 
                            Egun
                        @endif
                    </div><br>

                    <div><h3>Text</h3>
                        <p>{!! $bstudies->text !!}</p>
                    </div>
                    <div><h3>Memory Verse</h3>
                        <p>{!! $bstudies->mverse !!}</p>
                    </div>
                    <div style="text-align:justify"><h3>Introduction</h3>
                        <p>{!! $bstudies->intro !!}</p>
                    </div>
                    <div style="text-align:justify"><h3>Items</h3>
                        <p>{!! $bstudies->items !!}</p>
                    </div>
                    <div style="text-align:justify"><h3>Conclusion</h3>
                        <p>{!! $bstudies->conclusion !!}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection