module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass_import: {
      options: {},
      dist: {
        files: {
          'css/styles.scss': ['sass/variables/*.scss', 'sass/mixins/*.scss', 'sass/base/*.scss', 'sass/components/**/*.scss'],
        }
      }
    },
    sass: {
      dist: {
        files: {
          'css/styles.css': 'css/styles.scss'
        }
      }
    },
    watch: {
      sass: {
        files: ['sass/**/*.scss'],
        tasks: ['sass_import', 'sass', 'autoprefixer'],
        options: {
          spawn: false,
        }
      }
    },
    autoprefixer: {
      dist: {
        files: {
          'css/styles.css': 'css/styles.css'
        },
        options: {
          browsers: ['last 2 versions', 'iOS 8']
        }
      }
    },
    cssmin: {
      target: {
        files: {
          'css/styles.css': 'css/styles.css'
        }
      }
    },

    modernizr: {
      dist: {
        crawl: false,
        dest: 'js/modernizr-output.js',
        tests: [
          'flexbox',
          'svg'
        ],
        options: [
          'setClasses'
        ],
        uglify: true
      }
    }
  });

  require('load-grunt-tasks')(grunt);
  grunt.loadNpmTasks("grunt-modernizr"); //not picked up by load-grunt-tasks

  grunt.registerTask('default', ['sass_import','sass', 'autoprefixer', 'cssmin', 'modernizr']);

};
