<div class="card card-ed">
    <div class="card-header text-uppercase font-weight-bold d-flex justify-content-between align-items-center">
        <h5 class="card-header_title">Danh sách sản phẩm</h5>
        <div class="bx-form-search form-inline">
            <form action="" class="form-search form-group d-flex">
                <input type="text" name="keyword" class="form-control search" placeholder="Tìm kiếm...">
                <input type="submit" name="btn-search" class="btn btn-primary btn-s-action" value="Tìm kiếm" disabled>
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
            <div class="handle mt-3 mb-3 d-flex">
                <select name="" id="check-handle" class="form-select">
                    <option value="">--Chọn thao tác--</option>
                    <option value="">Khôi phục</option>
                    <option value="">Xóa tạm thời</option>
                    <option value="">Xóa vĩnh viễn</option>
                </select>
                <input type="submit" name="btn-handle" class="btn btn-primary" value="Áp dụng" disabled>
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
                            <input type="checkbox" name="check[]" class="check_item" value="">
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
                            <a href="" class="text-danger">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <input type="checkbox" name="check[]" class="check_item" value="">
                        </th>
                        <th scope="row">2</th>
                        <td>Điện thoại</td>
                        <td>#002</td>
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
                            <a href="" class="text-danger">Xóa</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.addEventListener('DOMContentLoaded', function() {
        /*
         **
         ** Click input form checkbox card form
         **
         */
        let checkAll = $('.check_all');
        let checkItem = $('.check_item');
        let buttonAction = $('input[name="btn-handle"]');
        checkAll.change(function() {
            switch ($(this).prop('checked')) {
                case true:
                    checkItem.prop('checked', true);
                    buttonAction.prop('disabled', false);
                    break;

                case false:
                    checkItem.prop('checked', false);
                    buttonAction.prop('disabled', true);
                    break;

                default:
                    break;
            }
        });

        // Handle change event when clicked item input checkbox
        checkItem.change(function() {
            if (parseInt(checkItem.length) === parseInt($('input[name="check[]"]:checked').length)) {
                checkAll.prop('checked', true);
            } else {
                checkAll.prop('checked', false);
            }
            // Tenarry Operator
            $('input[name="check[]"]:checked').length === 0 ? buttonAction.prop('disabled', true) : buttonAction.prop('disabled', false);
        });

        // Handle change event when clicked input search
        let inputSearch = $('.search');
        let buttonSearchAction = $('.btn-s-action');
        inputSearch.keyup(function(e) {
            e.target.value ? buttonSearchAction.prop('disabled', false) : buttonSearchAction.prop('disabled', true);
        });
    });
</script>