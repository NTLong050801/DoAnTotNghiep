@extends('layouts.main')
@section('content')
    <div class="container">
        <h1 class="title-content">Thiết lập hệ thống </h1>
        <div class="block-content">
            <div style="padding: 16px 33px">
                <div class="title-block-content">
                    <h3>Cài đặt chung</h3>
                </div>
                <div class="list-item-block">
                    <div class="item-block">
                        <a href="{{route('users.index')}}">
                            <span><i class="fa-solid fa-users-line"></i></span>
                            <div>
                                <span class="label-item-block">Danh sách tài khoản</span><br>
                                <span class="des-item-block">Quản lý các tài khoản</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="{{route('roles.index')}}">
                            <span><i class="fa-solid fa-user-tag"></i></span>
                            <div>
                                <span class="label-item-block">Phân quyền tài khoản</span><br>
                                <span class="des-item-block">Phân quyền các tài khoản</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="block-content">
            <div style="padding: 16px 33px">
                <div class="title-block-content">
                    <h3>Thông tin ứng viên</h3>
                </div>
                <div class="list-item-block">
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-hospital-user"></i></span>
                            <div>
                                <span class="label-item-block">Nhóm máu</span><br>
                                <span class="des-item-block">Danh mục nhóm máu</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-eye"></i></span>
                            <div>
                                <span class="label-item-block">Thị lực</span><br>
                                <span class="des-item-block">Danh mục thị lực</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-people-roof"></i></span>
                            <div>
                                <span class="label-item-block">Quan hệ gia đình</span><br>
                                <span class="des-item-block">Danh mục quan hệ</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-user-graduate"></i></span>
                            <div>
                                <span class="label-item-block">Học vấn</span><br>
                                <span class="des-item-block">Danh mục học vấn</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="block-content">
            <div style="padding: 16px 33px">
                <div class="title-block-content">
                    <h3>Địa chỉ</h3>
                </div>
                <div class="list-item-block">
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-map-location-dot"></i></span>
                            <div>
                                <span class="label-item-block">Xã - Phường</span><br>
                                <span class="des-item-block">Danh mục xã phường</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-map-location"></i></span>
                            <div>
                                <span class="label-item-block">Quận - Huyện</span><br>
                                <span class="des-item-block">Danh mục quận huyện</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-map"></i></span>
                            <div>
                                <span class="label-item-block">Tỉnh - Thành phố</span><br>
                                <span class="des-item-block">Danh mục tỉnh, thành phố</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="block-content">
            <div style="padding: 16px 33px">
                <div class="title-block-content">
                    <h3>Công việc</h3>
                </div>
                <div class="list-item-block">
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-user-tie"></i></span>
                            <div>
                                <span class="label-item-block">Nghề nghiệp</span><br>
                                <span class="des-item-block">Danh mục nghề nghiệp</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-chalkboard-user"></i></span>
                            <div>
                                <span class="label-item-block">Đào tạo</span><br>
                                <span class="des-item-block">Danh mục đào tạo</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-id-badge"></i></span>
                            <div>
                                <span class="label-item-block">Chuyên ngành</span><br>
                                <span class="des-item-block">Danh mục Chuyên ngành</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-user-plus"></i></span>
                            <div>
                                <span class="label-item-block">Phương thức tuyển dụng</span><br>
                                <span class="des-item-block">Danh mục phương thức tuyển dụng</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-content">
            <div style="padding: 16px 33px">
                <div class="title-block-content">
                    <h3>Thông tin khách hàng</h3>
                </div>
                <div class="list-item-block">
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-handshake-angle"></i></span>
                            <div>
                                <span class="label-item-block">Phân loại khách hàng</span><br>
                                <span class="des-item-block">Danh sách phân loại khách hàng</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-users-viewfinder"></i></span>
                            <div>
                                <span class="label-item-block">Nguồn khách hàng</span><br>
                                <span class="des-item-block">Danh mục nguồn khách hành</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="block-content">
            <div style="padding: 16px 33px">
                <div class="title-block-content">
                    <h3>Thông tin hồ sơ</h3>
                </div>
                <div class="list-item-block">
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-elevator"></i></span>
                            <div>
                                <span class="label-item-block">Nguồn hồ sơ</span><br>
                                <span class="des-item-block">Danh mục nguồn hồ sơ</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-clipboard-user"></i></span>
                            <div>
                                <span class="label-item-block">Ngành nghề</span><br>
                                <span class="des-item-block">Danh mục ngành nghề</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-person-arrow-up-from-line"></i></span>
                            <div>
                                <span class="label-item-block">Đơn vị tiến cử</span><br>
                                <span class="des-item-block">Danh mục đơn vị tiến cử</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-person-arrow-up-from-line"></i></span>
                            <div>
                                <span class="label-item-block">Đơn vị phái cử</span><br>
                                <span class="des-item-block">Danh mục đơn vị phái cử</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="block-content">
            <div style="padding: 16px 33px">
                <div class="title-block-content">
                    <h3>Thiết lập khác</h3>
                </div>
                <div class="list-item-block">
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-money-bill"></i></span>
                            <div>
                                <span class="label-item-block">Tiền tệ</span><br>
                                <span class="des-item-block">Danh mục tiền tệ</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-money-bill-transfer"></i></span>
                            <div>
                                <span class="label-item-block">Loại phiếu thu</span><br>
                                <span class="des-item-block">Danh mục loại phiếu thu</span>
                            </div>
                        </a>
                    </div>
                    <div class="item-block">
                        <a href="#">
                            <span><i class="fa-solid fa-money-bill-trend-up"></i></span>
                            <div>
                                <span class="label-item-block">Loại phiếu chi</span><br>
                                <span class="des-item-block">Danh mục loại phiếu chi</span>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
