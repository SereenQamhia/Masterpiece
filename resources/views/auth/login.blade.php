

<!doctype html>
<html lang="en">
  <head>
    <title>HomeFix-Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d6692547f6.js" crossorigin="anonymous"></script>
</head>
  <body>
    <div id="container" class="container">
		<!-- FORM SECTION -->
		<div class="row">
            <div class="col-6 "> </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="col-6 align-items-center flex-col sign-in">
        <div class="form-wrapper align-items-center">
            
    <form class="form sign-in" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="input-group">
            <i class='bx bxs-user'></i>
            <x-text-input placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="input-group">
            <i class='bx bxs-user'></i>

            <x-text-input placeholder="Password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

       {{-- <!-- Remember Me -->
        <div class="block mt-4 text-left">
            <label for="remember_me" class="inline-flex ">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>  --}}

        <div class="flex items-center justify-end mt-4">
            
            <x-primary-button >
                {{ __('Sign in') }}
            </x-primary-button>



      

            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif  --}}
             <br>
            <a class="" href="{{route('register')}}" style="color: gray">Don't have an account yet! Register now</a>
            
            
            <div style="display: flex; align-items: center; text-align: center; margin-top: 20px; margin-bottom: 20px;">
                <div style="flex-grow: 1; height: 1px; background-color: gray; margin-right: 10px;"></div>
                <span style="padding: 0 10px;">Or</span>
                <div style="flex-grow: 1; height: 1px; background-color: gray; margin-left: 10px;"></div>
              </div>
               
            <div class="flex items-center justify-end mt-4 align-middle " style="color: gray">
                Countinue with  &nbsp;
                <a href="{{ route('auth.google') }}">
                    <i class="fa-brands fa-square-google-plus fa-2xl" style="color: #f0900a;"></i>            </div>
        </div>
    </form>
</div>
				</div>
                <div class="row content-row">
                   
                    <div class="col-5 align-items-center ">
                        <div class="text sign-in" >
                            <a href="{{ route('home') }}">
                            <img src="{{ asset('img/logo2.png') }}" style="width: 60%" ></a> <br /> <br/>
                            <h3 style="font-family:'Times New Roman', Times, serif">
                                Welcome back! Log in to HomeFix and access a world of skilled professionals ready to enhance your home services experience.
                            </h3>
            
                        </div>
                    </div>

                    <div class="col-7"></div>
                
                </div>
            </div>
				</div>
                <script>
                    let container = document.getElementById('container')
                
                        toggle = () => {
                            container.classList.toggle('sign-in')
                            container.classList.toggle('sign-up')
                        }
                        
                        setTimeout(() => {
                            container.classList.add('sign-in')
                        }, 200)</script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                </body>
                </html>

       
          
