<footer class="d-flex bg-info flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
    @auth
    @if(!auth()->user()->is_revisor)
    <div class="col-md-6  mb-3 text-center">
        <h5>Vuoi diventare revisore?</h5>
        <p>Cliccando il bottone sottostante farai richiesta ai nostri admin</p>
        <div class="d-flex flex-column align-items-center ">

            <div class="container-fluid justify-content-around">
                <img src="{{ asset('images/carlo.jpeg') }}" alt="Il nostro Sofficino <3" height="48" width="48" class="rounded-5 mb-3">
                <img src="{{ asset('images/lisa.jpg') }}" alt="La nostra RobyAmatoRevisore <3" height="48" width="48" class="rounded-5 mb-3">
                <img src="{{ asset('images/roby.jpeg') }}" alt="Il nostro RobyAmatoRevisore <3" height="48" width="48" class="rounded-5 mb-3">
                <img src="{{ asset('images/iva.jpeg') }}" alt="La nostra amata IvaArrabbiata <3" height="48" width="48" class="rounded-5 mb-3">
                <img src="{{ asset('images/kevin.jpeg') }}" alt="Il nostro amato KevinSeeder <3" height="48" width="48" class="rounded-5 mb-3">
            </div>

            <a href="{{ route('become.revisor') }}" class="btn btn-warning w-25">Diventa Revisore</a>
        </div>
    </div>
    @endif
    @endauth
    <div class="p-4 d-flex justify-content-evenly align-items-center w-100">
        <div class=" d-flex flex-column align-items-start text-body-secondary mt-3 ms-5">
            <p>© 2025 Company, Inc</p>
            <p>Contatti</p>
            <p><i class="bi bi-telephone-fill"></i> : + 085 082 8193</p>
            <p><i class="bi bi-envelope-fill"></i> : prestoit@gmail.com</p>
        </div>

        <div class="d-flex flex-column align-items-end text-body-secondary mt-3">
            <p>Bootstrap</p>
            <p>FAQ</p>
            <p>Privacy Policy</p>
            <p>Termini di servizio</p>
        </div>


    </div>

</footer>