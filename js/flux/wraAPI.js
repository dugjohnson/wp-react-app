/* This API file is to talk to the wordpress AJAX API */

const WraAPI = {
	getMyReactData: function () {
		return jQuery.ajax( {
			url: '/wp-admin/admin-ajax.php',
			method: 'GET',
			data: {
				action: 'getMyReactData'
			}
		} );
	}
};

export default WraAPI;