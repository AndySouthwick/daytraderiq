var webpack = require('webpack')
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const extractSass = new ExtractTextPlugin({
    filename: "[name].[contenthash].css",
    disable: process.env.NODE_ENV === "development"
});
module.exports = function(env){  
    return{
            entry: "./js/app.js",
            output: {
            path: __dirname + "/dist",
            filename: "bundle.js"
        },
        module: {
            rules: [{
                test: /\.scss$/,
                use: extractSass.extract({
                    use: [{
                        loader: "css-loader"
                    }, {
                        loader: "sass-loader"
                    }],
                    // use style-loader in development
                    fallback: "style-loader"
                })
            }]
        },
        plugins: [
            extractSass
        ]
    }


}   

