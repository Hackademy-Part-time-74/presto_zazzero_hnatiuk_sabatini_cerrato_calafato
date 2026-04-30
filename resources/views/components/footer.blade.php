<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-5 offset-md-1 mb-3 text-center">
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

    <div class="col-md-4 d-flex align-items-center"> 
        <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap"> 
            <svg class="bi" width="30" height="24" aria-hidden="true">
                <use xlink:href="#bootstrap"></use>
            </svg> </a> <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Company, Inc</span> </div>
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Instagram"><svg class="bi" width="24" height="24" aria-hidden="true">
                    <use xlink:href="#instagram"></use>
                </svg></a></li>
        <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Facebook"><svg class="bi" width="24" height="24">
                    <use xlink:href="#facebook"></use>
                </svg></a></li>
    </ul>
</footer>