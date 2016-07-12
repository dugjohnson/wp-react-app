import {render} from 'react-dom';
import WPReactContainer from './components/wp-react-container';

jQuery(document).ready(function () {
        render(<WPReactContainer />, document.querySelector('#mylinksapp'));
    }
);