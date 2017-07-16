module.exports = function(grunt) {

    require('time-grunt')(grunt);
    var timestamp = Math.round((new Date()).getTime() / 1000);

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            css: {
                src: [
                    'css/common.css',
                    'css/csselements.css',
                    'css/csselements_small.css',
                    'css/csselements_print.css',
                    'css/csselements_resume.css',
                    'scripts/vendor/fancybox-3.0/dist/jquery.fancybox.min.css'
                ],
                dest: 'dist/production.concat.css'
            },
            js: {
                src: [
                    'scripts/vendor/jquery-2.2.4.min.js',
                    'scripts/js/header.js',
                    'scripts/js/jselements.js',
                    'scripts/js/prompt.js',
                    'scripts/vendor/fancybox-3.0/dist/jquery.fancybox.min.js'
                ],
                dest: 'dist/production.concat.js'
            },
            db_dev: {
                options: {
                    separator: '',
                },
                src: [
                    'db/dev.txt',
                    'db/login.txt'
                ],
                dest: 'db/login_config.txt'
            },
            db_prod: {
                options: {
                    separator: '',
                },
                src: [
                    'db/production.txt',
                    'db/login.txt'
                ],
                dest: 'db/login_config.txt'
            }
        },
        uglify: {
            js: {
                src: 'dist/production.concat.js',
                dest: 'dist/production.min.' + timestamp + '.js'
            }
        },
        cssmin: {
            css: {
                src: 'dist/production.concat.css',
                dest: 'dist/production.min.' + timestamp + '.css'
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
        },
        replace: {
            dist: {
                options: {
                    patterns: [
                        {
                            match: 'jsMinFile',
                            replacement: '<script type="text/javascript" src="dist/production.min.' + timestamp + '.js"></script>'
                        },
                        {
                            match: 'cssMinFile',
                            replacement: '<link rel="stylesheet" href="dist/production.min.' + timestamp + '.css" />'
                        }
                    ]
                },
                files: [
                    {
                        src: 'index.php',
                        dest: 'index.php'
                    }
                ]
            }
        },
        clean: {
            all: ['dist/*'],
            concat: ['dist/production.concat.*']
        }
    });

    // Plugins
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-processhtml');
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-replace');

    // "grunt" commands
    grunt.registerTask('default', ['clean:all', 'newer:concat:css', 'newer:concat:js', 'concat:db_dev', 'newer:uglify', 'newer:cssmin', 'processhtml:dist', 'replace:dist', 'clean:concat']);
    grunt.registerTask('prod',    ['clean:all', 'newer:concat:css', 'newer:concat:js', 'concat:db_prod', 'newer:uglify', 'newer:cssmin', 'processhtml:dist', 'replace:dist', 'clean:concat']);
    grunt.registerTask('dev',     ['concat:db_dev', 'processhtml:dev']);
};
