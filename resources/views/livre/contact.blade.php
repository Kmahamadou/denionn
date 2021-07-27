
@include('layout.header')

<div class="hero-wrap hero-bread" style="background-image: url('images/DENIONN.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="#"></a></span> <span></span></p>
            <h1 class="mb-0 bread"></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p>Sotuba ACI, près de la Rue des armées</p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p><a href="tel://1234567920">+223 77 09 95 43</a></p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4">
	            <p><a href="mailto:info@yoursite.com"> info@denionn.com</a></p>
	          </div>
          </div>

        </div>
        <div class="row">
          <div class="col-12">
            <div class="col-md-8 align-items-center" style="margin-left: 18%;">
              <form action="{{ route('send.contact') }}" class="bg-white p-5 contact-form">
                <div class="form-group">
                  <input name="name" type="text" class="form-control" placeholder="Nom Complet">
                </div>
                <div class="form-group">
                  <input name="email" type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input name="phone" type="text" class="form-control" placeholder="Telephone">
                </div>
                <div class="form-group">
                  <input name="subject" type="text" class="form-control" placeholder="Objet">
                </div>
                <div class="form-group">
                  <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Envoyer" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            
            </div>
          </div>

         {{--  <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div> --}}
        </div>
      </div>
    </section>
    @include('layout/footer')

@include('layout/scriptjs')