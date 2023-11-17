<x-app-layout>
    <script src="https://kit.fontawesome.com/d6692547f6.js" crossorigin="anonymous"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <a href="{{route('profile')}}"><button style="padding:15px 20px; background-color:rgb(162, 90, 41); color:white; font-size:20px" ><i class="fa-solid fa-arrow-left " style="color: #ffffff;">  </i>          Go Back</button></a>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

           @if (Auth::user()->user_type == 'service_provider')
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div>
                    @include('profile.partials.update-Profession-information-form')
                </div>
            </div>
            @endif
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div >
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
