const path = require('path');

module.exports = {
  entry: './assets/js/dev/index.js',
  output: {
    filename: 'index.js',
    path: path.resolve(__dirname, 'assets/js'),
  },
};