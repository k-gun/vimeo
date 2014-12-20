<?php
/**
 * Copyright 2013, Kerem Gunes <http://qeremy.com/>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

/**
 * @class VimeoException v0.1
 *
 * Throws an exception.
 */
class VimeoException extends Exception
{
    public function __construct() {
        $args = func_get_args();
        $mesg = count($args) == 1
            ? "\n ". $args[0] ."\n"
            : "\n ". vsprintf(array_shift($args), $args) ."\n";
        parent::__construct($mesg);
    }
}