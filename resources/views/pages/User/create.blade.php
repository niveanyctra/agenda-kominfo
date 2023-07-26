<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            User &raquo; Tambah data
        </h2>
    </x-slot>


    <div class="shadow overflow-hidden sm-rounded-md mt-5 mx-4 mb-5">
        <div class="px-4 py-5 bg-white sm:p-6 ">
            <x-validation-errors class="mb-4" />
            <form action="{{ route('user.store') }}" method="post">
                @csrf

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <x-label for="name" value="{{ __('Name') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                    </div>
                    <div class="col-6"></div>

                    <div class="col-6">
                        <div class="mb-3">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-6">
                        <div class="mb-3">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-6">
                        <div class="mb-3">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                    </div>

                    <div class="col-6"></div>

                    <div class="col-6">
                        <div class="mb-3">
                            {{--  <x-button class="ml-4">
                                {{ __('Register') }}
                            </x-button>  --}}
                            <button type="submit" class="btn btn-outline-success">Simpan Data</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>


