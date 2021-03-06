<?php

namespace Orchid\CMS\Events\Tools;

use Orchid\CMS\Http\Forms\Tools\Category\CategoryFormGroup;

class CategoryEvent
{
    /**
     * @var
     */
    protected $form;

    /**
     * Create a new event instance.
     * SomeEvent constructor.
     *
     * @param CategoryFormGroup $form
     */
    public function __construct(CategoryFormGroup $form)
    {
        $this->form = $form;
    }
}
