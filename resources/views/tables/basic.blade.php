@extends('layouts.app')

@section('title', 'Basic Tables | Cuba - Premium Admin Template')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Bootstrap Basic Tables</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('dashboard') }}">
                                <svg class="stroke-icon">
                                    <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item">Bootstrap Tables</li>
                        <li class="breadcrumb-item active">Bootstrap Basic Tables</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Table with Border Bottom Color</h5>
                        <p class="f-m-light mt-1">
                            Use <code>table</code> class to any table, and <code>border-bottom-*</code> class for Border bottom color.
                        </p>
                    </div>
                    <div class="table-responsive custom-scrollbar">
                        <table class="table">
                            <thead>
                            <tr class="border-bottom-primary">
                                <th scope="col">Id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Company</th>
                                <th scope="col">Language</th>
                                <th scope="col">Country</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="border-bottom-secondary">
                                <th scope="row">1</th>
                                <td>
                                    <img class="img-30 me-2" src="{{ asset('assets/images/user/1.jpg') }}" alt="profile">
                                    Ram Jacob
                                </td>
                                <td>Wolfe</td>
                                <td>RamJacob@twitter</td>
                                <td>Developer</td>
                                <td>Apple Inc.</td>
                                <td><span class="badge badge-light-danger">Php</span></td>
                                <td>IND</td>
                            </tr>
                            <!-- باقي الصفوف -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- باقي الجداول الأخرى -->

        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@push('scripts')
    <script>
        // أي scripts خاصة بالصفحة
        $(document).ready(function() {
            console.log('Basic tables page loaded');
        });
    </script>
@endpush
