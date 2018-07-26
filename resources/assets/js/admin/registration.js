require('../bootstrap.js');
require('datatables');
require('select2');

$(document).ready(function(){
	new Vue({
		el: '#registration',
		data: {
			table: null
		},
		mounted(){
			this.setupDataTable();
			this.createEventListeners();
		},
		methods: {
			createEventListeners(){
				var $this = this;

				$(document).on('click', '.mark-processed', function(){
					var id = $(this).attr('data-id');

					axios.post(app.baseUrl + '/admin/danh-sach-dang-ky/xu-ly', {
						id: id
					})
					.then(function(response){
						$this.table.draw();
					})
					.catch(function(e){

					});
				});
			},
			setupDataTable(){
				this.table = $('#registration-table').DataTable(
					{
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
				        ajax: {
				        	url: app.baseUrl + '/admin/danh-sach-dang-ky/ds',
				        	type: 'POST'
				        },
				        order: [[3, 'desc']],
				        columns: [
				        	{
				        		name: '',
				        		data: null,
				        		orderable: false,
				        		render: function(){
				        			return ''
				        		}
				        	},
				        	{
				        		name: 'name',
				        		data: 'name',
				        		orderable: false,
				        	},
				        	{
				        		name: 'phone',
				        		data: 'phone',
				        		orderable: false
				        	},
				        	{
				        		name: 'created_at',
				        		data: 'created_at',
				        		orderable: true
				        	},
				        	{
				        		name: '',
				        		data: null,
				        		orderable: false,
				        		render: function(data, type, row){
				        			return parseInt(row.status) ? 'Đã xử lý' : '<span class="text-danger">Chưa xử lý</span>'
				        		}
				        	},
				        	{
				        		name: '',
				        		data: null,
				        		orderable: false,
				        		render: function(data, type, row){
				        			return parseInt(row.status) ? '' : '<a href="javascript:;" class="mark-processed" data-id="'+row.id+'">Đánh dấu đã xử lý</a>';
				        		}
				        	}
				        ]
					});

				var $this = this;
				this.table.on('draw.dt', function () {
					console.log('Indexing');
			        $this.table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			        	var page = $this.table.page.info().page;
			        	var length = $this.table.page.info().length;

			            cell.innerHTML = i+1 + length*page;
			        } );
			    } );

			}
		}
	})
});