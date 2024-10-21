@extends('admin.layouts.base')
@section('title', 'Data Petugas')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Data Petugas</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
               
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <!-- Tambahkan data lainnya sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#dataTable').DataTable({
            "paging": true,          // Aktifkan pagination
            "lengthChange": true,     // Opsi untuk mengubah jumlah data per halaman
            "searching": true,        // Aktifkan pencarian
            "ordering": true,         // Aktifkan fitur pengurutan
            "info": true,             // Tampilkan informasi tabel
            "autoWidth": false,       // Nonaktifkan lebar otomatis
            "pageLength": 10,         // Jumlah data per halaman default
            "language": {
                "paginate": {
                    "previous": "<",
                    "next": ">"
                }
            }
        });
    });
</script>
@endpush
