@extends('layouts.app')
@section('title', 'Luxury Hotel | Histori Reservasi Saya')

@section('content')
    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Histori Reservasi Saya</h4>
                </div>
                <div class="pb-20 table-responsive">
                    <table class="data-table table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nomor Kamar</th>
                                <th>Status Pembayaran</th>
                                <th>Status Pemesanan</th>
                                <th class="datatable-nosort">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($histori as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_customer }}</td>
                                    <td>{{ $item->dataKamar->nomor_kamar ?? 'Kamar Tidak Tersedia' }}</td>
                                    <td>
                                        <span class="badge badge-{{ $item->status_pembayaran == 'Lunas' ? 'success' : 'warning' }}">
                                            {{ $item->status_pembayaran }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-{{ $item->status_pemesanan == 'Selesai' ? 'success' : ($item->status_pemesanan == 'Dibatalkan' ? 'danger' : 'info') }}">
                                            {{ $item->status_pemesanan }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="{{ route('customer.histori-reservasi.show', $item->id) }}" class="btn btn-sm btn-primary">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">
                                        <div class="alert alert-danger text-center m-0">
                                            Data histori reservasi kosong.
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
