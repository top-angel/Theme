var webpack = require('webpack');

module.exports = function(env) {
    return {
        entry: './js/app.js',
        output: {
            path: __dirname + "/dist",
            filename: "bundle.js"
        },
        module: {
            rules: [
                {test: /\.html$/, loader: 'raw-loader', exclude: /node_modules/},
                {test: /\.(png|jpe?g|gif)$/, loader: 'file-loader', exclude: /node_modules/},

                {test: /\.(s*)css$/, use:['style-loader', 'css-loader', 'sass-loader']},
                {test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/, use: 'url-loader'}
            ]
        }
    }
}