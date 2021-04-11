
		@include('layout.header')

		@yield('content')
		 @section('extra-script')
	</body>

	<footer>

		@include('layout.footer')

	</footer>
	@yield('extra-js')
	@include('layout.scriptjs')

</html>