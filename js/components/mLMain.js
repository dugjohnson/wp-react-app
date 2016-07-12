import MLGetLink from './mLGetLink';
import MLLinksList from './mLLinksList';

var MLMain = React.createClass( {
	render: function () {
		return (
			<div>
				<MLGetLink />
				<MLLinksList />
			</div>
		);
	}
} );

export default MLMain;
