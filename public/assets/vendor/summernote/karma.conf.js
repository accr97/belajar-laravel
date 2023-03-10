module.exports = function (config) {
  config.set({
    frameworks: ['mocha', 'karma-typescript'],
    colors: true,
    logLevel: config.LOG_INFO,
    files: [
      { pattern: 'src/js/**/*.js' },
      { pattern: 'test/**/*.spec.js' }
    ],
    customLaunchers: {
      ChromeHeadlessNoSandbox: {
        base: "ChromeHeadless",
        flags: [ "--no-sandbox" ]
      }
    },
    // Chrome, ChromeCanary, Firefox, Opera, Safari, IE
    browsers: ['ChromeHeadlessNoSandbox'],
    preprocessors: {
      'src/js/**/*.js': ['karma-typescript'],
      'test/**/*.spec.js': ['karma-typescript']
    },
    reporters: ['dots', 'karma-typescript'],
    coverageReporter: {
      type: 'lcov',
      dir: 'coverage/',
      includeAllSources: true
    },
    browserNoActivityTimeout: 60000,
    karmaTypescriptConfig: {
      tsconfig: './tsconfig.json',
      include: [
        'test/**/*.spec.js'
      ],
      bundlerOptions: {
        entrypoints: /\.spec\.js$/,
        transforms: [require("karma-typescript-es6-transform")()],
        exclude: [
          'vendor'
        ],
        sourceMap: true,
        addNodeGlobals: false
      },
      compilerOptions: {
        "module": "commonjs"
      }
    }
  });
};
