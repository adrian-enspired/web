module.exports = function(grunt) {
    var gtx = require('gruntfile-gtx').wrap(grunt);

    gtx.loadAuto();

    var gruntConfig = require('./grunt');
    gruntConfig.package = require('./package.json');

    gtx.config(gruntConfig);

    // build Angular
    gtx.alias('build:app', [
        'clean:angular',
        'copy:angular',
        'recess:style',
        'recess:style2',
        'recess:style3',
        'recess:style4',
        'recess:style5',
        'recess:style6',
        'recess:style7',
        'recess:style8',
        'recess:style9',
        'concat:music',
        'concat:crm',
        'uglify:music',
        'uglify:crm',
        'clean:public',
        'copy:public'

    ]);

    // Build Angular Hospital
    // gtx.alias('build:angularmusic', ['clean:angularmusic', 'copy:angularmusic', 'recess:angularmusic', 'concat:angularmusic', 'uglify:angularmusic']);

    gtx.alias('release', ['bower-install-simple', 'build:dev', 'bump-commit']);
    gtx.alias('release-patch', ['bump-only:patch', 'release']);
    gtx.alias('release-minor', ['bump-only:minor', 'release']);
    gtx.alias('release-major', ['bump-only:major', 'release']);
    gtx.alias('prerelease', ['bump-only:prerelease', 'release']);

    gtx.finalise();
}
