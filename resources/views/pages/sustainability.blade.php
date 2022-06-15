@extends('layouts.layout')
@push('styles')
  <link rel="stylesheet" href="{{asset('frontend/css/page.css')}}">
@endpush
@section('content')

<div class="row justify-content-center padding-bottom padding-top">
  <div class="col-lg-9 text-center">
     This page is comming soon...
  </div>
</div>


@push('scripts')
<script type="text/javascript">
	$(document).ready(function() {

	});
</script>
@endpush
@endsection