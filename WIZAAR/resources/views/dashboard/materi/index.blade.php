@extends('dashboard.layouts.main')

@section('container')
<div class="py-4">
                  <div class="dropdown">
                      <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                          New Task
                      </button>
                      <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
                          <a class="dropdown-item d-flex align-items-center" href="/dashboard/materis/create">
                              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                              Tambah Materi
                          </a>
                          <a class="dropdown-item d-flex align-items-center" href="#">
                              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>                            
                              Add Widget
                          </a>
                          <a class="dropdown-item d-flex align-items-center" href="#">
                              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path><path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path></svg>                            
                              Upload Files
                          </a>
                          <a class="dropdown-item d-flex align-items-center" href="#">
                              <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                              Preview Security
                          </a>
                          <div role="separator" class="dropdown-divider my-1"></div>
                          <a class="dropdown-item d-flex align-items-center" href="#">
                              <svg class="dropdown-icon text-danger me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                              Upgrade to Pro
                          </a>
                      </div>
                  </div>
              </div>

    <div class="row">
        <div class="col-12 mb-4 ">
            <div class="card bg-yellow-100 border-0 shadow">
                <div class="card-header d-sm-flex flex-row align-items-center flex-0">
                    <div class="d-block mb-3 mb-sm-0">
                        <h2 class="fs-3 fw-extrabold"> Materi </h2>
                    </div>
                </div>
        </div>
        </div>
    <div class="row">
        <div class="col-12 col-xl-10">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="fs-5 fw-bold mb-0">Cari Materi</h2>
                                </div>
                            
                            </div>
                        </div>

                        @if(session()-> has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                          @endif
                        <div class="table-responsive">
                            <form action="dashboard/materis" method="get">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>  
                                    </span>
                                    <input type="search" class="form-control" id="exampleInputIconLeft" placeholder="Search" name="search" aria-label="Search">
                                </div>
                            </form>
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th class="border-bottom" scope="col">#</th>
                                    <th class="border-bottom" scope="col">Nama Materi</th>
                                    <th class="border-bottom" scope="col">Nama Pelajaran</th>
                                    <th class="border-bottom" scope="col">File</th>
                                    <th class="border-bottom" scope="col">Action</th>
    
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materis as $materi)
                                    <tr>
                                        <th class="text-gray-900" scope="row">
                                            {{ $loop->iteration }}
                                        </th>
                                        <td class="fw-bolder text-gray-500">
                                            {{ $materi->nama}}
                                        </td>
                                        <td class="fw-bolder text-gray-500">
                                            {{ $materi->pelajaran->nama }}
                                        </td>
                                        <td class="fw-bolder text-gray-500">
                                            {{ $materi->{'file_path'} }}
                                        </td>
                                        <td class="">
                                            
                                            <a href="/dashboard/materis/{{ $materi->id }}" class="badge bg-info">Info</a>

                                            <a href="/dashboard/materis/{{ $materi->id }}/edit" class="badge bg-warning">Edit</a>
                                            
                                            <form action="/dashboard/materis/{{ $materi->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0  {{ $materi->id }}" onclick="return confirm ('Are you sure?')">Hapus</button>
                                            </form>
                                        </td>
                                    
                                    </tr>  
                                    @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>


    </div>


</div>
@endsection