<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl leading-tight">
            {{ __('Laporan') }}
        </h2>
    </x-slot>
    <div class="shadow overflow-hidden sm-rounded-md my-5 mx-4">
        <div class="px-4 py-4 bg-white sm:p-6">

            {{--  <form method="get" action="/filter">  --}}
                <div class="row pb-3">
                    <div class="col-md-3">
                        <label> Start Date: </label>
                        <input type="date" id="txtTglAwal" name="txtTglAwal" class="form-control"
                        value="{{ old('txtTglAwal') }}" size="10">
                    </div>
                    <div class="col-md-3">
                        <label> End Date: </label>
                        <input type="date" id="txtTglAkhir" name="txtTglAkhir" class="form-control"
                        value="{{ old('txtTglAkhir') }}" size="10">
                    </div>
                    <div class="col-md-1" style="padding-top: 33px">
                        <a onclick="this.href='/filter/'+ document.getElementById('txtTglAwal').value + '/' + document.getElementById('txtTglAkhir').value "
                        target="_blank" class="btn btn-primary">Cetak</a>
                    </div>
                </div>
        {{--  </form>  --}}
        </div>
    </div>
</x-app-layout>
