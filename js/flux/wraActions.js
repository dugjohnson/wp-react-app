/* This action creator is to handle all actions */
import WraConstants from './wraConstants';
import WraAPI from './wraAPI';
import WraStore from './wraStore';

const WraActions = {
	getText: function () {
		WraAPI.getMyReactData()
			.done( data=> {
				let response = JSON.parse( data );
				if ( response ) {
					WraStore.dispatch( {
						type: WraConstants.DATA_LOADED,
						payload: { "showText": response }
					} );
				}
			} );
	}
};

export default WraActions;
/* This action creator is to handle all actions */