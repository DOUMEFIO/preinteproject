@extends('layouts.app')

@section('styles')

@endsection

@section('content')
    <div>
        @livewire('users')
    </div>
@endsection

@section('scripts')

 <!-- SELECT2 JS -->
 <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
 @vite('resources/assets/js/select2.js')
 <script src="{{asset('build/assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
 <script src="{{asset('build/assets/plugins/sweet-alert/jquery.sweet-alert.js')}}"></script>
 @vite('resources/assets/js/sweet-alert.js')


@endsection
