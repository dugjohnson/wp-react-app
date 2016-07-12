import {connect} from 'react-redux';

var WPReactHello = React.createClass( {
	render: function () {
		return (
			<div>
				<div>Hello World!</div>
				<div>{this.props.message}</div>
			</div>
		);
	}
} );

var mapStateToProps = function ( state ) {
	return {
		message: state.showText
	};
};

export default connect( mapStateToProps )( WPReactHello );
