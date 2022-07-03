@extends('layouts.master')

@section('center')

    <div class="row">


        <div>
            {{$pach}}
        </div>

        <div class="col-md-12 ">
            <a href="/">
                <i class="bi bi-house-door-fill"></i>
            </a>
            @foreach($scan as $item)
                <hr>
                <div class="bg-light text-white">
                    <a href="{{ 'dir?dir='.$pach.'/'.$item[1] }}">
                        @if($item[0] == 'dir')
                            @if($item[1] == '..' )
                                <i class="bi bi-backspace-fill"></i>
                            @else
                                <i class="bi bi-folder-fill"></i>

                            @endif
                            {{ $item[1] }}
                    </a>
                    @if($item[1] != '..' )
                        <i class="bi bi-trash-fill btn btn-danger text-light deleteDir" dir="{{ $item[1] }}" > delete</i>
                    @endif
                @else
                        <a href="{{ asset('main').'/'.$item[1] }}">
                            <i class="bi bi-file-earmark-fill"></i>
                            {{$item[2]}}
                        </a>
                    @endif

                </div>
            @endforeach

        </div>
    </div>

@endsection
