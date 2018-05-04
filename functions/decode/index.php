<?php

/**
 * index.php
 *
 * This file simply takes any attempt to view source files and sends those
 * people to the login screen. At this point no attempt is made to see if the
 * person is logged in or not.
 *
 * @copyright 1999-2012 The SquirrelMail Project Team
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id: index.php 14248 2012-01-02 00:18:17Z pdontthink $
 * @package squirrelmail
 * @subpackage decode
 */

header('Location: ../index.php');
