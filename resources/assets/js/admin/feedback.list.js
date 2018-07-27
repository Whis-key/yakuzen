require('../bootstrap.js');
require('datatables');
require('select2');
require('bootbox');

import {datatableConfig} from './app.constants';

$(document).ready(function(){
	new Vue({
		el: '#feedback-list',
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

				$(document).on('click', '.delete-r', function(){
					var id = $(this).attr('data-id');
					
					bootbox.confirm({
					    message: "Bạn có chắc chắn muốn xóa phản hồi này?",
					    buttons: {
					        confirm: {
					            label: 'Xác nhận',
					            className: 'btn-danger'
					        },
					        cancel: {
					            label: 'Hủy',
					            className: 'btn-link'
					        }
					    },
					    callback: function (result) {
					    	if(result){
								axios.post(app.baseUrl + '/admin/phan-hoi-khach-hang/xoa', {
									id: id
								})
								.then(function(response){
									$this.table.draw(false);
								});
					    	}
					    }
					});
				});
			},
			setupDataTable(){
				var config = datatableConfig;

				config.ajax = {
		        	url: app.baseUrl + '/admin/phan-hoi-khach-hang/danh-sach',
		        	type: 'POST'
		        };

		        config.order = [[1, 'asc']];
				config.columns = [
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
		        		orderable: true,
		        		render: function(data, type, row){
		        			return '<img src="'+app.baseUrl+ row.avatar +'"> ' + row.name
		        		}
		        	},
		        	{
		        		name: 'address',
		        		data: 'address',
		        		orderable: false
		        	},
		        	{
		        		name: 'age',
		        		data: 'age',
		        		orderable: false
		        	},
		        	{
		        		name: 'content',
		        		data: 'content',
		        		orderable: false
		        	},
		        	{
		        		name: '',
		        		data: null,
		        		orderable: false,
		        		className: 'text-center',
		        		render: function(data, type, row){
		        			return '<a href="javascript:;" class="delete-r" data-id="'+row.id+'">Xóa</a>'
		        		}
		        	},
		        	
		        ];

				this.table = $('#registration-table').DataTable(config);

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