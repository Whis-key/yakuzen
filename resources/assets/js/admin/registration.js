require('../bootstrap.js');
require('datatables');
require('select2');

import {datatableConfig} from './app.constants';

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
						$this.table.draw(false);
					})
					.catch(function(e){

					});
				});
			},
			setupDataTable(){
				var config = datatableConfig;

				config.ajax = {
		        	url: app.baseUrl + '/admin/danh-sach-dang-ky/ds',
		        	type: 'POST'
		        };

		        config.order = [[3, 'desc']];
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