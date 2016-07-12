import WraStore from '../flux/wraStore';
import WraActions from '../flux/wraActions';
import MLMain from './mLMain';
import {Provider} from 'react-redux';

var WPReactContainer = React.createClass( {
    doInitialSetup: function () {
        WraActions.getLinks();
    },
    componentWillMount: function () {
        this.doInitialSetup();
    },
    render: function () {
        return (
            <Provider store={WraStore}>
                <MLMain/>
            </Provider> );
    }
} );

export default WPReactContainer;
