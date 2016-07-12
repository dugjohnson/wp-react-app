/* This API file is to talk to the wordpress AJAX API */

const WraAPI = {
	getMyLinks: function () {
		return jQuery.ajax( {
			url: '/wp-admin/admin-ajax.php',
			method: 'GET',
			data: {
				action: 'getMyLinks'
			}
		} );
	}
};

export default WraAPI;