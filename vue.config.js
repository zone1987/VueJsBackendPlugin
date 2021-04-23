const path = require('path');
const CopyWebpackPlugin = require("copy-webpack-plugin");

module.exports = {
  outputDir: "Resources/views/backend/_resources",
  filenameHashing: false,
  pages: {
    index: {
      entry: "Resources/views/backend/whatever_vue_js/src/main.js"
    }
  },
  css: {
    extract: {
      filename: 'css/whatever_vue_js.css',
    },
  },
  pluginOptions: {
    'style-resources-loader': {
      preProcessor: 'scss',
      patterns: [

      ]
    }
  },
  configureWebpack: {
    output: {
      filename: 'js/whatever_vue_js.js',
    },
    plugins: [
      new CopyWebpackPlugin(
        {
          patterns: [
            {
              from: path.join(__dirname, 'Resources/views/backend/whatever_vue_js/src/assets'),
              to: path.join(__dirname, 'Resources/views/backend/_resources')
            }
          ]
        }
      )
    ]
  },
  chainWebpack: config => {
    config.optimization.delete('splitChunks')
    config.plugins.delete('html')
    config.plugins.delete('preload')
    config.plugins.delete('prefetch')
  },
}
