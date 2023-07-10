<x-modal-action action="{{ $action }}">
    @if($data->id)
        @method('put')
    @endif
    <div class="row">
        <div class="col-6">
            <div class="mb-3">
                <input type="date" name="start_date" value="{{ $data->start_date ?? request()->start_date }}" class="form-control datepicker">
            </div>
        </div>
        <div class="col-6">
            <div class="mb-3">
                <input type="date" name="end_date" value="{{ $data->end_date ?? request()->end_date }}" class="form-control datepicker">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <input type="time" name="jam" value="{{ $data->jam ?? request()->jam }}" class="form-control" >
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <textarea  name="title" class="form-control" placeholder="Kegiatan">{{ $data->title }}</textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <input type="text" name="tempat" value="{{ $data->tempat }}" class="form-control" placeholder="Tempat">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <input type="text" name="asal_surat" value="{{ $data->asal_surat }}" class="form-control" placeholder="Asal Surat">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <input type="text" name="bidang_penanggung_jawab" value="{{ $data->bidang_penanggung_jawab }}" class="form-control" placeholder="Bidang Penanggung Jawab">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <input type="text" name="keterangan" value="{{ $data->keterangan }}" class="form-control" placeholder="Keterangan">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <input type="text" name="no_surat" value="{{ $data->no_surat }}" class="form-control" placeholder="No Surat">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                <input type="number" name="no_agenda" class="form-control" value="{{ $data->no_agenda }}" placeholder="No Agenda">
            </div>
        </div>
        <div class="col-12">
            <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" {{ $data->category == 'success' ? 'checked' : null }} type="radio" name="category" id="category-success" value="success">
                        <label class="form-check-label" for="category-success">Success</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" {{ $data->category == 'danger' ? 'checked' : null }} type="radio" name="category" id="category-danger" value="danger">
                        <label class="form-check-label" for="category-danger">Danger</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" {{ $data->category == 'warning' ? 'checked' : null }} type="radio" name="category" id="category-warning" value="warning">
                        <label class="form-check-label" for="category-warning">Warning</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" {{ $data->category == 'info' ? 'checked' : null }} type="radio" name="category" id="category-info" value="info">
                        <label class="form-check-label" for="category-info">Info</label>
                    </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="delete" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Delete</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-modal-action>
