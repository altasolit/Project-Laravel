@extends('layouts.app')
@section('title', 'Luxury Hotel | Status Reservasi')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20">
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">Reservasi Saya</h4>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Tgl Check-In</th>
                            <th>Tgl Check-Out</th>
                            <th>Jumlah Tamu</th>
                            <th>Tipe Kamar</th>
                            <th>Nomor Kamar</th>
                            <th>Status Pembayaran</th>
                            <th>Status Pemesanan</th>
                            <th class="datatable-nosort">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reservasi as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->nama_customer }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal_check_in)->format('d M Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal_check_out)->format('d M Y') }}</td>
                                <td>{{ $item->jumlah_tamu }}</td>
                                <td>{{ $item->tipe_kamar }}</td>
                                <td>{{ $item->dataKamar->nomor_kamar ?? '-' }}</td>
                                <td>{{ ucfirst($item->status_pembayaran) }}</td>
                                <td>{{ ucfirst($item->status_pemesanan) }}</td>
                                <td>
                                    <div class="btn-group">
                                        @if($item->status_pembayaran == 'Pending' && $item->status_pemesanan != 'Canceled')
                                            <form action="{{ route('customer.status-reservasi.cancel', $item->id) }}" method="POST" class="form-batalkan d-inline">
                                                @csrf
                                                @method('PUT')
                                                <button type="button" class="btn btn-sm btn-warning btn-cancel" data-id="{{ $item->id }}">Batalkan</button>
                                            </form>
                                            <form action="{{ route('customer.status-reservasi.pay', $item->id) }}" method="POST" class="form-bayar d-inline">
                                                @csrf
                                                <button type="button" class="btn btn-sm btn-success btn-pay" data-id="{{ $item->id }}">Bayar</button>
                                            </form>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10">
                                    <div class="alert alert-danger text-center m-0">
                                        Tidak ada reservasi yang perlu ditampilkan.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.btn-cancel').forEach(function(btn) {
        btn.addEventListener('click', function() {
            if(confirm('Apakah Anda yakin ingin membatalkan reservasi ini?')) {
                this.closest('form').submit();
            }
        });
    });

    document.querySelectorAll('.btn-pay').forEach(function(btn) {
        btn.addEventListener('click', function() {
            if(confirm('Lanjutkan ke proses pembayaran?')) {
                this.closest('form').submit();
            }
        });
    });
});
</script>
@endpush
