<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 ">
                <form method="POST" action="{{route('login')}}" class="text-center shadow-lg p-5 rounded-5 border border-2 border-warning">
                    @csrf
                    <h1 class="h3 mb-5 fw-normal">Accesso</h1>
                    <div class="form-floating mb-4"> 
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                        @error('email')<span class="small text-danger">{{ $message }}</span>@enderror 
                        <label for="floatingInput">Email address</label> 
                    </div>
                    <div class="form-floating mb-4"> 
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                        @error('password')<span class="small text-danger">{{ $message }}</span>@enderror 
                        <label for="floatingPassword">Password</label> 
                    </div>
                    <button class="btn btn-warning w-25 py-2 mb-3 fw-semibold mt-3" type="submit">Accedi</button>

                    <p>Non sei registrato? <a href="{{ route('register') }}" class="text-warning">Registrati</a></p>
                </form>
            </div>
        </div>
    </div>
</x-layout>