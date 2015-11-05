<?php namespace Mautab\Manager\Block;

use Mautab\Manager\Manager;
use Mautab\Models\Block;

class BlockManager extends Manager
{


    public function blockBySlug($slug = null)
    {
        return Block::where('slug', $slug)
            ->with('element.storyLang')
            ->firstOrFail();
    }

}

