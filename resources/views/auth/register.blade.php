<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 ">
                <form method="POST" action="{{route('register')}}" class="text-center">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal mb-3">Registrati</h1>
                     <div class="form-floating mb-3"> 
                        <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Name"> 
                        <label for="floatingInput">Name</label> 
                    </div>
                    <div class="form-floating mb-3"> 
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"> 
                        <label for="floatingInput">Email address</label> 
                    </div>
                    <div class="form-floating mb-3"> 
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password"> 
                        <label for="floatingPassword">Password</label> 
                    </div>
                    <div class="form-floating mb-3"> 
                        <input type="password" class="form-control" id="floatingPasswordConfirmation" name="passwordConfirmation" placeholder="Password Confirmation"> 
                        <label for="floatingPassword">Password Confirmation</label> 
                    </div>
                    <button class="btn btn-primary w-25 py-2 mb-3" type="submit">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>