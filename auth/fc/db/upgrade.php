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
 * First Class authentication plugin upgrade code
 *
 * @package    auth_fc
 * @copyright  2017 Stephen Bourget
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Function to upgrade auth_fc.
 * @param int $oldversion the version we are upgrading from
 * @return bool result
 */
function xmldb_auth_fc_upgrade($oldversion) {
    global $CFG, $DB;

    // Automatically generated Moodle v3.2.0 release upgrade line.
    // Put any upgrade step following this.

    if ($oldversion < 2017020700) {
        // Convert info in config plugins from auth/fc to auth_fc.
        $DB->set_field('config_plugins', 'plugin', 'auth_fc', array('plugin' => 'auth/fc'));
        upgrade_plugin_savepoint(true, 2017020700, 'auth', 'fc');
    }

    return true;
}
