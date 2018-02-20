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
    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer')({browsers: ['last 2 versions', 'iOS 8']})
        ]
      },
      dist: {
        files: {
          'css/styles.css': 'css/styles.css'
        }
      }
    },
    cssmin: {
      target: {
        files: {
          'css/styles.css': 'css/styles.css'
        }
      }
    }
  });

  require('load-grunt-tasks')(grunt);

  grunt.registerTask('default', ['sass_import','sass', 'postcss', 'cssmin']);

};
