mod_simplemod
=============

`mod_simplemod` is a minimal Moodle activity module intended to be used as an example plugin.

What it does
------------

- Lets a teacher create a basic activity with:
  - the standard activity name
  - the standard introduction/description
  - an optional page title shown inside the activity
- Renders the activity page with a simple Mustache template
- Includes backup and restore support

Compatibility
-------------

This plugin is intended to work with Moodle **4.4 and later**.

Continuous integration
----------------------

The repository includes a GitHub Actions workflow based on
[`moodlehq/moodle-plugin-ci`](https://github.com/moodlehq/moodle-plugin-ci)
to validate the plugin against Moodle 4.4, 4.5, 5.0 and 5.1.

The workflow runs the following checks:

- `phplint`
- `phpcs`
- `phpdoc`
- `validate`
- `savepoints`

If PHPUnit or Behat tests are added later, the workflow is already prepared to
run them automatically when test files are present.
