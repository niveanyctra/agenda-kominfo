    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-2xl leading-tight">
                {{ __('Event') }}
            </h2>
        </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <div id='calendar'></div>
            </div>
        </div>
    </div>
    <div id="modal-action" class="modal" tabindex="-1">

    </div>

    </x-app-layout>

