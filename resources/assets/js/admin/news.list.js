require('../bootstrap.js');
require('datatables');
require('select2');
require('bootbox');

import {datatableConfig} from './app.constants';

$(document).ready(function(){
	new Vue({
		el: '#news',
		data: {
			table: null,
			modal: {
				title: '',
				body: ''
			}
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
					    message: "Bạn có chắc chắn muốn xóa bài viết này?",
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
								axios.post(app.baseUrl + '/admin/tin-tuc/xoa', {
									id: id
								})
								.then(function(response){
									$this.table.draw(false);
								});
					    	}
					    }
					});
				});

				$(document).on('click', '.detail', function(){
					var id = $(this).attr('data-id');
					axios.post(app.baseUrl + '/admin/tin-tuc/chi-tiet', {
						id: id
					})
					.then(function(response){
						$this.modal.title = response.data.data.title;
						$this.modal.body = response.data.data.content;

						$('#modal').modal('show');
					});
				});
			},
			setupDataTable(){
				var config = datatableConfig;

				config.ajax = {
		        	url: app.baseUrl + '/admin/tin-tuc/danh-sach',
		        	type: 'POST'
		        };

		        config.order = [[5, 'desc']];
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
		        		name: '',
		        		data: null,
		        		orderable: false,
		        		render: function(data, type, row){
		        			return '<img src="'+app.baseUrl+ row.thumbnail + '">';
		        		}
		        	},
		        	{
		        		name: 'title',
		        		data: 'title',
		        		orderable: false,
		        		render: function(data, type, row){
		        			return '<b>'+row.title+'</b>';
		        		}
		        	},
		        	{
		        		name: 'snippet',
		        		data: 'snippet',
		        		orderable: false
		        	},
		        	{
		        		name: '',
		        		data: null,
		        		orderable: false,
		        		render: function(data, type, row){
		        			return '<span>'+((parseInt(row.category)==0) ? 'Kiến thức mất ngủ' : 'Tư vấn') +'</span>';
		        		}
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
		        			return parseInt(row.hot) ? '<i class="icon-checkmark2"></i>' : '';
		        		}
		        	},
		        	{
		        		name: 'read',
		        		data: 'read',
		        		orderable: false
		        	},
		        	{
		        		name: '',
		        		data: null,
		        		className: 'actions',
		        		orderable: false,
		        		render: function(data, type, row){
		        			return '<a href="javascript:;" class="detail" data-id="'+row.id+'">Chi tiết</a>' +
		        					'<a href="javascript:;" class="delete-r" data-id="'+row.id+'">Xóa</a>';
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