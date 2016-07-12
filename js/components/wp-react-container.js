import WraStore from '../flux/wraStore';
import WraActions from '../flux/wraActions';
import WPReactHello from './wp-react-Hello';
import {Provider} from 'react-redux';

var WPReactContainer = React.createClass( {
    doInitialSetup: function () {
        WraActions.getText();
    },
    componentWillMount: function () {
        this.doInitialSetup();
    },
    render: function () {
        return (
            <Provider store={WraStore}>
                <WPReactHello/>
            </Provider> );
    }
} );

export default WPReactContainer;
