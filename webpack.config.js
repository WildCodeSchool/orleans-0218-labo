let Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('web/build/')
    .setPublicPath('/build')
    .cleanupOutputBeforeBuild()
    .enableSassLoader()
    .addEntry('app', './assets/js/app.js')
    .addEntry('reservation', './assets/js/reservation.js')
    .addEntry('flatpickr', './node_modules/flatpickr/dist/flatpickr.css')
    .addEntry('bcPaint', './assets/scss/bcPaint.css')
    .addEntry('bcPaint.mobile', './assets/scss/bcPaint.mobile.css')
    .addEntry('style', './assets/scss/main.scss')
    .createSharedEntry('vendor', [
        'jquery',
        'bootstrap',
    ])
    .enableBuildNotifications()
    .autoProvidejQuery();

module.exports = Encore.getWebpackConfig();