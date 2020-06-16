module.exports = function(grunt) {

  grunt.initConfig({
    sass: {                              // Task
       dist: {                            // Target
         options: {                       // Target options
           style: 'expanded'
         },
         files: {                         // Dictionary of files
           'css/main.css': 'sass/main.scss'      // 'destination': 'source'

         }
       }
     },
    jshint: {
      files: ['Gruntfile.js', 'js/script.js'],
      options: {
        globals: {
          jQuery: true
        }
      }
    },
    watch: {
      files: ['Gruntfile.js', 'js/script.js','sass/main.scss','css/main.css'],
      tasks: ['sass','jshint']
    }

  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');


  grunt.registerTask('default', ['watch']);

};
