const babelLoaderExcludeNodeModulesExcept = require("babel-loader-exclude-node-modules-except");
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const SVGSpritemapPlugin = require("svg-spritemap-webpack-plugin");
const isProduction = process.env.NODE_ENV === "production";

module.exports = {
  entry: {
    main: "./resources/src/scripts/index.js",
  },

  output: {
    path: path.resolve(__dirname, "public/dist"),
    filename: "js/[name].js",
    chunkFilename: "js/modules/[name].js",
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: babelLoaderExcludeNodeModulesExcept([
          // es6 modules from node_modules/
          "custom-jquery-methods",
          "swiper",
          "dom7",
        ]),

        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
            plugins: ["@babel/plugin-transform-runtime"],
          },
        },
      },

      {
        test: /\.css$/,
        exclude: /node_modules/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: "css-loader",
          },
          {
            loader: "postcss-loader",
            options: {
              sourceMap: !isProduction,
            },
          },
        ],
      },
      {
        test: /\.scss$/,
        exclude: /node_modules/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: "css-loader",
            options: {
              url: false,
              importLoaders: 2,
            },
          },
          {
            loader: "postcss-loader",
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: !isProduction,
            },
          },
        ],
      },
      { test: /\.svg$/, use: "svg-inline-loader" },
    ],
  },

  plugins: [
    new MiniCssExtractPlugin({
      filename: "css/main.css",
      chunkFilename: "css/modules/[name].css",
    }),
    new SVGSpritemapPlugin("resources/src/sprites/*.svg", {
      output: {
        svg: {
          // Disable `width` and `height` attributes on the root SVG element
          sizes: false,

          // as these will skew the sprites when using the <view> via fragment identifiers
        },
      },
      sprite: {
        generate: {
          // Generate <use> tags within the spritemap as the <view> tag will use this
          use: true,

          // Generate <view> tags within the svg to use in css via fragment identifier url

          // Generate <symbol> tags within the SVG to use in HTML via <use> tag
          symbol: true,
        },
      },
    }),
  ],
  optimization: {
    minimize: isProduction,
    splitChunks: {
      chunks: "async",
      name: "index",
    },
  },
  /*resolve: {
    modules: ["src", "node_modules"],
    extensions: [".js", ".css", ".scss"],
  },*/
  mode: isProduction ? "production" : "development",
  devtool: isProduction ? false : "inline-source-map",
};
