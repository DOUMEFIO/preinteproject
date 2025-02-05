@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <div>
        @livewire('profile')
    </div>

@endsection

@section('scripts')

        <!-- SELECT2 JS -->
        <script src="{{asset('build/assets/plugins/select2/select2.full.min.js')}}"></script>
		@vite('resources/assets/js/select2.js')


		<!-- GALLERY JS -->
		<script src="{{asset('build/assets/plugins/gallery/picturefill.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lightgallery.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lightgallery-1.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-pager.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-autoplay.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-fullscreen.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-zoom.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-hash.js')}}"></script>
		<script src="{{asset('build/assets/plugins/gallery/lg-share.js')}}"></script>

@endsection
