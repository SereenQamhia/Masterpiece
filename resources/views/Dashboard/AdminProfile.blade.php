@extends('Dashboard.master')

@section('content')
    <div class="trending_products">
        <div class="vd_title_wrap">
            <h3>Profile Information</h3>
        </div>

        <form method="post" action="{{ route('adminProfile.update', ['adminProfile' => Auth::guard('admin')->user()->id]) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf
            @method('patch')

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        @if (Auth::guard('admin')->user()->name)
                            <img src="{{ url('img/' . Auth::guard('admin')->user()->image) }}" alt="{{ Auth::guard('admin')->user()->name }}'s Profile Picture" class="img-fluid rounded" style="max-width: 200px; height: auto;">
                        @else
                            <img src="{{ url('images/users/Default_pfp.svg.png') }}" alt="Default Profile Picture" class="img-fluid rounded" style="max-width: 200px; height: auto;">
                        @endif

                        <div class="mt-3">
                            <label for="image" class="form-label">{{ __('Upload new image') }}</label>
                            <input id="image" name="image" type="file" accept="image/*" class="form-control" :value="old('image', Auth::guard('admin')->user()->image)" autocomplete="image" />
                            <x-input-error class="mt-2" :messages="$errors->get('image')" />
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                    <div class="mb-3">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', Auth::guard('admin')->user()->name)" required autofocus autocomplete="name" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>

                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', Auth::guard('admin')->user()->email)" required autocomplete="username" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div>

                    <div class="flex items-center gap-4 mt-4">
                        <x-primary-button style=" background-color: #77b40d;
                        color: #ffffff;  width: 120px; margin: 10% 40% ">{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'profile-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
