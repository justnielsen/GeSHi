<?php
/*************************************************************************************
 * modelica.php
 * -----------
 * Author: Rene Just Nielsen (rene@justnielsen.com)
 * Copyright: (c) 2013 Rene Just Nielsen (http://www.justnielsen.com)
 * Release Version: 1.0
 * Date Started: 2013/09/27
 *
 * Modelica language file for GeSHi.
 *
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Modelica',
    'COMMENT_SINGLE' => array(1 => '//'),
    'COMMENT_MULTI' => array(),
    //Matlab Strings
    'COMMENT_REGEXP' => array(
        2 => "/(?<![\\w\\)\\]\\}\\.])('[^\\n']*?')/"
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array(),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array(
            'annotation', 'assert', 'block', 'class', 'connector', 'constant', 'discrete', 'else', 'elseif', 'elsewhen', 'end', 'equation', 'exit', 'extends',
			'external', 'final', 'flow', 'for', 'function', 'if', 'import', 'in', 'inner', 'input', 'loop', 'model', 'nondiscrete', 'outer', 'output', 'package',
			'parameter', 'record', 'redeclare', 'replaceable', 'return', 'size', 'terminate', 'then', 'type', 'when', 'while'
            ),
        2 => array(
            'algorithm', 'equation', 'protected', 'public'
            ),
        3 => array(
			'abs','acos','asin','atan','atan2','connect','cos','cosh','cross','der',
			'edge','exp','initial','noEvent', 'pre','reinit','sample','sign','sin',
			'sinh','tan','tanh','terminal'
            ),
        2 => array(
            'true', 'false', 'and', 'or','not'
            )
        ),
    'SYMBOLS' => array(
        '...'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        //3 => false,
        //4 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #0000FF;',
            2 => 'color: #0000FF;',
            3 => 'color: #0000FF;',
            4 => 'color: #0000FF;'
            ),
        'COMMENTS' => array(
            1 => 'color: #228B22;',
            2 => 'color:#A020F0;'
            ),
        'ESCAPE_CHAR' => array(
            0 => ''
            ),
        'BRACKETS' => array(
            0 => 'color: #080;'
            ),
        'STRINGS' => array(
            //0 => 'color: #A020F0;'
            ),
        'NUMBERS' => array(
            0 => 'color: #33f;'
            ),
        'METHODS' => array(
            1 => '',
            2 => ''
            ),
        'SYMBOLS' => array(
            0 => 'color: #080;'
            ),
        'REGEXPS' => array(
            0 => 'color: #33f;'
            ),
        'SCRIPT' => array(
            0 => ''
            )
        ),
    'URLS' => array(
        1 => '',
        2 => 'http://www.modelica.org'
        ),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        //Complex numbers
        0 => '(?<![\\w\\/])[+-]?[\\d]*([\\d]\\.|\\.[\\d])?[\\d]*[ij](?![\\w]|\<DOT>html)'
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        )
);

?>