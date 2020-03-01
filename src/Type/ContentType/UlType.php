<?php


namespace SSitdikov\TelegraphAPI\Type\ContentType;


class UlType extends AbstractNodeElementType
{
    protected $tag = 'ul';

    public function addContentElement(AbstractNodeElementType $element)
    {
        $this->children[] = $element;
    }
}