@extends('layouts.app')

@section('title', 'Luxury Hotel | Edit Status Reservasi')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="mb-4">
                <h3 class="text-primary">Update Status Pembayaran & Nomor Kamar</h3>
                <p class="text-muted">Formulir ini digunakan untuk memperbarui status reservasi pelanggan.</p>
            </div>

            <div class="card shadow">
                <div class="card-body">
                    @if (in_array($reservasi->status_pemesanan, ['Complete', 'Canceled']))
                        <div class="alert alert-info">
                            <strong>Reservasi telah diselesaikan atau dibatalkan dan tidak dapat diubah.</strong>
                        </div>
                        <ul class="list-group mb-3">
                            <li class="list-group-item"><strong>Status Pembayaran:</strong> {{ $reservasi->status_pembayaran }}</li>
                            <li class="list-group-item"><strong>Status Pemesanan:</strong> {{ $reservasi->status_pemesanan }}</li>
                            <li class="list-group-item"><strong>Nomor Kamar:</strong> {{ $reservasi->dataKamar->nomor_kamar }} - {{ $reservasi->dataKamar->tipe_kamar }}</li>
                        </ul>
                        <a href="{{ route('admin.data-reservasi.index') }}" class="btn btn-secondary">Kembali</a>
                    @else
                        <form id="form-update" action="{{ route('admin.data-reservasi.update', $reservasi->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                                <select name="status_pembayaran" id="status_pembayaran" class="form-select @error('status_pembayaran') is-invalid @enderror">
                                    @foreach ($statusPembayaranOptions as $option)
                                        <option value="{{ $option }}" {{ $reservasi->status_pembayaran == $option ? 'selected' : '' }}>
                                            {{ $option }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('status_pembayaran')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="data_kamar_id" class="form-label">Nomor Kamar</label>
                                <select name="data_kamar_id" id="data_kamar_id" class="form-select @error('data_kamar_id') is-invalid @enderror">
                                    <option value="">-- Pilih Nomor Kamar --</option>
                                    @foreach ($kamarTersedia as $kamar)
                                        <option value="{{ $kamar->id }}" {{ $reservasi->data_kamar_id == $kamar->id ? 'selected' : '' }}>
                                            {{ $kamar->nomor_kamar }} - {{ $kamar->tipe_kamar }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('data_kamar_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-flex justify-content-center mt-4 gap-3">
                                <button type="button" id="btn-update" class="btn btn-primary">Simpan Perubahan</button>
                                <button type="button" id="btn-cancel" class="btn btn-secondary">Batal</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@if (!in_array($reservasi->status_pemesanan, ['Complete', 'Canceled']))
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("form-update");
        const initialData = new FormData(form);

        function isFormChanged() {
            const currentData = new FormData(form);
            for (let [key, value] of currentData.entries()) {
                if (initialData.get(key) !== value) return true;
            }
            return false;
        }

        document.getElementById("btn-update").addEventListener("click", function () {
            Swal.fire({
                title: "Simpan Perubahan?",
                text: "Pastikan data yang diubah sudah benar.",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Ya, simpan",
                cancelButtonText: "Batal",
                confirmButtonColor: "#0d6efd",
                cancelButtonColor: "#6c757d",
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Menyimpan...",
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        didOpen: () => Swal.showLoading(),
                    });
                    setTimeout(() => form.submit(), 800);
                }
            });
        });

        document.getElementById("btn-cancel").addEventListener("click", function () {
            if (isFormChanged()) {
                Swal.fire({
                    title: "Batalkan Perubahan?",
                    text: "Data yang telah diubah akan hilang.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Ya, batalkan",
                    cancelButtonText: "Lanjutkan Edit",
                    confirmButtonColor: "#dc3545",
                    cancelButtonColor: "#0d6efd",
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('admin.data-reservasi.index') }}";
                    }
                });
            } else {
                window.location.href = "{{ route('admin.data-reservasi.index') }}";
            }
        });
    });
</script>
@endif
@endpush
