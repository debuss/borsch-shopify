<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

class ScriptTag extends BaseType
{

    use CountTrait;

    /** @see BaseType::$path */
    protected $path = 'script_tags';

    /** @var string */
    public $created_at;

    /** @var string */
    public $event;

    /** @var string */
    public $src;

    /** @var string */
    public $display_scope;

    /** @var string */
    public $updated_at;

    /**
     * @param string $created_at
     * @return ScriptTag
     */
    public function createdAt(string $created_at): ScriptTag
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @param string $event
     * @return ScriptTag
     */
    public function event(string $event): ScriptTag
    {
        $this->event = $event;

        return $this;
    }

    /**
     * @param string $src
     * @return ScriptTag
     */
    public function src(string $src): ScriptTag
    {
        $this->src = $src;

        return $this;
    }

    /**
     * @param string $display_scope
     * @return ScriptTag
     */
    public function displayScope(string $display_scope): ScriptTag
    {
        $this->display_scope = $display_scope;

        return $this;
    }

    /**
     * @param string $updated_at
     * @return ScriptTag
     */
    public function updatedAt(string $updated_at): ScriptTag
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
