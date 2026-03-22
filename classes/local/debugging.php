<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Simple debugging class
 *
 * @package    mod_simplemod
 * @copyright  2019 Richard Jones richardnz@outlook.com
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace mod_simplemod\local;

/**
 * Helper for writing simple debug output to a local file.
 */
class debugging {
    /**
     * Append debugging information to the local log file.
     *
     * @param mixed $message A label for the logged value.
     * @param mixed $value The value to log.
     * @return void
     */
    public static function logit($message, $value) {
        global $CFG;

        $filepath = $CFG->dataroot . '/simplemod_mylog.log';
        $file = fopen($filepath, 'ab');

        if ($file) {
            fwrite($file, var_export($message, true));
            fwrite($file, var_export($value, true));
            fwrite($file, "\n");
            fclose($file);
        }
    }
}
