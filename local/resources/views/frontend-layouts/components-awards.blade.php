<!doctype html>
<html>	
<head>	
	@include('frontend-layouts/inc-head')
	<!--<script src="{!! URL::asset('backend/files/assets/js/sweetalert.js')!!}"></script>-->	
	<!--<style></style>-->
</head>
@yield('style-css')

<body>
	<div class="container-fluid pageawards">	
		@include('frontend-layouts/inc-menu')
		@include('frontend-layouts/inc-toptext')	
		
		@yield('contents-boby')		
		
		@include('frontend-layouts/inc-footer')		
	</div>
	
	@yield('scripts-js')
	<!--<script></script>-->
</body>
</html>