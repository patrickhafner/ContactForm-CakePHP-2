<?php
/**
 * ContactForm for CakePHP 2.x
 *
 * Copyright 2012-2013 by Patrick Hafner (http://patrickhafner.de)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 */

Router::connect('/contact', array('plugin' => 'Contactform', 'controller' => 'contactform', 'action' => 'show'));
Router::connect('/kontakt', array('plugin' => 'Contactform', 'controller' => 'contactform', 'action' => 'show'));
