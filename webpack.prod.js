const { merge } = require('webpack-merge');
const commonConfig = require('./webpack.common.js');
const TerserPlugin = require('terser-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const outputFile = '[name]-[chunkhash]';
const assetFile = '[name]-[contenthash]';

module.exports = () =>
  merge(commonConfig({ outputFile, assetFile }), {
    mode: 'production',
    optimization: {
      minimizer: [
        new TerserPlugin({
          extractComments: false,
          terserOptions: {
            compress: {
              drop_console: true,
            },
          },
        }),
      ],
    },
    module: {
      rules: [
        {
          test: /\.(css|sass|scss)$/,
          use: [
            {
              loader: MiniCssExtractPlugin.loader,
            },
            {
              loader: 'css-loader',
              options: {
                sourceMap: true, //開発時true,本番false
              },
            },
            {
              loader: 'postcss-loader',
            },
            {
              loader: 'sass-loader',
            },
          ],
        },
      ],
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: `./css/${outputFile}.css`,
      }),
      new HtmlWebpackPlugin({
        template: './src/tmp/webpack.html',
        filename: 'inc/webpack.inc',
        chunks: ['main'],
        inject:'head' ,
      }),
      // new HtmlWebpackPlugin({
      //   template: './src/tmp/sub.pug',
      //   filename: 'member/sub.html',
      //   chunks: ['sub'],
      // }),
    ],
  });
