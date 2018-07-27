require('../bootstrap.js');
require('select2');

$(document).ready(function(){
	$('select').select2({
		minimumResultsForSearch: -1,
		width: '200px'
	});

	CKEDITOR.replace( 'editor', {
        height: '400px',
        extraPlugins: 'forms',
        skin: 'bootstrapck',
        language: 'vi'
    });
});