<?php
    namespace SBLib\Database\Elements;

    use SBLib\Database\AbstractElement;

    class Datetime extends AbstractElement {

        public function __construct($name, $size = null, $default = false, $autoIncrement = false, $primary = false, $unique = false, $notNull = false) {
            parent::__construct($name, $size, $default, $autoIncrement, $primary, $unique, $notNull);
            $this->_setType('DATETIME');
        }
    }