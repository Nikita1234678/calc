<?php
namespace Classes\DataModel;
class LayoutDataModel
{
    private string $_pageName = "";
    private array $_body = [];

    public function GetPageName(): string
    {
        return $this->_pageName;
    }

    public function SetPageName(string $pageName): void
    {
        $this->_pageName = $pageName;
    }

    public function GetBody(): array
    {
        return $this->_body;
    }

    public function AddBodySegment(string $bodySegment): void
    {
        $this->_body[] = $bodySegment;
    }

}