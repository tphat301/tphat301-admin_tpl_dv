<div class="card mt-4">
    <div class="card-header text-uppercase font-weight-bold d-flex justify-content-between align-items-center">
        <h5 class="card-header_title">Danh sách sản phẩm</h5>
        <div class="bx-form-search form-inline">
            <form action="" class="form-search form-group d-flex">
                <input type="text" name="keyword" class="form-control search" value="Tìm kiếm...">
                <input type="submit" name="btn-search" class="btn btn-primary" value="Tìm kiếm">
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="status-product">
            <a href="" class="text-primary status-active text-decoration-none">
                Đang hoạt động
                <span class="number-status-active">
                    (10)
                </span>
            </a>
            <a href="" class="text-danger status-trash text-decoration-none">
                Vô hiệu hóa
                <span class="number-status-trash">
                    (3)
                </span>
            </a>
        </div>
        <div class="table table-reponse p-0">
            <div class="handle mt-3 mb-3">
                <select name="" id="check-handle" class="form-select">
                    <option value="">--Chọn thao tác--</option>
                    <option value="">Khôi phục</option>
                    <option value="">Xóa tạm thời</option>
                    <option value="">Xóa vĩnh viễn</option>
                </select>
                <input type="submit" name="btn-handle" class="btn btn-primary" value="Áp dụng">
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" class="check_all">
                        </th>
                        <th scope="col">STT</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Mã hàng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Khuyến mãi</th>
                        <th scope="col">Nổi bậc</th>
                        <th scope="col">Hiển thị</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <input type="checkbox" name="check[]" value="">
                        </th>
                        <th scope="row">1</th>
                        <td>Laptop</td>
                        <td>#001</td>
                        <td>1.000.000vnd</td>
                        <td>
                            <input type="checkbox" class="check_show_product_sale">
                        </td>
                        <td>
                            <input type="checkbox" class="check_show_product">
                        </td>
                        <td>
                            <input type="checkbox" class="check_show_display">
                        </td>
                        <td>
                            <a href="">Chỉnh sửa</a>
                            <a href="">Xóa</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>