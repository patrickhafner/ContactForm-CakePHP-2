<?php
echo sprintf(
"%s: %s
%s: %s

%s:
%s
----------------------------
%s %s",
    __d('contactform', 'name'), Sanitize::clean($data['Name']),
    __d('contactform', 'email'), Sanitize::clean($data['Mail']),

    __d('contactform', 'message'),
    Sanitize::stripAll($data['Message']),

    __d('contactform', 'sent from'), Router::url('/', true)
);