<!-- Modal -->
<div class="modal fade" id="edit_commodity" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="commodity_edit">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="item_code_edit">Kode</label>
                                <input type="text" name="item_code_edit" class="form-control" id="item_code_edit">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="acquisition">Jenis</label>
                                <select class="custom-select" id="school_operational_assistance_id_edit">
                                    <option selected>Pilih</option>
                                    @foreach($school_operational_assistances as $school_operational_assistance)
                                    <option value="{{ $school_operational_assistance->id }}">{{ $school_operational_assistance->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name_edit">Nama</label>
                                <input type="text" class="form-control" id="name_edit">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date_of_purchase_edit">Tanggal Masuk</label>
                                <input type="date" class="form-control" id="date_of_purchase_edit">
                            </div>
                        </div>
                    </div>

                    <div class="row">
    

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="commodity_location_id_edit">Asal File</label>
                                <select class="custom-select" id="commodity_location_id_edit">
                                    <option selected>Pilih</option>
                                    @foreach($commodity_locations as $commodity_location)
                                    <option value="{{ $commodity_location->id }}">{{ $commodity_location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="condition_edit">Kondisi</label>
                                <select class="custom-select" id="condition_edit">
                                    <option selected>Pilih</option>
                                    <option value="1">Umum</option>
                                    <option value="2">Penting</option>
                                    <option value="3">Rahasia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="note_edit">Keterangan</label>
                                <textarea class="form-control" id="note_edit" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="brand_edit">File</label>
                                <textarea class="form-control" id="brand_edit" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button data-id="" type="submit" class="btn btn-primary" id="swal-update-button">Ubah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>