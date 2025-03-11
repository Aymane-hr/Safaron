<x-app-layout>
    <x-profile-layout>
          <!-- Hotel Booking -->
          <div class="col-xl-9 col-lg-8 theiaStickySidebar">

            <!-- Booking Header -->
            {{-- <div class="card booking-header">
                <div class="card-body header-content d-flex align-items-center justify-content-between flex-wrap ">
                    <div>
                        <h6>Flights</h6>
                        <p class="fs-14 text-gray-6 fw-normal ">No of Booking : 40</p>
                    </div>

                    <div class="d-flex align-items-center flex-wrap">
                        <div class="input-icon-start  me-3 position-relative">
                            <span class="icon-addon">
                                <i class="isax isax-calendar-edit fs-14"></i>
                            </span>
                            <input type="text" class="form-control date-range bookingrange" placeholder="Select" value="Academic Year : 2024 / 2025">
                        </div>
                        <div class="dropdown ">
                            <a href="javascript:void(0);" class="dropdown-toggle btn border text-gray-6 rounded  fw-normal fs-14 d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                <i class="ti ti-file-export me-2 fs-14 text-gray-6"></i>Export
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- /Booking Header -->

            <!-- Car-Booking List -->
            <div class="card hotel-list">
                <div class="card-body p-0">
                    <div class="list-header d-flex align-items-center justify-content-between flex-wrap">
                        <h6 class="">Liste de réservation</h6>
                        {{-- <div class="d-flex align-items-center flex-wrap">
                            <div class="input-icon-start  me-2 position-relative">
                                <span class="icon-addon">
                                <i class="isax isax-search-normal-1 fs-14"></i>
                            </span>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="dropdown me-3">
                                <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                Ticket Type
                            </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Business Class</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Economy</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Fare Economy</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown me-3">
                                <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded border d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                Status
                            </a>
                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Upcoming</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Pending</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Cancelled</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Completed</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-flex align-items-center sort-by">
                                <span class="fs-14 text-gray-9 fw-medium">Sort By :</span>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle text-gray-6 btn  rounded d-inline-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                Recommended
                                </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div> --}}
                    </div>

                    <!-- Hotel List -->
                    <div class="custom-datatable-filter table-responsive">
                        <table class="table datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>De - À</th>
                                    <th>Prix</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $reservation)
                                    <tr>
                                        <td><a href="javascript:void(0);" class="link-primary fw-medium" data-bs-toggle="modal" data-bs-target="#upcoming">#{{$reservation->id}}</a></td>
                                        <td>{{$reservation->villeDepart->ville}} - {{$reservation->villeArrivee->ville}}</td>
                                        <td>{{$reservation->prix}}</td>
                                        <td>{{$reservation->date_reservation}}</td>
                                        <td>
                                            <span class="badge badge-info rounded-pill d-inline-flex align-items-center fs-10"><i class="fa-solid fa-circle fs-5 me-1"></i>Upcoming</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#upcoming"><i class="isax isax-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /Hotel List -->

                </div>
            </div>
            <!-- /Car-Booking List -->

            <div class="table-paginate d-flex justify-content-between align-items-center flex-wrap row-gap-3">
                <div class="value d-flex align-items-center">
                    <span>Show</span>
                    <select>
                        <option>5</option>
                        <option>10</option>
                        <option>20</option>
                    </select>
                    <span>entries</span>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <a href="javascript:void(0);"><span class="me-3"><i class="isax isax-arrow-left-2"></i></span></a>
                    <nav aria-label="Page navigation">
                        <ul class="paginations d-flex justify-content-center align-items-center">
                            <li class="page-item me-2"><a class="page-link-1 active d-flex justify-content-center align-items-center " href="javascript:void(0);">1</a></li>
                            <li class="page-item me-2"><a class="page-link-1 d-flex justify-content-center align-items-center" href="javascript:void(0);">2</a></li>
                            <li class="page-item "><a class="page-link-1 d-flex justify-content-center align-items-center" href="javascript:void(0);">3</a></li>
                        </ul>
                    </nav>
                    <a href="javascript:void(0);"><span class="ms-3"><i class="isax isax-arrow-right-3"></i></span></a>
                </div>
            </div>
        </div>
        <!-- /Hotel Booking -->
    </x-profile-layout>

</x-app-layout>
