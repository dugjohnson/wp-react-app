/* This action creator is to handle all actions */
import WraConstants from './wraConstants';
import WraAPI from './wraAPI';
import WraStore from './wraStore';

const WraActions = {
	getLinks: function () {
		WraAPI.getMyLinks()
			.done( data=> {
				let response = JSON.parse( data );
				if ( response ) {
					WraStore.dispatch( {
						type: WraConstants.LINKS_LOADED,
						payload: { "myLinks": response }
					} );
				}
			} );
	}
};

export default WraActions;
/* This action creator is to handle all actions */