<?php declare(strict_types = 1);

namespace NoFrameWorkTutorial\Page;

interface PageReader
{
    public function readBySlug(string $slug) : string;
}