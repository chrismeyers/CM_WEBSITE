module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            css: {
                src: [
                    'css/csselements.css',
                    'css/csselements_medium.css',
                    'css/csselements_small.css',
                    'css/csselements_print.css',
                    'css/csselements_resume.css',
                    'scripts/vendor/fancybox/source/jquery.fancybox.css',
                    'scripts/vendor/fancybox/source/helpers/jquery.fancybox-buttons.css',
                    'scripts/vendor/fancybox/source/helpers/jquery.fancybox-thumbs.css'
                ],
                dest: 'dist/production.css'
            },
            js: {
                src: [
                    'scripts/vendor/jquery-2.2.4.min.js',
                    'scripts/js/callbacks.js',
                    'scripts/js/header.js',
                    'scripts/js/prompt.js',
                    'scripts/js/jselements.js',
                    'scripts/vendor/fancybox/source/jquery.fancybox.pack.js',
                    'scripts/vendor/fancybox/source/helpers/jquery.fancybox-buttons.js',
                    'scripts/vendor/fancybox/source/helpers/jquery.fancybox-media.js',
                    'scripts/vendor/fancybox/source/helpers/jquery.fancybox-thumbs.js'
                ],
                dest: 'dist/production.js'
            }
        },
        uglify: {
            js: {
                src: 'dist/production.js',
                dest: 'dist/production.min.js'
            }
        },
        cssmin: {
            css: {
                src: 'dist/production.css',
                dest: 'dist/production.min.css'
            }
        },
        processhtml: {
            dist: {
                files: {
                    'index.php': ['sections/index_var.php']
                }
            },
            dev: {
                files: {
                    'index.php': ['sections/index_var.php']
                }
            }
        }

    });

    // Plugins
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-processhtml');

    // "grunt" commands
    grunt.registerTask('default', ['concat', 'uglify', 'cssmin', 'processhtml:dist']);
    grunt.registerTask('dist',    ['concat', 'uglify', 'cssmin', 'processhtml:dist']);
    grunt.registerTask('dev',     ['processhtml:dev']);

};
