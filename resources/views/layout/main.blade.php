
		@include('layout.header')

		@yield('content')
		 @section('extra-script')
	</body>

	<footer class="page-section-no-padding  footer2-container" style="background-color: #666666">

		@include('layout.footer')

	</footer>
	@yield('extra-js')
	@include('layout.scriptjs')

</html>