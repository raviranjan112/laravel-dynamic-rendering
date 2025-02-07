<?php

namespace Coderello\DynamicRendering\RenderingCriteria;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

interface RenderingCriterion
{
    public function matches(Request $request): bool;
}
