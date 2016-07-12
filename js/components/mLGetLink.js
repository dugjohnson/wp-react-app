var MLGetLink = React.createClass( {
	render: function () {
		return (
			<div className="newLink">
				<input type="text" placeholder="Description"></input>
				<input type="url" placeholder="Link to site"></input>
			</div>
		);
	}
} );

export default MLGetLink;
