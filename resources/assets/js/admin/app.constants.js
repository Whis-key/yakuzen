export var datatableConfig = {
	autoWidth: true,
    dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
    language: {
        search: '<span>Tìm kiếm:</span> _INPUT_',
        searchPlaceholder: 'Nhập từ khóa ...',
        lengthMenu: '<span>Số bản ghi:</span> _MENU_',
        paginate: { 'first': 'Đầu', 'last': 'Cuối', 'next': '&rarr;', 'previous': '&larr;' },
        "emptyTable":     "Không tìm thấy kết quả",
        "info":           "Hiển thị _START_ đến _END_ trong số _TOTAL_ kết quả",
         "infoEmpty":      "",
    },
    drawCallback: function () {
        $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
        $('.dataTables_length select').select2({
        	minimumResultsForSearch: -1
        });

        console.log('Draw');
    },
    preDrawCallback: function() {
        $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
    },
    serverSide: true,
};