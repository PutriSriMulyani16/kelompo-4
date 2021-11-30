@extends('layouts.master')

@section('page')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Telpon</th>
                                            <th>Alamat</th>
                                            <th>Biaya</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>192010049</td>
                                            <td>Putri</td>
                                            <td>XII MM</td>
                                            <td>0812-3456-7890</td>
                                            <td>jl.juntihilir</td>
                                            <td>250000</td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
</div>
@endsection