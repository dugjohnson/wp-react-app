'use strict';

var path = require( 'path' );
var webpack = require( 'webpack' );

module.exports = {
	entry: './marketplace-mailer-detail.js',
	output: {
		path: '..',
		filename: 'mp-mailer-detail.js'
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