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
 * Form for editing tag block instances.
 *
 * @package   block_tb_f_courses
 * @copyright  2020 Leeloo LXP (https://leeloolxp.com)
 * @author     Leeloo LXP <info@leeloolxp.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Edit Form class
 *
 * @copyright  2020 Leeloo LXP (https://leeloolxp.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_tb_f_courses_edit_form extends block_edit_form {

    /**
     * If this is passed as mynumber then showallcourses, irrespective of limit by user.
     *
     * @param object $mform Edit Form
     */
    protected function specific_definition($mform) {

        $courses = get_courses();
        $availablecourseslist = array();
        foreach ($courses as $c) {
            $availablecourseslist[$c->id] = $c->shortname . ' : ' . $c->fullname;
        }

        $select = $mform->addElement('select', 'config_courses', get_string('featured_courses', 'block_tb_f_courses'), $availablecourseslist, $attributes);
        $select->setMultiple(true);
    }
}
