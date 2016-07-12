import {createStore} from 'redux';
import WraConstants from './wraConstants';

const wraStore = {
	"showText":""
};

function wraReducers( state = wraStore, action ) {
	switch ( action.type ) {
		case WraConstants.DATA_LOADED:
		{
			let newState = Object.assign( {}, state, action.payload );
			return newState;
		}
		default:
			return state;
	}
}

var WraStore = createStore( wraReducers, wraStore );
export default WraStore;

