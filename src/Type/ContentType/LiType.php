<?php


namespace SSitdikov\TelegraphAPI\Type\ContentType;


class LiType extends AbstractNodeElementType
{
    protected $tag = 'li';

    public function setText($text)
    {
        $this->children = [$text];
    }

    public function addContentElement(AbstractNodeElementType $element)
    {
        $this->children[] = $element;
    }
}