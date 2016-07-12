import {connect} from 'react-redux';

var MLLinksList = React.createClass( {
	getLinks: function () {
		return this.props.myLinks.map( ( myLink, index )=> {
			return (<span><a key={index} className="blockLink" target="_blank" href={myLink.link}>{myLink.description}</a><br/></span>);
		} )
	},
	render: function () {
		return (
			<div>
				{this.getLinks()}
			</div>
		);
	}
} );

var mapStateToProps = function ( state ) {
	return {
		myLinks: state.myLinks
	};
};

export default connect( mapStateToProps )( MLLinksList );
