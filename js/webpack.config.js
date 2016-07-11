'use strict';

var path = require( 'path' );   // only needed if you require other pathing
var webpack = require( 'webpack' );

module.exports = {
	entry: './wp-react-app.js',
	output: {
		filename: 'wpra.js'
	},
	module: {
		loaders: [ {
			test: /\.js?$/,
			exclude: /node_modules/,
			loader: 'babel-loader',
			query: {
				"presets": [ "react", "stage-0", "es2015" ]
			}
		} ]
	},
	externals: {
		// Use external version of React
		"react": "React",
		"react-dom": "ReactDOM"
	}
};