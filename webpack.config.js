const path = require('path');

module.exports = {
    entry: [
        './app/public_html/src/scripts/app.js',
        './app/public_html/src/styles/app.scss'
    ],
    output: {
        path: path.resolve(__dirname, './app/public_html/dist'),
        filename: 'js/app.min.js'
    },
    module: {
        rules: [
            {
                test: /\.s[ac]ss$/i,
                use: [
                    {
                        loader: 'file-loader',
                        options: {
                            outputPath: 'css/',
                            name: '[name].min.css'
                        }
                    },
                    'sass-loader'
                ]
            }
        ]
    }
}
