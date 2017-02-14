module.exports = function(grunt) {

  // Project configuration.
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
			less: {
				development: {
		    		options: {
		    			paths: ['library/less/']
		    		},
		    		files: {
	                    'library/css/style.css': 'library/less/style.less',
	                    'library/css/login.css': 'library/less/login.less',
	                    'library/css/editor-style.css': 'library/less/editor-style.less'
		    		}
		    	}
			},
			cssmin: {
				options: {
					sourceMap: true
				},
				target: {
	                files: {
	                    'library/css/login.min.css': 'library/css/login.css',
	                    'library/css/style.min.css': 'library/css/style.css',
	                    'library/css/editor-style.min.css': 'library/css/editor-style.css'
	                }
	            }
			},
			autoprefixer: {
				dist: {
	                files: {
	                    'library/css/style.css': 'library/css/style.css',
                    	'library/css/login.css': 'library/css/login.css',
                		'library/css/editor-style.css': 'library/css/editor-style.css'
	                }
	            }
			},
			watch: {
//				scripts: {
//					files: [],
//					tasks: [],
//					options: {
//				      spawn: false,
//				    }
//				},
				less: {
					files: [ 'library/less/**/*.less' ],
					tasks: ['less', 'autoprefixer', 'cssmin'],
					options: {
				      spawn: false,
				    }
				},
				configFiles: {
					files: [ 'Gruntfile.js' ],
				    options: {
				      reload: true
				    }
				}
			}
		});

	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['less', 'autoprefixer', 'cssmin', 'watch']);
};