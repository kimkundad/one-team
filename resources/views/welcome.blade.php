<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="{{ url('/assets/js/color-modes.js') }}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="hrap movie night">
    <meta name="author" content="True Blog">
    <title>hrap movie night</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/img/favicon-light-32x32.png') }}" />



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="{{ url('/assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        .fs-16 {
            font-size: 26px
        }

        .btn-checkin {
            color: white;
            background-color: #ff3366;
            border: none;
        }

        .btn-checkin:hover {
            background-color: rgb(216, 39, 83);
            color: white;
        }
        .search {
    background-color: #fff;
    padding: 4px;
    border-radius: 5px
}

.search-1 {
    position: relative;
    width: 100%
}

.search-1 input {
    height: 45px;
    border: none;
    width: 100%;
    padding-left: 34px;
    padding-right: 10px;
    border-right: 2px solid #eee
}

.search-1 input:focus {
    border-color: none;
    box-shadow: none;
    outline: none
}

.search-1 i {
    position: absolute;
    top: 12px;
    left: 5px;
    font-size: 24px;
    color: #eee
}

::placeholder {
    color: #eee;
    opacity: 1
}

.search-2 {
    position: relative;
    width: 100%
}

.search-2 input {
    height: 45px;
    width: 100%;
    padding-left: 18px;
    padding-right: 100px
}

.search-2 input:focus {
    border-color: none;
    box-shadow: none;
    outline: none
}

.search-2 i {
    position: absolute;
    top: 12px;
    left: -10px;
    font-size: 24px;
    color: #eee
}

.search-2 button {
    position: absolute;
    right: 1px;
    top: 0px;
    border: none;
    height: 45px;
    background-color: red;
    color: #fff;
    width: 90px;
    border-radius: 4px
}

@media (max-width:800px) {
    .search-1 input {
        border-right: none;
        border-bottom: 1px solid #eee
    }

    .search-2 i {
        left: 4px
    }

    .search-2 input {
        padding-left: 34px
    }

    .search-2 button {
        height: 37px;
        top: 5px
    }
}
    </style>


    <!-- Custom styles for this template -->
    {{-- <link href="{{ url('/assets/css/pricing.css') }}" rel="stylesheet"> --}}
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="container py-3">
        <header>
            <div class="d-flex justify-content-center flex-md-row align-items-center mb-4 border-bottom">
                <a href="{{ url('/') }}" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                    <img src="{{ url('assets/img/Asset 2@2x-8.png') }}" class="img-fluid" style="height: 95px" />
                </a>
            </div>
        </header>

        <main>


            <h2 class="display-6 fs-16 mb-4">
                จำนวนผู้ลงทะเบียนแล้ว
                <span id="registered-count">{{ $registeredCount }}</span> คน
            </h2>

            <div class="search mb-3">
                <form action="{{ url('/search') }}" method="GET">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-2">
                                <input type="text" name="name" value="{{ $searchTerm }}" class="form-control" placeholder="ชื่อ - นามสกุล, id พนักงาน">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-hover text-center">
                    <thead>
                        <tr class="table-active">
                            <th>No.</th>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Group</th>
                            <th>Phone</th>
                            <th>Timestamp</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $rowNumber = 1; @endphp
                    @forelse($results as $index => $result)
                        <tr>
                            <td>{{ $rowNumber++ }}</td>
                            <td>{{ $result[3] ?? '-' }}</td>
                            <td>{{ ($result[4] ?? '-') . ' ' . ($result[5] ?? '-') }}</td>
                            <td>{{ $result[1] ?? '-' }}</td>
                            <td>{{ $result[6] ?? '-' }}</td>
                            <td>{{ $result[9] ?? '-' }}</td>
                            <td>
                                @if(isset($result[8]) && $result[8] != '1') <!-- ตรวจสอบว่า I ไม่ใช่ 1 -->
                                    <button
                                        class="btn btn-checkin"
                                        data-row-index="{{ $index + 2 }}" <!-- ระบุ Row Index -->

                                        Check in
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">ไม่พบข้อมูล</td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
            </div>
        </main>

        <footer class="pt-4 my-md-5 pt-md-5 ">
            <br>
        </footer>
    </div>
    <script src="{{ url('/assets/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // เมื่อคลิกปุ่ม Check in
        document.querySelectorAll('.btn-checkin').forEach(function (button) {
            button.addEventListener('click', function () {
                const rowIndex = this.getAttribute('data-row-index'); // รับ Row Index

                // ส่งคำขอ AJAX
                fetch('{{ route('checkin') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ rowIndex: rowIndex })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // แจ้งเตือนความสำเร็จ
                        Swal.fire({
                            icon: 'success',
                            title: 'สำเร็จ!',
                            text: data.message
                        });

                        document.getElementById('registered-count').textContent = data.registeredCount;

                        // เปลี่ยนสถานะปุ่ม (ปิดการใช้งานหรือซ่อน)
                        this.disabled = true;
                        this.textContent = 'Checked in';
                    } else {
                        // แจ้งเตือนข้อผิดพลาด
                        Swal.fire({
                            icon: 'error',
                            title: 'เกิดข้อผิดพลาด',
                            text: data.message
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: 'ไม่สามารถเชื่อมต่อกับเซิร์ฟเวอร์ได้'
                    });
                });
            });
        });
    });
</script>

</html>
