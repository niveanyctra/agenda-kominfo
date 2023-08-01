    <x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <div class="row my-3">
                    <div class="col-10"></div>
                    <div class="col-2"><button type="button" data-toggle="modalTambah" data-target="#tambahModal" class="btn btn-primary">Tambah</a></div>
                </div>
                <div id='calendar'></div>
            </div>
        </div>
    </div>
    <div id="modal-action" class="modal" tabindex="-1">

    </div>
    <div id="tambahModal" class="modal"  tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Tambah Data</h5>
        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
      </div>
      <div class="modal-body">
        <form action="" method="post">
            @csrf

            <div class="row">
                <div class="col-4">
                    <div class="mb-3">
                        <label for="start_date">Start Date :</label>
                        <input type="date" name="start_date" value="{{ $data->start_date ?? request()->start_date }}" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="end_date">End Date :</label>
                        <input type="date" name="end_date" value="{{ $data->end_date ?? request()->end_date }}" class="form-control datepicker">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="jam">Jam :</label>
                        <input type="time" name="jam" value="{{ $data->jam ?? request()->jam }}" class="form-control" >
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="title">Kegiatan : </label>
                        <textarea  name="title" class="form-control" placeholder="Kegiatan"></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="tempat">Tempat : </label>
                        <input type="text" name="tempat"  class="form-control" placeholder="Tempat">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="asal_surat">Asal Surat : </label>
                        <input type="text" name="asal_surat" class="form-control" placeholder="Asal Surat">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="bidang_penanggung_jawab">Bidang Penanggung Jawab : </label>
                        <input type="text" name="bidang_penanggung_jawab" class="form-control" placeholder="Bidang Penanggung Jawab">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="keterangan">Keterangan : </label>
                        <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="no_surat">No Surat : </label>
                        <input type="text" name="no_surat" class="form-control" placeholder="No Surat">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="no_agenda">No Agenda : </label>
                        <input type="number" name="no_agenda" class="form-control" placeholder="No Agenda">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3 d-flex">
                        <label for="category">Warna : </label>
                            <div class="form-check">
                                <input class="default:ring-3" type="radio" name="category" id="category-success" value="success">
                                <label class="form-check-label" for="category-success"> Hijau</label>
                            </div>
                            <div class="form-check">
                                <input class="default:ring-3"  type="radio" name="category" id="category-danger" value="danger">
                                <label class="form-check-label" for="category-danger">Merah</label>
                            </div>
                            <div class="form-check">
                                <input class="default:ring-3" type="radio" name="category" id="category-warning" value="warning">
                                <label class="form-check-label" for="category-warning">Kuning</label>
                            </div>
                            <div class="form-check">
                                <input class="default:ring-3" type="radio" name="category" id="category-info" value="info">
                                <label class="form-check-label" for="category-info">Biru</label>
                            </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="delete" role="switch" id="delete">
                                <label class="form-check-label" for="delete">Hapus Kegiatan</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="Submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    </x-app-layout>

