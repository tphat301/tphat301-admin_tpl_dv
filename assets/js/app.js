$(document).ready(function () {
    /*
    **
    ** Click active sidebar line
    **
    */ 

    let iconArrow = $('.manager_product');
    iconArrow.click(function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('active');
        $(this).parent().next().stop().slideToggle(500);
        if ($(this).hasClass('.manager_product')) {
            $(this).attr('chevron-left', 'chevron-down');
        }

        switch ($(this).attr('name')) {
            case 'chevron-left':
                $(this).attr('name', 'chevron-down');
                break;
            case 'chevron-down':
                $(this).attr('name', 'chevron-left');
                break;

            default:
                break;
        }
        return false;
    });
});
