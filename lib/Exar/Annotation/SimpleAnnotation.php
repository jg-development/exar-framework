<?php
namespace Exar\Annotation;

class SimpleAnnotation extends Annotation {
    public function __construct($data, \Reflector $target, $annotationName) {
        parent::__construct($data, $target);
        $this->_name = $annotationName;
    }

    public function getValue() {
        return $this->value;
    }
}