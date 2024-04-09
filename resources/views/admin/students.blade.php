@extends('adminTemplate')
@section('content')
    <!-- Page main content START -->
    <div class="page-content-wrapper border">

        <!-- Title -->
        <div class="row">
            <div class="col-12">
                <h1 class="h3 mb-2 mb-sm-0">Students</h1>
            </div>
        </div>

        <div class="card bg-transparent">

            <!-- Card header START -->
            <div class="card-header bg-transparent border-bottom px-0">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">

                    <!-- Search bar -->
                    <div class="col-md-8">
                        <form class="rounded position-relative">
                            <input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
                            <button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>

                    <!-- Tab button -->
                    <div class="col-md-3">
                        <!-- Tabs START -->
                        <ul class="list-inline mb-0 nav nav-pills nav-pill-dark-soft border-0 justify-content-end" id="pills-tab" role="tablist">
                            <!-- Grid tab -->
                            <li class="nav-item">
                                <a href="#nav-preview-tab-1" class="nav-link mb-0 me-2 active" data-bs-toggle="tab">
                                    <i class="fas fa-fw fa-th-large"></i>
                                </a>
                            </li>
                            <!-- List tab -->
                            <li class="nav-item">
                                <a href="#nav-html-tab-1" class="nav-link mb-0" data-bs-toggle="tab">
                                    <i class="fas fa-fw fa-list-ul"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- Tabs end -->
                    </div>
                </div>
                <!-- Search and select END -->
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body px-0">

                <!-- Tabs content START -->
                <div class="tab-content">

                    <!-- Tabs content item START -->
                    <div class="tab-pane fade show active" id="nav-preview-tab-1">
                        <div class="row g-4">
                            @foreach($students as $student)
                                <!-- Card item START -->
                                <div class="col-md-6 col-xxl-4">
                                    <div class="card bg-transparent border h-100">
                                        <!-- Card header -->
                                        <div class="card-header bg-transparent border-bottom d-flex justify-content-between">
                                            <div class="d-sm-flex align-items-center">
                                                <!-- Avatar -->
                                                <div class="avatar avatar-md flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                                                </div>
                                                <!-- Info -->
                                                <div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
                                                    <h5 class="mb-0"><a href="#">{{$student->name}}</a></h5>
                                                    <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>{{$student->email}}</span>
                                                </div>
                                            </div>

                                            <!-- Edit dropdown -->
                                            <div class="dropdown text-end">
                                                <a href="#" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bi bi-three-dots fa-fw"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare2">
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="bi bi-trash fa-fw me-2"></i>Remove</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Card footer -->
                                        <div class="card-footer bg-transparent border-top">
                                            <div class="d-sm-flex justify-content-between align-items-center">
                                                <!-- Rating star -->
                                                <h6 class="mb-2 mb-sm-0">
                                                    <i class="bi bi-calendar fa-fw text-orange me-2"></i><span class="text-body">Join at:</span> {{$student->created_at}}
                                                </h6>
                                                <!-- Buttons -->
                                                <div class="text-end text-primary-hover">
                                                    <a href="#" class="btn btn-link text-body p-0 mb-0 me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
                                                        <i class="bi bi-envelope-fill"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-link text-body p-0 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Block" aria-label="Block">
                                                        <i class="fas fa-ban"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card item END -->
                            @endforeach



                    <!-- Tabs content item START -->
                    <div class="tab-pane fade" id="nav-html-tab-1">
                        <div class="table-responsive border-0">
                            <table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
                                <!-- Table head -->
                                <thead>
                                <tr>
                                    <th scope="col" class="border-0 rounded-start">Instructor name</th>
                                    <th scope="col" class="border-0">Join date</th>
                                    <th scope="col" class="border-0">Progress</th>
                                    <th scope="col" class="border-0">Courses</th>
                                    <th scope="col" class="border-0">Payments</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                                </thead>

                                <!-- Table body START -->
                                <tbody>

                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/avatar/09.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="mb-0 ms-3">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="#" class="stretched-link">Lori Stevens</a></h6>
                                                <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>Mumbai</span>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>29 Aug 2021</td>

                                    <!-- Table data -->
                                    <td class="text-center text-sm-start">
                                        <div class="overflow-hidden">
                                            <h6 class="mb-0">85%</h6>
                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>21</td>

                                    <!-- Table data -->
                                    <td>$6,205</td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
                                            <i class="bi bi-envelope"></i>
                                        </a>
                                        <button class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/avatar/04.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="mb-0 ms-3">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="#" class="stretched-link">Billy Vasquez</a></h6>
                                                <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>Delhi</span>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>15 July 2021</td>

                                    <!-- Table data -->
                                    <td class="text-center text-sm-start">
                                        <div class="overflow-hidden">
                                            <h6 class="mb-0">60%</h6>
                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>16</td>

                                    <!-- Table data -->
                                    <td>$1,256</td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
                                            <i class="bi bi-envelope"></i>
                                        </a>
                                        <button class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/avatar/03.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="mb-0 ms-3">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="#" class="stretched-link">Dennis Barrett</a></h6>
                                                <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>New york</span>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>22 June 2021</td>

                                    <!-- Table data -->
                                    <td class="text-center text-sm-start">
                                        <div class="overflow-hidden">
                                            <h6 class="mb-0">74%</h6>
                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>38</td>

                                    <!-- Table data -->
                                    <td>$9,256</td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
                                            <i class="bi bi-envelope"></i>
                                        </a>
                                        <button class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/avatar/09.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="mb-0 ms-3">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="#" class="stretched-link">Lori Stevens</a></h6>
                                                <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>California</span>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>18 April 2021</td>

                                    <!-- Table data -->
                                    <td class="text-center text-sm-start">
                                        <div class="overflow-hidden">
                                            <h6 class="mb-0">45%</h6>
                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>07</td>

                                    <!-- Table data -->
                                    <td>$10,688</td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
                                            <i class="bi bi-envelope"></i>
                                        </a>
                                        <button class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/avatar/05.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="mb-0 ms-3">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="#" class="stretched-link">Jacqueline Miller</a></h6>
                                                <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>Chennai</span>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>05 Aug 2021</td>

                                    <!-- Table data -->
                                    <td class="text-center text-sm-start">
                                        <div class="overflow-hidden">
                                            <h6 class="mb-0">90%</h6>
                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>05</td>

                                    <!-- Table data -->
                                    <td>$856</td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
                                            <i class="bi bi-envelope"></i>
                                        </a>
                                        <button class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </td>
                                </tr>

                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Image -->
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/avatar/02.jpg" class="rounded-circle" alt="">
                                            </div>
                                            <div class="mb-0 ms-3">
                                                <!-- Title -->
                                                <h6 class="mb-0"><a href="#" class="stretched-link">Samuel Bishop</a></h6>
                                                <span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>Canada</span></div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>18 Jan 2021</td>

                                    <!-- Table data -->
                                    <td class="text-center text-sm-start">
                                        <div class="overflow-hidden">
                                            <h6 class="mb-0">30%</h6>
                                            <div class="progress progress-sm bg-primary bg-opacity-10">
                                                <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                    <!-- Table data -->
                                    <td>14</td>

                                    <!-- Table data -->
                                    <td>$3,578</td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-light btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Message">
                                            <i class="bi bi-envelope"></i>
                                        </a>
                                        <button class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Block">
                                            <i class="fas fa-ban"></i>
                                        </button>
                                    </td>
                                </tr>

                                </tbody>
                                <!-- Table body END -->
                            </table>
                        </div>
                    </div>
                    <!-- Tabs content item END -->

                </div>
                <!-- Tabs content END -->
            </div>
            <!-- Card body END -->

            <!-- Card footer START -->
            <div class="card-footer bg-transparent pt-0 px-0">
                <!-- Pagination START -->
                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                    <!-- Content -->
                    <p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                    <!-- Pagination -->
                    <nav class="d-flex justify-content-center mb-0" aria-label="navigation">
                        <ul class="pagination pagination-sm pagination-primary-soft mb-0 pb-0 px-0">
                            <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <!-- Card footer END -->
        </div>
    </div>
    <!-- Page main content END -->
@endsection


{{--<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container my-5">
            <h2>Список пользователей</h2>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Имя</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Управление</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="changeUser/{{$user->id}}">[изменить]</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>--}}