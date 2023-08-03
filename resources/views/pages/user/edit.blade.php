<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            User &raquo; Edit data
        </h2>
    </x-slot>

    <div class="shadow overflow-hidden sm-rounded-md my-5 mx-4">
        <div class="px-4 py-5 bg-white sm:p-6 ">
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('put')

                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ old('name') ?? $user->name }}">
                        </div>
                    </div>
                    <div class="col-6"></div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat Email</label>
                            <input type="text" name="email" class="form-control" id="email"
                                value="{{ old('email') ?? $user->email }}">
                        </div>
                    </div>
                    <div class="col-6"></div>

                    <div class="col-6">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-success">Simpan Data</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>
