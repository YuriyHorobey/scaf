<?php
// default file with application security rules
// read more in documentation for ATZ
use engine\ATZ;

ATZ::defaultAnswerIs ( PROHIBITED );
ATZ::allow ( 'admin', '*' );

?>